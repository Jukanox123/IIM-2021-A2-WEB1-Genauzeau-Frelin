<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <meta name="format-detection" content="telephone=no"/>

    {{ Html::style('css/email.css') }}

    <title></title>

</head>

<body topmargin="0" rightmargin="0" bottommargin="0" leftmargin="0" marginwidth="0" marginheight="0" width="100%"
      bgcolor="#F0F0F0" text="#000000">

<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" class="background table1">
    <tr>
        <td align="center" valign="top" bgcolor="#F0F0F0" class="td1">
            
            <table border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#FFFFFF" width="560"
                   class="container table3">

                <tr>
                    <td align="center" valign="top" class="hero td3">
                        <a target="_blank" style="text-decoration: none;"
                           href="https://github.com/konsav/email-templates/">
                            <img border="0" vspace="0" hspace="0"
                                 src="https://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-320709.png"
                                 width="560" class="picture"/>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td align="center" valign="top" class="paragraph">
                        You have just received an email from the Laravel blog from <strong>Valentin Genauzeau</strong>
                        and <strong>Elliot Frelin</strong>.
                    </td>
                </tr>

                <tr>
                    <td align="center" valign="top" class="paragraph">
                        {{ $bodyMessage }}
                    </td>
                </tr>

                <tr>
                    <td align="center" valign="top" class="paragraph">
                        <p>Sent via {{ $email }}</p>
                    </td>
                </tr>

            </table>


        </td>
    </tr>
</table>

</body>
</html>