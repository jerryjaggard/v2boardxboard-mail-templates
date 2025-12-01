{{-- Dark Professional Template 2025 - Expiry --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Expiring</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 50px 20px;">
        <tr>
            <td align="center">
                <table role="presentation" style="width: 100%; max-width: 620px; border-collapse: collapse; background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%); border-radius: 16px; overflow: hidden; border: 1px solid rgba(239,68,68,0.2); box-shadow: 0 20px 60px rgba(0,0,0,0.5);">
                    <tr>
                        <td style="background: linear-gradient(135deg, rgba(239,68,68,0.2) 0%, rgba(220,38,38,0.15) 100%); padding: 45px 40px; text-align: center; border-bottom: 1px solid rgba(239,68,68,0.2);">
                            <table role="presentation" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(239,68,68,0.15); border-radius: 50%; border: 2px solid rgba(239,68,68,0.3);">
                                <tr><td style="text-align: center; vertical-align: middle;"><span style="font-size: 38px;">⚠️</span></td></tr>
                            </table>
                            <h1 style="margin: 0; color: #fca5a5; font-size: 26px; font-weight: 700;">Expiring in 24 Hours</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 45px 40px;">
                            <p style="color: #e2e8f0; font-size: 16px; margin: 0 0 10px; font-weight: 600;">Hello,</p>
                            <p style="color: #cbd5e1; font-size: 15px; line-height: 1.8; margin: 0 0 30px;">
                                Your {{$name}} subscription expires in <strong style="color: #ef4444;">24 hours</strong>. Renew now.
                            </p>
                            <table role="presentation" style="width: 100%; background: rgba(239,68,68,0.1); border: 2px solid #ef4444; border-radius: 12px; margin: 30px 0;">
                                <tr>
                                    <td style="padding: 25px; text-align: center;">
                                        <p style="margin: 0 0 8px; color: #fca5a5; font-size: 18px; font-weight: 700;">⏰ 24 Hours Left</p>
                                        <p style="margin: 0; color: #cbd5e1; font-size: 14px;">Maintain premium access</p>
                                    </td>
                                </tr>
                            </table>
                            <table role="presentation" style="width: 100%; margin: 35px 0 20px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: #ffffff; text-decoration: none; padding: 18px 50px; border-radius: 10px; font-weight: 600; font-size: 16px; box-shadow: 0 4px 14px rgba(239,68,68,0.4);">
                                            Renew Now
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="background: rgba(15,23,42,0.8); padding: 35px 40px; text-align: center; border-top: 1px solid rgba(148,163,184,0.1);">
                            <p style="margin: 0; color: #94a3b8; font-size: 14px;">© {{ date('Y') }} {{$name}}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>