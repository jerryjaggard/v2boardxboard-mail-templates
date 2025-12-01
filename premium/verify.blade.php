{{-- Premium Luxury Template 2025 - Email Verification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email Verification</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Palatino Linotype', 'Georgia', 'Times New Roman', serif; background: linear-gradient(180deg, #1a1a1a 0%, #0d0d0d 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(180deg, #1a1a1a 0%, #0d0d0d 100%); padding: 50px 20px;">
        <tr>
            <td align="center">
                <table role="presentation" style="width: 100%; max-width: 620px; border-collapse: collapse; background: linear-gradient(180deg, #1c1c1c 0%, #0f0f0f 100%); border-radius: 8px; overflow: hidden; border: 4px solid #d4a574; box-shadow: 0 30px 60px rgba(0,0,0,0.5), 0 0 100px rgba(212,165,116,0.15);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #d4a574 0%, #f4e4bc 25%, #d4a574 50%, #f4e4bc 75%, #d4a574 100%); padding: 10px;">
                            <div style="background: linear-gradient(180deg, #1c1c1c 0%, #0f0f0f 100%); padding: 50px 40px; text-align: center;">
                                <table role="presentation" style="width: 80px; height: 80px; margin: 0 auto 25px; background: rgba(212,165,116,0.15); border-radius: 50%; border: 2px solid #d4a574;">
                                    <tr><td style="text-align: center; vertical-align: middle;"><span style="font-size: 40px;">✉️</span></td></tr>
                                </table>
                                <div style="margin-bottom: 15px;">
                                    <span style="font-size: 11px; color: #d4a574; letter-spacing: 6px; font-weight: 600;">★ VERIFICATION REQUIRED ★</span>
                                </div>
                                <h1 style="margin: 0; color: #d4a574; font-size: 32px; font-weight: 400; letter-spacing: 2px;">Verify Your Email</h1>
                            </div>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 50px 45px;">
                            <p style="color: #d4a574; font-size: 17px; line-height: 1.9; margin: 0 0 20px; font-weight: 500;">Distinguished Member,</p>
                            <p style="color: #999999; font-size: 16px; line-height: 1.9; margin: 0 0 35px;">
                                Please use the exclusive verification code below. This code is valid for <strong style="color: #d4a574;">5 minutes</strong> and grants you access to premium features.
                            </p>
                            <!-- Premium Code Display -->
                            <table role="presentation" style="width: 100%; margin: 40px 0;">
                                <tr>
                                    <td align="center">
                                        <div style="background: linear-gradient(135deg, rgba(212,165,116,0.15) 0%, rgba(244,228,188,0.1) 100%); padding: 35px; border: 3px solid #d4a574; display: inline-block; min-width: 350px;">
                                            <p style="margin: 0 0 12px; color: #999999; font-size: 11px; text-transform: uppercase; letter-spacing: 2px; font-weight: 600;">Your Exclusive Code</p>
                                            <span style="color: #d4a574; font-size: 48px; font-weight: bold; letter-spacing: 16px; font-family: 'Courier New', Monaco, monospace; text-shadow: 0 2px 8px rgba(212,165,116,0.3);">{{$code}}</span>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <!-- Timer Warning -->
                            <div style="background: rgba(212,165,116,0.08); border-left: 4px solid #d4a574; padding: 22px; margin: 35px 0; border-radius: 4px;">
                                <p style="margin: 0; color: #d4a574; font-size: 14px; line-height: 1.7;">
                                    <strong>⏱ Time-Limited Access:</strong> <span style="color: #999999;">This exclusive code expires in 5 minutes to ensure your account security.</span>
                                </p>
                            </div>
                            <!-- CTA -->
                            <table role="presentation" style="width: 100%; margin: 45px 0 30px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #d4a574 0%, #f4e4bc 50%, #d4a574 100%); color: #0f0f0f; text-decoration: none; padding: 18px 55px; font-weight: 700; font-size: 14px; letter-spacing: 3px; text-transform: uppercase; box-shadow: 0 10px 30px rgba(212,165,116,0.4); border: 2px solid #d4a574;">
                                            ENTER {{$name}}
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <p style="color: #666666; font-size: 13px; text-align: center; margin: 30px 0 0; line-height: 1.7;">
                                Did not request this verification? Please disregard this message.
                            </p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #d4a574 0%, #f4e4bc 25%, #d4a574 50%, #f4e4bc 75%, #d4a574 100%); padding: 4px;">
                            <div style="background: #0f0f0f; padding: 35px 40px; text-align: center;">
                                <p style="margin: 0; color: #d4a574; font-size: 12px; letter-spacing: 3px;">★ {{$name}} PREMIUM © {{ date('Y') }} ★</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
