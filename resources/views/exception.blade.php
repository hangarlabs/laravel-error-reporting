<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>CM Career Development Crash Report</title>

    <style type="text/css">
        /* Critical Mass Fonts */
        @font-face {
            font-family: "Plantin W01_n2";
            src: url("{{ asset('/fonts/1a3074c0-1dfa-4c4a-9ab7-ba43a8c9da76.eot?#iefix') }}") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01";
            src: url("{{ asset('/fonts/1a3074c0-1dfa-4c4a-9ab7-ba43a8c9da76.eot?#iefix') }}");
            src: url("{{ asset('/fonts/1a3074c0-1dfa-4c4a-9ab7-ba43a8c9da76.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/c046bc03-14a3-495c-9044-bf4e3d1f42b2.woff') }}") format("woff"),
            url("{{ asset('/fonts/66f7785c-7a09-4fec-adc6-67510f73c305.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/e65cd52b-7573-41b6-adb9-171afa04e0df.svg#e65cd52b-7573-41b6-adb9-171afa04e0df') }}") format("svg");
            font-weight: 200;
            font-style: normal;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01_i2";
            src: url("{{ asset('/fonts/4315b58b-9cde-4a58-babb-c50c36d8c8dd.eot?#iefix') }}") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01";
            src: url("{{ asset('/fonts/4315b58b-9cde-4a58-babb-c50c36d8c8dd.eot?#iefix') }}");
            src: url("{{ asset('/fonts/4315b58b-9cde-4a58-babb-c50c36d8c8dd.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/18bc7daa-a9ae-423a-b9d5-b0ebf7c377c2.woff') }}") format("woff"),
            url("{{ asset('/fonts/e25c36c7-2865-4994-b8b7-3369dda3fe1d.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/c7ad5855-40ca-42c1-aebc-5731468115fd.svg#c7ad5855-40ca-42c1-aebc-5731468115fd') }}") format("svg");
            font-weight: 200;
            font-style: italic;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01_n6";
            src: url("{{ asset('/fonts/2dc45e40-4898-4eda-8766-a31636c1fe20.eot?#iefix') }}") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01";
            src: url("{{ asset('/fonts/2dc45e40-4898-4eda-8766-a31636c1fe20.eot?#iefix') }}");
            src: url("{{ asset('/fonts/2dc45e40-4898-4eda-8766-a31636c1fe20.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/e4225ef2-c093-41e9-b0f8-ef8e9c26ac7d.woff') }}") format("woff"),
            url("{{ asset('/fonts/fb73c277-a9e2-4fcb-9205-191bdbd85fba.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/859f0b7b-97c6-4cae-86db-b6f0c4197429.svg#859f0b7b-97c6-4cae-86db-b6f0c4197429') }}") format("svg");
            font-weight: 600;
            font-style: normal;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01_i6";
            src: url("{{ asset('/fonts/babf0326-8288-4342-aaac-ae34b1eb5da0.eot?#iefix') }}") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01";
            src: url("{{ asset('/fonts/babf0326-8288-4342-aaac-ae34b1eb5da0.eot?#iefix') }}");
            src: url("{{ asset('/fonts/babf0326-8288-4342-aaac-ae34b1eb5da0.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/01e5926a-08ef-41d2-add4-72fd196b24ea.woff') }}") format("woff"),
            url("{{ asset('/fonts/7c66afcf-c217-4401-bbfa-65dd25db39aa.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/2fe0fac3-31de-4201-8aaf-caf6a423e4a6.svg#2fe0fac3-31de-4201-8aaf-caf6a423e4a6') }}") format("svg");
            font-weight: 600;
            font-style: italic;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01_n4";
            src: url("{{ asset('/fonts/') }} edef9783-f31d-432c-b185-6c740f57581c.eot?#iefix") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01";
            src: url("{{ asset('/fonts/edef9783-f31d-432c-b185-6c740f57581c.eot?#iefix') }}");
            src: url("{{ asset('/fonts/edef9783-f31d-432c-b185-6c740f57581c.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/c0298116-5d2e-4005-8ffa-0c4f6e267cb8.woff') }}") format("woff"),
            url("{{ asset('/fonts/f8f5f55c-fe22-41d0-af7a-e8a8b7a73515.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/615272da-6b84-4070-9cbc-f94c312e8c4c.svg#615272da-6b84-4070-9cbc-f94c312e8c4c') }}") format("svg");
            font-weight: 400;
            font-style: normal;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01_i4";
            src: url("{{ asset('/fonts/') }} 0ec522d5-f2b6-497a-9e2c-d81be1d14204.eot?#iefix") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01";
            src: url("{{ asset('/fonts/0ec522d5-f2b6-497a-9e2c-d81be1d14204.eot?#iefix') }}");
            src: url("{{ asset('/fonts/0ec522d5-f2b6-497a-9e2c-d81be1d14204.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/2107c143-ba56-4728-8762-7b5a86b6358f.woff') }}") format("woff"),
            url("{{ asset('/fonts/cc40e96d-12c8-46bc-8688-ece821f02a23.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/70790672-019a-46fb-a178-5062ff15b519.svg#70790672-019a-46fb-a178-5062ff15b519') }}") format("svg");
            font-weight: 400;
            font-style: italic;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01_n7";
            src: url("{{ asset('/fonts/1f355959-6c0d-4d7b-b85e-73d60bf24e76.eot?#iefix') }}") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01";
            src: url("{{ asset('/fonts/1f355959-6c0d-4d7b-b85e-73d60bf24e76.eot?#iefix') }}");
            src: url("{{ asset('/fonts/1f355959-6c0d-4d7b-b85e-73d60bf24e76.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/e0d7df89-4fe6-47f2-af62-b83cdf2e8d0a.woff') }}") format("woff"),
            url("{{ asset('/fonts/1b513c70-7b4a-412f-9fb9-7145eb6be8bc.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/07abf508-cb5a-48f8-942b-a79002a9717e.svg#07abf508-cb5a-48f8-942b-a79002a9717e') }}") format("svg");
            font-weight: 700;
            font-style: normal;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01_i7";
            src: url("{{ asset('/fonts/da9812ef-ecf4-4f53-b56f-73bf94337109.eot?#iefix') }}") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Plantin W01";
            src: url("{{ asset('/fonts/da9812ef-ecf4-4f53-b56f-73bf94337109.eot?#iefix') }}");
            src: url("{{ asset('/fonts/da9812ef-ecf4-4f53-b56f-73bf94337109.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/e8ce04ff-9df9-419a-ba35-21744139769c.woff') }}") format("woff"),
            url("{{ asset('/fonts/9afbc2b1-16c3-442f-9ab9-40a06e6a83a9.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/3c6b306c-eae7-4d35-a0e2-aca6cdaf2f73.svg#3c6b306c-eae7-4d35-a0e2-aca6cdaf2f73') }}") format("svg");
            font-weight: 700;
            font-style: italic;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01_n5";
            src: url("{{ asset('/fonts/413d9688-00d4-47c4-bb55-656a0cd396e9.eot?#iefix') }}") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01";
            src: url("{{ asset('/fonts/413d9688-00d4-47c4-bb55-656a0cd396e9.eot?#iefix') }}");
            src: url("{{ asset('/fonts/413d9688-00d4-47c4-bb55-656a0cd396e9.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/c4aef0d4-bfcf-4790-acf5-909881f411e8.woff') }}") format("woff"),
            url("{{ asset('/fonts/e741f29c-bc18-4343-bff3-db2465a0be3e.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/853e2a9b-4057-42a5-ad7e-0762cda0b13c.svg#853e2a9b-4057-42a5-ad7e-0762cda0b13c') }}") format("svg");
            font-weight: 500;
            font-style: normal;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01_o5";
            src: url("{{ asset('/fonts/59fa12c0-25c9-4c0c-bd1e-32204311d86d.eot?#iefix') }}") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01";
            src: url("{{ asset('/fonts/59fa12c0-25c9-4c0c-bd1e-32204311d86d.eot?#iefix') }}");
            src: url("{{ asset('/fonts/59fa12c0-25c9-4c0c-bd1e-32204311d86d.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/1c164451-034c-41f5-9542-390709016510.woff') }}") format("woff"),
            url("{{ asset('/fonts/7062b4ff-265a-4366-b34f-443ec5cc2dad.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/09f52831-e1cf-48be-9c1e-2d1577e420b7.svg#09f52831-e1cf-48be-9c1e-2d1577e420b7') }}") format("svg");
            font-weight: 500;
            font-style: oblique;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01_n8";
            src: url("{{ asset('/fonts/bb3aa0a7-2585-4e89-ad82-658fd561751a.eot?#iefix') }}") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01";
            src: url("{{ asset('/fonts/bb3aa0a7-2585-4e89-ad82-658fd561751a.eot?#iefix') }}");
            src: url("{{ asset('/fonts/bb3aa0a7-2585-4e89-ad82-658fd561751a.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/1454a71d-cdbb-429c-8092-122f4493e0c7.woff') }}") format("woff"),
            url("{{ asset('/fonts/d5ea405c-2180-4ff0-bd51-3e19fb280be4.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/70ac6679-cf48-4a0e-a909-d1e3bb4a1aa9.svg#70ac6679-cf48-4a0e-a909-d1e3bb4a1aa9') }}") format("svg");
            font-weight: 800;
            font-style: normal;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01_o8";
            src: url("{{ asset('/fonts/363fd092-cd55-4bd1-bdc5-cfc9a7057517.eot?#iefix') }}") format("eot");
        }

        @font-face {
            font-family: "Trade Gothic W01";
            src: url("{{ asset('/fonts/363fd092-cd55-4bd1-bdc5-cfc9a7057517.eot?#iefix') }}");
            src: url("{{ asset('/fonts/363fd092-cd55-4bd1-bdc5-cfc9a7057517.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/25f577c3-f32b-4fbf-b684-3e7c1a76d1ea.woff') }}") format("woff"),
            url("{{ asset('/fonts/2ed49e17-92ad-4026-9ae6-d20f88f21840.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/969cd675-2b4c-4baa-ada6-62bb7ace778f.svg#969cd675-2b4c-4baa-ada6-62bb7ace778f') }}") format("svg");
            font-weight: 800;
            font-style: oblique;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01_n4";
            src: url("{{ asset('/fonts/087e5c21-3358-4cf3-9d2c-289a03a48292.eot?#iefix') }}") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01";
            src: url("{{ asset('/fonts/087e5c21-3358-4cf3-9d2c-289a03a48292.eot?#iefix') }}");
            src: url("{{ asset('/fonts/087e5c21-3358-4cf3-9d2c-289a03a48292.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/fb754dec-aa8f-444c-be48-868464c47ab0.woff') }}") format("woff"),
            url("{{ asset('/fonts/295ff20c-2b48-4fa6-be92-a53bbf9bbbb4.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/c573d9d0-0726-4b95-aeee-fb621a299563.svg#c573d9d0-0726-4b95-aeee-fb621a299563') }}") format("svg");
            font-weight: 400;
            font-style: normal;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01_o4";
            src: url("{{ asset('/fonts/d8bd40fc-2c9a-4086-8784-aa10c7143886.eot?#iefix') }}") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01";
            src: url("{{ asset('/fonts/d8bd40fc-2c9a-4086-8784-aa10c7143886.eot?#iefix') }}");
            src: url("{{ asset('/fonts/d8bd40fc-2c9a-4086-8784-aa10c7143886.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/9131f395-46ef-4940-8480-8ff008c42e59.woff') }}") format("woff"),
            url("{{ asset('/fonts/d399cbfa-b9be-47ac-983c-3600c2684bb2.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/18bf7dff-7b52-4a2c-8fcc-c7eac8f02636.svg#18bf7dff-7b52-4a2c-8fcc-c7eac8f02636') }}") format("svg");
            font-weight: 400;
            font-style: oblique;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01_n7";
            src: url("{{ asset('/fonts/257c802f-349c-4b4d-aefa-546d5de15ec6.eot?#iefix') }}") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01";
            src: url("{{ asset('/fonts/257c802f-349c-4b4d-aefa-546d5de15ec6.eot?#iefix') }}");
            src: url("{{ asset('/fonts/257c802f-349c-4b4d-aefa-546d5de15ec6.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/5fdc935e-9e30-442a-bbe9-8d887b858471.woff') }}") format("woff"),
            url("{{ asset('/fonts/616c4c87-a077-43f4-a9f4-f01267c13818.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/c901ad5f-a842-4549-a1f4-583a97f7e169.svg#c901ad5f-a842-4549-a1f4-583a97f7e169') }}") format("svg");
            font-weight: 700;
            font-style: normal;
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01_o7";
            src: url("{{ asset('/fonts/0061ab1d-ac0a-492f-a33d-d95980a095a8.eot?#iefix') }}") format("eot");
            mso-font-alt: 'Arial';
        }

        @font-face {
            font-family: "Trade Gothic W01";
            src: url("{{ asset('/fonts/0061ab1d-ac0a-492f-a33d-d95980a095a8.eot?#iefix') }}");
            src: url("{{ asset('/fonts/0061ab1d-ac0a-492f-a33d-d95980a095a8.eot?#iefix') }}") format("eot"),
            url("{{ asset('/fonts/1feee13e-ded1-4d73-9d76-c5ed16a43117.woff') }}") format("woff"),
            url("{{ asset('/fonts/b3f82d90-14bc-4c20-8a10-a6b7bd0f304f.ttf') }}") format("truetype"),
            url("{{ asset('/fonts/5e602f8a-1e6a-461e-bfd8-ff46a5460527.svg#5e602f8a-1e6a-461e-bfd8-ff46a5460527') }}") format("svg");
            font-weight: 700;
            font-style: oblique;
            mso-font-alt: 'Arial';
        }

        /* Client-specific Styles */
        div, p, a, li, td { -webkit-text-size-adjust:none; }
        #outlook a {padding:0;} /* Force Outlook to provide a "view in browser" menu link. */
        html{width: 100%; }
        body{width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0;}
        /* Prevent Webkit and Windows Mobile platforms from changing default font sizes, while not breaking desktop design. */
        .ExternalClass {width:100%;} /* Force Hotmail to display emails at full width */
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing. */
        #backgroundTable {margin:0; padding:0; width:100% !important; line-height: 100% !important;}
        img {outline:none; text-decoration:none;border:none; -ms-interpolation-mode: bicubic;}
        a img {border:none;}
        .image_fix {display:block;}
        p {margin: 0px 0px !important;}
        table td {border-collapse: collapse;}
        table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
        a {color: #33b9ff;text-decoration: none;text-decoration:none!important;}
        /*STYLES*/
        table[class=full] { width: 100%; clear: both; }

        form {position: absolute; top: 0; left: 0; display: none !important;}  /* hide form tags generated by croppic */

        /*IPAD STYLES*/
        @media only screen and (max-width: 640px) {
            a[href^="tel"], a[href^="sms"] {
                text-decoration: none;
                color: #33b9ff; /* or whatever your want */
                pointer-events: none;
                cursor: default;
            }
            .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                text-decoration: default;
                color: #33b9ff !important;
                pointer-events: auto;
                cursor: default;
            }
            /*table[class=devicewidth] {width: 440px!important;text-align:center!important;}
            table[class=devicewidthinner] {width: 420px!important;text-align:center!important;}
            img[class=banner] {width: 100%!important;height:100%!important;}
            img[class=col2img] {width: 440px!important;height:220px!important;}*/

            table[class=devicewidth] {width: 100%!important;text-align:center!important;}
            table[class=devicewidthinner] {width: 100%!important;text-align:center!important;}
            img[class=banner] {height:auto !important;max-width: 540px !important;width: 100% !important;}
            img[class=col2img] {width: 440px!important;height:220px!important;}
            img[class=croppedImg] {height:auto !important;max-width: 540px !important;width: 100% !important;}

            table[class="mobile_fullwidth"] {width: 100% !important;}
            td[class="mobilePadding"] {padding:0 20px !important;}
            td[class="mobilePadding40"] {padding:0 40px !important;}

            /*td[class=devicewidth] { padding:50px; }*/

        }
        /*IPHONE STYLES*/
        @media only screen and (max-width: 480px) {
            a[href^="tel"], a[href^="sms"] {
                text-decoration: none;
                color: #33b9ff; /* or whatever your want */
                pointer-events: none;
                cursor: default;
            }
            .mobile_link a[href^="tel"], .mobile_link a[href^="sms"] {
                text-decoration: default;
                color: #33b9ff !important;
                pointer-events: auto;
                cursor: default;
            }
            /*table[class=devicewidth] {width: 280px!important;text-align:center!important;}
            table[class=devicewidthinner] {width: 260px!important;text-align:center!important;}
            img[class=banner] {width: 100%!important;height:100%!important;}
            img[class=col2img] {width: 280px!important;height:140px!important;}*/

            table[class=devicewidth] {width: 100%!important;text-align:center!important;}
            table[class=devicewidthinner] {width: 100%!important;text-align:center!important;}
            img[class=banner] {height:auto !important;max-width: 540px !important;width: 100% !important;}
            img[class=col2img] {width: 280px!important;height:140px!important;}
            img[class=croppedImg] {height:auto !important;max-width: 540px !important;width: 100% !important;}

            table[class="mobile_fullwidth"] {width: 100% !important;}
            table[class="mobile_full"] {width: 100% !important;}
            table[class="mobile_full"] .content-centered{text-align: center!important;padding: 0 !important;}
            table[class="mobile_full"] .content-centered-padding-bottom{text-align: center!important;padding: 0 0 30px 0!important;}
            td[class="mobilePadding"] {padding:0 20px !important;}

            /* Main Banner custom clasess to set font-size according the lenght of the month selected */
            td[class="month-length-9"] {font-size: 54px !important; letter-spacing: -3px !important;}
            td[class="month-length-8"] {font-size: 58px !important; letter-spacing: -3px !important;}
            td[class="month-length-7-6"] {font-size: 70px !important;}
            td[class="month-length-5-4"] {font-size: 104px !important;}
            td[class="month-length-3"] {font-size: 122px !important;}

        }
    </style>
</head>
<body style="background-color:#FFFFFF; width:100%;" bgcolor="#FFFFFF" width="100%">
<!-- Here the content of the builder (tables) -->
{!! $content !!}
</body>
</html>