{{-- Modern Clean Template 2025 - Subscription Expiry Reminder --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Subscription Expiry Notice</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background-color: #f4f7fa;">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background-color: #f4f7fa;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 100%; max-width: 600px; border-collapse: collapse; background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 32px rgba(0,0,0,0.08);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #f56565 0%, #ed8936 100%); padding: 50px 40px; text-align: center;">
                            <div style="background: rgba(255,255,255,0.2); width: 70px; height: 70px; border-radius: 50%; margin: 0 auto 20px;">
                                <table role="presentation" style="width: 100%; height: 100%;">
                                    <tr><td style="text-align: center; vertical-align: middle;"><span style="font-size: 36px;">⚠️</span></td></tr>
                                </table>
                            </div>
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 700; letter-spacing: -0.5px;">Subscription Expiring Soon</h1>
                            <p style="margin: 15px 0 0; color: rgba(255,255,255,0.9); font-size: 14px;">Action required to maintain service</p>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 50px 40px;">
                            <p style="color: #1a202c; font-size: 17px; line-height: 1.7; margin: 0 0 10px; font-weight: 600;">Hello,</p>
                            <p style="color: #4a5568; font-size: 16px; line-height: 1.8; margin: 0 0 30px;">
                                Your {{$name}} subscription will expire in <strong style="color: #f56565;">24 hours</strong>. Renew now to continue enjoying uninterrupted service.
                            </p>
                            <!-- Warning Box -->
                            <div style="background: #fff5f5; border: 2px solid #fc8181; padding: 25px; margin: 30px 0; border-radius: 12px; text-align: center;">
                                <p style="margin: 0 0 10px; color: #c53030; font-size: 18px; font-weight: 700;">⏰ Expires in 24 Hours</p>
                                <p style="margin: 0; color: #742a2a; font-size: 14px; line-height: 1.6;">
                                    Don't lose access to your premium features
                                </p>
                            </div>
                            <!-- Benefits Reminder -->
                            <div style="background: #f7fafc; padding: 25px; margin: 30px 0; border-radius: 12px;">
                                <p style="margin: 0 0 15px; color: #2d3748; font-size: 15px; font-weight: 600;">Continue enjoying:</p>
                                <table role="presentation" style="width: 100%;">
                                    <tr>
                                        <td style="padding: 8px 0; color: #4a5568; font-size: 14px;">✓ Unlimited bandwidth</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px 0; color: #4a5568; font-size: 14px;">✓ Premium support</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px 0; color: #4a5568; font-size: 14px;">✓ Advanced features</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 8px 0; color: #4a5568; font-size: 14px;">✓ Priority access</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- CTA Button -->
                            <table role="presentation" style="width: 100%; margin: 40px 0 30px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #f56565 0%, #ed8936 100%); color: #ffffff; text-decoration: none; padding: 18px 55px; border-radius: 12px; font-weight: 600; font-size: 17px; box-shadow: 0 4px 15px rgba(245,101,101,0.4);">
                                            Renew Subscription Now
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <p style="color: #a0aec0; font-size: 14px; text-align: center; margin: 25px 0 0; line-height: 1.6;">
                                Already renewed? You can disregard this reminder.
                            </p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #f8fafc; padding: 35px 40px; text-align: center; border-top: 1px solid #e2e8f0;">
                            <p style="margin: 0 0 15px; color: #718096; font-size: 14px;">
                                © {{ date('Y') }} {{$name}}. All rights reserved.
                            </p>
                            <p style="margin: 0; color: #a0aec0; font-size: 13px; line-height: 1.5;">
                                This is an automated message, please do not reply directly.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
