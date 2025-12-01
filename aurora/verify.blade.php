{{-- Aurora Theme 2025 - Email Verification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email Verification</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; background: linear-gradient(135deg, #0c0c1e 0%, #1a1a3e 50%, #0f0f2e 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(135deg, #0c0c1e 0%, #1a1a3e 50%, #0f0f2e 100%); padding: 50px 20px;">
        <tr>
            <td align="center">
                <table role="presentation" style="width: 100%; max-width: 600px; border-collapse: collapse; background: linear-gradient(180deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.02) 100%); border-radius: 24px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 25px 80px rgba(0,0,0,0.5), 0 0 100px rgba(99,102,241,0.2);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, rgba(99,102,241,0.3) 0%, rgba(139,92,246,0.3) 25%, rgba(236,72,153,0.3) 50%, rgba(34,211,238,0.3) 75%, rgba(16,185,129,0.3) 100%); padding: 50px 40px; text-align: center;">
                            <table role="presentation" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(139,92,246,0.2); border-radius: 50%; border: 2px solid rgba(139,92,246,0.5);">
                                <tr><td style="text-align: center; vertical-align: middle;"><span style="font-size: 40px;">✉️</span></td></tr>
                            </table>
                            <span style="font-size: 12px; color: rgba(255,255,255,0.6); letter-spacing: 4px; font-weight: 600;">✧ VERIFICATION MAGIC ✧</span><br>
                            <h1 style="margin: 15px 0 0; color: #ffffff; font-size: 28px; font-weight: 600; text-shadow: 0 0 30px rgba(139,92,246,0.8);">Verify Your Email</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="height: 4px; background: linear-gradient(90deg, #6366f1, #8b5cf6, #ec4899, #22d3ee, #10b981, #6366f1);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 50px 40px;">
                            <p style="color: rgba(255,255,255,0.9); font-size: 17px; margin: 0 0 10px; font-weight: 600;">Hello,</p>
                            <p style="color: rgba(255,255,255,0.75); font-size: 16px; line-height: 1.8; margin: 0 0 35px;">
                                Your magical verification code has materialized. It will shimmer for <strong style="color: #8b5cf6;">5 minutes</strong> before fading into the digital cosmos.
                            </p>
                            <!-- Magical Code Display -->
                            <table role="presentation" style="width: 100%; margin: 40px 0;">
                                <tr>
                                    <td align="center">
                                        <div style="background: linear-gradient(135deg, rgba(99,102,241,0.3) 0%, rgba(236,72,153,0.3) 100%); padding: 35px; border-radius: 20px; border: 2px solid rgba(139,92,246,0.4); box-shadow: 0 0 60px rgba(139,92,246,0.4), inset 0 0 40px rgba(255,255,255,0.05); display: inline-block; min-width: 350px;">
                                            <p style="margin: 0 0 12px; color: rgba(255,255,255,0.6); font-size: 11px; text-transform: uppercase; letter-spacing: 2px;">Your Cosmic Code</p>
                                            <span style="color: #ffffff; font-size: 46px; font-weight: bold; letter-spacing: 10px; text-shadow: 0 0 25px rgba(255,255,255,0.6), 0 0 50px rgba(139,92,246,0.5); font-family: 'Courier New', Monaco, monospace;">{{$code}}</span>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <!-- Time Warning -->
                            <div style="background: rgba(236,72,153,0.1); border-left: 4px solid #ec4899; padding: 20px; margin: 30px 0; border-radius: 12px;">
                                <p style="margin: 0; color: #ec4899; font-size: 14px; line-height: 1.6;">
                                    <strong>⏱️ Time-Limited Magic:</strong> <span style="color: rgba(255,255,255,0.7);">This ethereal code expires in 5 minutes.</span>
                                </p>
                            </div>
                            <!-- CTA -->
                            <table role="presentation" style="width: 100%; margin: 40px 0 30px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #ec4899 100%); color: #ffffff; text-decoration: none; padding: 16px 50px; border-radius: 14px; font-weight: 600; font-size: 16px; box-shadow: 0 10px 40px rgba(139,92,246,0.5), 0 0 20px rgba(236,72,153,0.3);">
                                            ✨ Enter {{$name}}
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <p style="color: rgba(255,255,255,0.5); font-size: 14px; text-align: center; margin: 25px 0 0;">
                                Didn't summon this code? Let it fade into the night sky ✨
                            </p>
                        </td>
                    </tr>
                    <!-- Footer -->
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