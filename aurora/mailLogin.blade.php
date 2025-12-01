{{-- Aurora Theme 2025 - Login Notification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login to {{$name}}</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; background: linear-gradient(135deg, #0c0c1e 0%, #1a1a3e 50%, #0f0f2e 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(135deg, #0c0c1e 0%, #1a1a3e 50%, #0f0f2e 100%); padding: 50px 20px;">
        <tr>
            <td align="center">
                <table role="presentation" style="width: 100%; max-width: 600px; border-collapse: collapse; background: linear-gradient(180deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.02) 100%); border-radius: 24px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 25px 80px rgba(0,0,0,0.5), 0 0 100px rgba(99,102,241,0.2);">
                    <tr>
                        <td style="background: linear-gradient(135deg, rgba(99,102,241,0.3) 0%, rgba(139,92,246,0.3) 25%, rgba(236,72,153,0.3) 50%, rgba(34,211,238,0.3) 75%, rgba(16,185,129,0.3) 100%); padding: 50px 40px; text-align: center;">
                            <table role="presentation" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(139,92,246,0.2); border-radius: 50%; border: 2px solid rgba(139,92,246,0.5);">
                                <tr><td style="text-align: center; vertical-align: middle;"><span style="font-size: 40px;">🔐</span></td></tr>
                            </table>
                            <span style="font-size: 12px; color: rgba(255,255,255,0.6); letter-spacing: 4px; font-weight: 600;">✧ SECURE ACCESS ✧</span><br>
                            <h1 style="margin: 15px 0 0; color: #ffffff; font-size: 28px; font-weight: 600; text-shadow: 0 0 30px rgba(139,92,246,0.8);">Login Request</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="height: 4px; background: linear-gradient(90deg, #6366f1, #8b5cf6, #ec4899, #22d3ee, #10b981, #6366f1);"></td>
                    </tr>
                    <tr>
                        <td style="padding: 50px 40px;">
                            <p style="color: rgba(255,255,255,0.9); font-size: 17px; margin: 0 0 10px; font-weight: 600;">Hello,</p>
                            <p style="color: rgba(255,255,255,0.75); font-size: 16px; line-height: 1.8; margin: 0 0 30px;">
                                A mystical login portal has opened for your {{$name}} account. Journey through within <strong style="color: #8b5cf6;">5 minutes</strong> to access your realm.
                            </p>
                            <div style="background: rgba(34,211,238,0.1); border-left: 4px solid #22d3ee; padding: 20px; margin: 30px 0; border-radius: 12px;">
                                <p style="margin: 0; color: #22d3ee; font-size: 14px; line-height: 1.6;">
                                    <strong>🛡️ Cosmic Security:</strong> <span style="color: rgba(255,255,255,0.7);">Your passage is protected by celestial encryption.</span>
                                </p>
                            </div>
                            <table role="presentation" style="width: 100%; margin: 40px 0 30px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{$link}}" style="display: inline-block; background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #ec4899 100%); color: #ffffff; text-decoration: none; padding: 16px 50px; border-radius: 14px; font-weight: 600; font-size: 16px; box-shadow: 0 10px 40px rgba(139,92,246,0.5), 0 0 20px rgba(236,72,153,0.3);">
                                            ✨ Access {{$name}}
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <p style="color: rgba(255,255,255,0.6); font-size: 14px; margin: 25px 0 10px;">Alternative portal link:</p>
                            <div style="background: rgba(99,102,241,0.1); padding: 15px; border-radius: 12px; border: 1px solid rgba(139,92,246,0.3);">
                                <p style="color: #8b5cf6; font-size: 12px; word-break: break-all; margin: 0; font-family: 'Courier New', Monaco, monospace;">{{$link}}</p>
                            </div>
                            <p style="color: rgba(255,255,255,0.5); font-size: 14px; text-align: center; margin: 25px 0 0;">
                                Didn't summon this portal? Let it close naturally ✨
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
