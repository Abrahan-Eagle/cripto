<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Nuevo mensaje de contacto - UniblockWeb</title>
    <style type="text/css">
        /* Base Styles */
        body {
            margin: 0 !important;
            padding: 0 !important;
            width: 100% !important;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            line-height: 1.5;
            color: #333333;
            background-color: #f7f7f7;
        }

        /* Outlook Fixes */
        #outlook a { padding:0; }
        .ReadMsgBody { width:100%; }
        .ExternalClass { width:100%; }
        .ExternalClass, .ExternalClass p, .ExternalClass span,
        .ExternalClass font, .ExternalClass td, .ExternalClass div {
            line-height: 100%;
        }

        /* Image Fixes */
        img {
            -ms-interpolation-mode:bicubic;
            border: 0;
            height: auto;
            line-height: 100%;
            outline: none;
            text-decoration: none;
            max-width: 100%;
        }

        /* Table Fixes */
        table {
            border-collapse: collapse !important;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }
        td {
            word-break: break-word;
        }

        /* Responsive Styles */
        @media only screen and (max-width: 600px) {
            .email-container {
                width: 100% !important;
            }
            .fluid {
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            .stack-column-center {
                text-align: center !important;
            }
            .center-on-mobile {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            .hide-on-mobile {
                display: none !important;
                max-height: 0 !important;
                overflow: hidden !important;
            }
            .padding-mobile {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }
        }

        /* Button Styles */
        .button {
            background-color: #5D9CEC;
            color: #ffffff !important;
            display: inline-block;
            font-weight: normal;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 4px;
            mso-hide: all;
        }

        /* Footer Styles */
        .footer {
            font-size: 12px;
            color: #999999;
            line-height: 1.5;
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #f7f7f7;">
    <!-- Preheader Text -->
    <div style="display: none; max-height: 0; overflow: hidden;">
        Tiene un nuevo mensaje de contacto de {{ $data['name'] }} - {{ $data['subject'] }}
    </div>

    <!-- Email Container -->
    <table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="600" style="margin: auto;" class="email-container">
        <!-- Header -->
        <tr>
            <td style="padding: 20px 0; text-align: center; background-color: #ffffff;">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td style="text-align: left; padding-left: 20px;">
                            <a href="https://uniblockweb.com" target="_blank">
                                {{-- <img loading="lazy" src="{{ asset('/images/logo/LOGO.jpg') }}" alt="UniblockWeb Logo" width="52" style="display: block;"> --}}
                                <img loading="lazy" src="https://uniblockweb.com/images/logo/LOGO.jpg" alt="UniblockWeb Logo" width="52" style="display: block;">

                            </a>
                        </td>
                        <td style="text-align: right; padding-right: 20px;" class="hide-on-mobile">
                            <span style="color: #666666; font-size: 14px;">
                                Contáctanos - UniblockWeb<br>
                                Mensaje de contacto
                            </span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Hero Image -->
        <tr>
            <td style="background-color: #ffffff; padding: 0 0 20px 0;">
                {{-- <img loading="lazy" src="{{ asset('/images/emails/responsive-email.png') }}" width="600" alt="Nuevo mensaje de contacto" class="fluid" style="width: 100%; max-width: 600px;"> --}}
                <img loading="lazy" src="https://uniblockweb.com/images/emails/responsive-email.png" width="600" alt="Nuevo mensaje de contacto" class="fluid" style="width: 100%; max-width: 600px;">

            </td>
        </tr>

        <!-- Main Content -->
        <tr>
            <td style="background-color: #ffffff; padding: 20px 40px 40px 40px;" class="padding-mobile">
                <h1 style="font-size: 24px; color: #333333; text-align: center; margin: 0 0 20px 0;">
                    Tiene un nuevo mensaje de contacto
                </h1>

                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td style="padding: 10px 0; border-bottom: 1px solid #eeeeee;">
                            <strong>Asunto:</strong> {{ $data['subject'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0; border-bottom: 1px solid #eeeeee;">
                            <strong>Nombre:</strong> {{ $data['name'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0; border-bottom: 1px solid #eeeeee;">
                            <strong>Email:</strong> <a href="mailto:{{ $data['email'] }}" style="color: #5D9CEC; text-decoration: none;">{{ $data['email'] }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 20px 0 10px 0;">
                            <strong>Mensaje:</strong>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 10px 0 30px 0;">
                            {{ $data['message'] }}
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">
                            <a href="mailto:{{ $data['email'] }}?subject=Re: {{ $data['subject'] }}" class="button" style="color: #ffffff; text-decoration: none;">
                                Responder a {{ $data['name'] }}
                            </a>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <!-- Footer -->
        <tr>
            <td style="background-color: #ffffff; padding: 20px 40px;" class="padding-mobile">
                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                    <tr>
                        <td style="text-align: center; padding: 20px 0;" class="footer">
                            <p style="margin: 0 0 10px 0;">
                                <strong>UniblockWeb</strong><br>
                                Calle Suapure, Quinta Las Delicias<br>
                                Colinas de Bello Monte, Municipio Baruta<br>
                                Caracas, Venezuela
                            </p>
                            <p style="margin: 0; font-size: 11px; color: #bbbbbb;">
                                &copy; {{ date('Y') }} UniblockWeb. Todos los derechos reservados.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
