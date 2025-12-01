{{-- Corporate Professional Template 2025 - Email Verification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Email Verification</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background: linear-gradient(135deg, #f0f4f8 0%, #e2e8f0 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(135deg, #f0f4f8 0%, #e2e8f0 100%); padding: 50px 20px;">
        <tr>
            <td align="center">
                <table role="presentation" style="width: 100%; max-width: 640px; border-collapse: collapse; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 40px rgba(37,99,235,0.12);">
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%); padding: 45px 40px; text-align: center;">
                            <table role="presentation" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(255,255,255,0.15); border-radius: 50%; border: 3px solid rgba(255,255,255,0.3);">
                                <tr><td style="text-align: center; vertical-align: middle;"><span style="font-size: 38px;">✉️</span></td></tr>
                            </table>
                            <div style="background: rgba(255,255,255,0.15); display: inline-block; padding: 6px 18px; border-radius: 20px; margin-bottom: 12px;">
                                <span style="color: #ffffff; font-size: 11px; font-weight: 600; letter-spacing: 1.5px;">VERIFICATION REQUIRED</span>
                            </div>
                            <h1 style="margin: 10px 0 0; color: #ffffff; font-size: 26px; font-weight: 700;">Verify Your Email</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px 40px;">
                            <p style="color: #1e293b; font-size: 16px; margin: 0 0 10px; font-weight: 600;">Dear Valued Client,</p>
                            <p style="color: #475569; font-size: 15px; line-height: 1.8; margin: 0 0 30px;">
                                Please use the verification code below to confirm your email address. This code is valid for <strong style="color: #2563eb;">5 minutes</strong>.
                            </p>
                            <!-- Code Display Table -->
                            <table role="presentation" style="width: 100%; margin: 35px 0;">
                                <tr>
                                    <td align="center">
                                        <table role="presentation" style="background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); border: 3px solid #2563eb; border-radius: 12px; padding: 30px; display: inline-block;">
                                            <tr>
                                                <td style="text-align: center;">
                                                    <p style="margin: 0 0 10px; color: #64748b; font-size: 11px; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 600;">Your Verification Code</p>
                                                    <span style="color: #2563eb; font-size: 42px; font-weight: bold; letter-spacing: 10px; font-family: 'Courier New', Monaco, monospace;">{{$code}}</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <!-- Warning Table -->
                            <table role="presentation" style="width: 100%; background: #fef2f2; border-left: 4px solid #ef4444; border-radius: 8px; margin: 30px 0;">
                                <tr>
                                    <td style="padding: 20px;">
                                        <p style="margin: 0; color: #dc2626; font-size: 14px; line-height: 1.6;">
                                            <strong>⏱ Time Sensitive:</strong> <span style="color: #7f1d1d;">This code expires in 5 minutes for your security.</span>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                            <!-- CTA -->
                            <table role="presentation" style="width: 100%; margin: 35px 0 20px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%); color: #ffffff; text-decoration: none; padding: 16px 45px; border-radius: 8px; font-weight: 600; font-size: 15px; box-shadow: 0 4px 14px rgba(37,99,235,0.4);">
                                            Verify Email Address
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <p style="color: #94a3b8; font-size: 13px; text-align: center; margin: 25px 0 0;">
                                If you didn't request this verification, please ignore this email.
                            </p>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: linear-gradient(to right, #f8fafc 0%, #f1f5f9 100%); padding: 35px 40px; border-top: 2px solid #e2e8f0; text-align: center;">
                            <p style="margin: 0 0 8px; color: #475569; font-size: 14px; font-weight: 500;">
                                © {{ date('Y') }} {{$name}} • Professional Services
                            </p>
                            <p style="margin: 0; color: #94a3b8; font-size: 12px;">Secure email verification</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>