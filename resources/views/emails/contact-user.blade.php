<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Message received</title>
</head>
<body style="margin:0; padding:0; background-color:#0f1626; font-family: Arial, Helvetica, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" style="padding:40px 16px;">

                <!-- Card -->
                <table width="100%" cellpadding="0" cellspacing="0" style="max-width:600px; background-color:#1b2340; border-radius:16px; padding:32px; border:1px solid #3b82f6; box-shadow:0 0 30px rgba(59,130,246,0.3);">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="padding-bottom:24px;">
                            <h2 style="margin:0; font-size:28px; color:#3b82f6;">
                                Thank you for reaching out, {{ $name }}!
                            </h2>
                        </td>
                    </tr>

                    <!-- Intro -->
                    <tr>
                        <td style="color:#c7d2fe; font-size:16px; line-height:1.6; padding-bottom:24px;">
                            We’ve successfully received your message and will get back to you as soon as possible.
                            Below is a copy of the message you sent us for your reference.
                        </td>
                    </tr>

                    <!-- Divider -->
                    <tr>
                        <td style="border-top:1px solid #334155; padding:24px 0;"></td>
                    </tr>

                    <!-- Message details -->
                    <tr>
                        <td style="color:#e0e7ff; font-size:15px; line-height:1.6;">
                            <p style="margin:0 0 8px;">
                                <strong style="color:#60a5fa;">Subject:</strong> {{ $subject }}
                            </p>

                            <p style="margin:16px 0 8px;">
                                <strong style="color:#60a5fa;">Your message:</strong>
                            </p>

                            <p style="margin:0; background-color:#111827; padding:16px; border-radius:12px; color:#c7d2fe;">
                                {{ $content }}
                            </p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="padding-top:32px; color:#c7d2fe; font-size:14px; line-height:1.6;">
                            Kind regards,<br>
                            <strong style="color:#3b82f6;">NDG Webdesign Team</strong>
                        </td>
                    </tr>

                </table>
                <!-- End card -->

            </td>
        </tr>
    </table>

</body>
</html>
