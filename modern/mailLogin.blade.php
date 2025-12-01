{{-- Modern Clean Template 2025 - Login Notification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login to {{$name}}</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background-color: #f4f7fa;">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background-color: #f4f7fa;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <table role="presentation" style="width: 100%; max-width: 600px; border-collapse: collapse; background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 32px rgba(0,0,0,0.08);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 50px 40px; text-align: center;">
                            <div style="background: rgba(255,255,255,0.2); width: 70px; height: 70px; border-radius: 50%; margin: 0 auto 20px;">
                                <table role="presentation" style="width: 100%; height: 100%;">
                                    <tr><td style="text-align: center; vertical-align: middle;"><span style="font-size: 36px;">🔐</span></td></tr>
                                </table>
                            </div>
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 700; letter-spacing: -0.5px;">Secure Login Request</h1>
                            <p style="margin: 15px 0 0; color: rgba(255,255,255,0.9); font-size: 14px;">Quick and secure access to your account</p>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 50px 40px;">
                            <p style="color: #1a202c; font-size: 17px; line-height: 1.7; margin: 0 0 10px; font-weight: 600;">Hello,</p>
                            <p style="color: #4a5568; font-size: 16px; line-height: 1.8; margin: 0 0 30px;">
                                We received a login request for your {{$name}} account. Click the button below to securely access your account. This link is valid for <strong style="color: #667eea;">5 minutes</strong>.
                            </p>
                            <!-- Security Info -->
                            <div style="background: #ebf8ff; border-left: 4px solid #4299e1; padding: 20px; margin: 30px 0; border-radius: 8px;">
                                <p style="margin: 0; color: #2c5282; font-size: 14px; line-height: 1.6;">
                                    <strong>🛡️ Security Tip:</strong> Never share this link with anyone. We will never ask for your password via email.
                                </p>
                            </div>
                            <!-- CTA Button -->
                            <table role="presentation" style="width: 100%; margin: 40px 0 30px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{$link}}" style="display: inline-block; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #ffffff; text-decoration: none; padding: 16px 48px; border-radius: 12px; font-weight: 600; font-size: 16px; box-shadow: 0 4px 15px rgba(102,126,234,0.4);">
                                            Login to {{$name}} →
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <!-- Alternative Link -->
                            <p style="color: #718096; font-size: 14px; line-height: 1.6; margin: 30px 0 10px;">Or copy and paste this link into your browser:</p>
                            <div style="background: #f7fafc; padding: 15px; border-radius: 8px; border: 1px solid #e2e8f0;">
                                <p style="color: #667eea; font-size: 13px; word-break: break-all; margin: 0; font-family: 'Courier New', Monaco, monospace;">{{$link}}</p>
                            </div>
                            <p style="color: #a0aec0; font-size: 14px; text-align: center; margin: 30px 0 0; line-height: 1.6;">
                                If you didn't request this login, please ignore this email and ensure your account is secure.
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
