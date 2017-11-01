<?php
/**
 * Created by PhpStorm.
 * User: leonardom
 * Date: 10/31/17
 * Time: 3:28 PM
 */

namespace Hangar\LaravelErrorReporting\Exceptions;


use Exception;
use Illuminate\Contracts\Container\Container;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;


class Handler extends ExceptionHandler
{
    /**
     * Create a new exception handler instance.
     *
     * @param \Illuminate\Contracts\Container\Container $container
     */
    public function __construct(Container $container)
    {
        parent::__construct($container);

        $this->dontReport = array_merge($this->dontReport, config('thi-laravel-error-reporting.dont_report'));
    }

    /**
     * Report an exception.
     *
     * @param  \Exception $e
     * @return mixed
     *
     * @throws \Exception
     */
    public function report(Exception $e)
    {
        if ($this->shouldReport($e)) {

            if (config('app.debug') !== false) return;

            $this->reportByEmail($e);
        }

        parent::report($e);
    }

    private function reportByEmail(Exception $e)
    {
        $env     = \App::environment();
        $content = $this->getReportContent($e);

        \Mail::send(
            config('thi-laravel-error-reporting.mail.view'),
            ['content' => $content],
            function (\Illuminate\Mail\Message $message) use ($env) {

                $subject = sprintf('%s | env[%s]', config('thi-laravel-error-reporting.mail.subject'), $env);
                $message->from(config('thi-laravel-error-reporting.mail.from_address'),
                               config('thi-laravel-error-reporting.mail.from_name'));
                $message->to(config('thi-laravel-error-reporting.mail.to_address'));
                $message->subject($subject);
            }
        );
    }

    /**
     * Returns the email report content.
     *
     * It forces the DEBUG environment variable, so we can get the whole exception message
     *
     * @param  \Exception $e
     * @return string
     */
    private function getReportContent(Exception $e)
    {
        $originalDebugSetting = config('app.debug');

        \Config::set('app.debug', true);

        if (ExceptionHandler::isHttpException($e)) {
            $content = ExceptionHandler::toIlluminateResponse(ExceptionHandler::renderHttpException($e), $e);
        } else {
            $content = ExceptionHandler::toIlluminateResponse(ExceptionHandler::convertExceptionToResponse($e), $e);
        }

        //return to original value
        \Config::set('app.debug', $originalDebugSetting);

        return (!isset($content->original)) ? $e->getMessage() : $content->original;
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Exception $e
     * @return \Illuminate\Http\Response | \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Exception $e)
    {
        if ($e instanceof \Illuminate\Session\TokenMismatchException) {
            return redirect()->back()->withInput()->with('token', csrf_token());
        }

        if (!$this->shouldReport($e)) {
            return parent::render($request, $e);
        }

        if ($this->isHttpException($e)) {
            return $this->renderHttpException($e);
        } else {
            // Custom error 500 view on production
            if (config('app.env') == 'production') {
                return response()->view('errors.500', [], 500);
            }

            return parent::render($request, $e);
        }

        return parent::render($request, $e);
    }
}