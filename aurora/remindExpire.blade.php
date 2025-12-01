{{-- Aurora Theme 2025 - Subscription Expiry Reminder --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Subscription Expiry Notice</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; background: linear-gradient(135deg, #0c0c1e 0%, #1a1a3e 50%, #0f0f2e 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(135deg, #0c0c1e 0%, #1a1a3e 50%, #0f0f2e 100%); padding: 50px 20px;">
        <tr>
            <td align="center">
                <table role="presentation" style="width: 100%; max-width: 600px; border-collapse: collapse; background: linear-gradient(180deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.02) 100%); border-radius: 24px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 25px 80px rgba(0,0,0,0.5), 0 0 100px rgba(236,72,153,0.3);">
                    <tr>
                        <td style="background: linear-gradient(135deg, rgba(236,72,153,0.3) 0%, rgba(239,68,68,0.3) 50%, rgba(251,146,60,0.3) 100%); padding: 50px 40px; text-align: center;">
                            <table role="presentation" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(236,72,153,0.2); border-radius: 50%; border: 2px solid rgba(236,72,153,0.5);">
                                <tr><td style="text-align: center; vertical-align: middle;"><span style="font-size: 40px;">⚠️</span></td></tr>
                            </table>
                            <span style="font-size: 12px; color: rgba(255,255,255,0.6); letter-spacing: 4px; font-weight: 600;">✧ URGENT MESSAGE ✧</span><br>
                            <h1 style="margin: 15px 0 0; color: #ffffff; font-size: 28px; font-weight: 600; text-shadow: 0 0 30px rgba(236,72,153,0.8);">Lights Fading Soon</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="height: 4px; background: linear-gradient(90deg, #ec4899, #ef4444, #fb923c, #ec4899);"></td>
                    </tr>
                    <tr>
                        <td style="padding: 50px 40px;">
                            <p style="color: rgba(255,255,255,0.9); font-size: 17px; margin: 0 0 10px; font-weight: 600;">Hello,</p>
                            <p style="color: rgba(255,255,255,0.75); font-size: 16px; line-height: 1.8; margin: 0 0 30px;">
                                Your {{$name}} aurora will fade in <strong style="color: #ec4899;">24 hours</strong>. Renew now to keep the lights dancing.
                            </p>
                            <div style="background: linear-gradient(135deg, rgba(236,72,153,0.2) 0%, rgba(239,68,68,0.2) 100%); padding: 30px; border: 2px solid rgba(236,72,153,0.4); border-radius: 16px; margin: 30px 0; text-align: center;">
                                <p style="margin: 0 0 8px; color: #ec4899; font-size: 20px; font-weight: 700;">⏰ 24 Hours Remaining</p>
                                <p style="margin: 0; color: rgba(255,255,255,0.7); font-size: 14px;">Keep your cosmic connection alive</p>
                            </div>
                            <div style="background: rgba(99,102,241,0.1); padding: 25px; margin: 30px 0; border-radius: 12px;">
                                <p style="margin: 0 0 15px; color: rgba(255,255,255,0.9); font-size: 15px; font-weight: 600;">Continue experiencing:</p>
                                <table role="presentation" style="width: 100%;">
                                    <tr><td style="padding: 6px 0; color: rgba(255,255,255,0.75); font-size: 14px;">✧ Limitless cosmic bandwidth</td></tr>
                                    <tr><td style="padding: 6px 0; color: rgba(255,255,255,0.75); font-size: 14px;">✧ Priority celestial support</td></tr>
                                    <tr><td style="padding: 6px 0; color: rgba(255,255,255,0.75); font-size: 14px;">✧ Exclusive aurora features</td></tr>
                                    <tr><td style="padding: 6px 0; color: rgba(255,255,255,0.75); font-size: 14px;">✧ VIP northern lights access</td></tr>
                                </table>
                            </div>
                            <table role="presentation" style="width: 100%; margin: 40px 0 30px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #ec4899 0%, #ef4444 50%, #fb923c 100%); color: #ffffff; text-decoration: none; padding: 18px 55px; border-radius: 14px; font-weight: 600; font-size: 17px; box-shadow: 0 10px 40px rgba(236,72,153,0.5), 0 0 20px rgba(239,68,68,0.3);">
                                            ✨ Renew Aurora
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <p style="color: rgba(255,255,255,0.5); font-size: 14px; text-align: center; margin: 25px 0 0;">
                                Already renewed? The lights will continue dancing ✨
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background: linear-gradient(180deg, rgba(99,102,241,0.1) 0%, rgba(16,185,129,0.1) 100%); padding: 35px 40px; text-align: center; border-top: 1px solid rgba(255,255,255,0.1);">
                            <p style="margin: 0; color: rgba(255,255,255,0.6); font-size: 14px;">
                                ✧ {{$name}} • Dancing Lights © {{ date('Y') }} ✧
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
