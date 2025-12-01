{{-- Corporate Professional Template 2025 - Subscription Expiry Reminder --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Subscription Expiry Notice</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background: linear-gradient(135deg, #f0f4f8 0%, #e2e8f0 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(135deg, #f0f4f8 0%, #e2e8f0 100%); padding: 50px 20px;">
        <tr>
            <td align="center">
                <table role="presentation" style="width: 100%; max-width: 640px; border-collapse: collapse; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 40px rgba(239,68,68,0.12);">
                    <tr>
                        <td style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); padding: 45px 40px; text-align: center;">
                            <table role="presentation" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(255,255,255,0.15); border-radius: 50%; border: 3px solid rgba(255,255,255,0.3);">
                                <tr><td style="text-align: center; vertical-align: middle;"><span style="font-size: 38px;">⚠️</span></td></tr>
                            </table>
                            <div style="background: rgba(255,255,255,0.15); display: inline-block; padding: 6px 18px; border-radius: 20px; margin-bottom: 12px;">
                                <span style="color: #ffffff; font-size: 11px; font-weight: 600; letter-spacing: 1.5px;">URGENT NOTICE</span>
                            </div>
                            <h1 style="margin: 10px 0 0; color: #ffffff; font-size: 26px; font-weight: 700;">Subscription Expiring</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 45px 40px;">
                            <p style="color: #1e293b; font-size: 16px; margin: 0 0 10px; font-weight: 600;">Dear Valued Client,</p>
                            <p style="color: #475569; font-size: 15px; line-height: 1.8; margin: 0 0 30px;">
                                Your {{$name}} subscription will expire in <strong style="color: #ef4444;">24 hours</strong>. Renew now to maintain uninterrupted service and premium benefits.
                            </p>
                            <table role="presentation" style="width: 100%; background: linear-gradient(135deg, #fef2f2 0%, #fee2e2 100%); border: 2px solid #ef4444; border-radius: 12px; margin: 30px 0;">
                                <tr>
                                    <td style="padding: 28px; text-align: center;">
                                        <p style="margin: 0 0 8px; color: #dc2626; font-size: 20px; font-weight: 700;">⏰ Expires in 24 Hours</p>
                                        <p style="margin: 0; color: #7f1d1d; font-size: 14px;">Maintain your premium access and benefits</p>
                                    </td>
                                </tr>
                            </table>
                            <table role="presentation" style="width: 100%; background: #f8fafc; border-radius: 10px; border: 1px solid #e2e8f0; margin: 30px 0;">
                                <tr>
                                    <td style="padding: 25px;">
                                        <p style="margin: 0 0 15px; color: #1e293b; font-size: 15px; font-weight: 600;">Your Premium Benefits:</p>
                                        <table role="presentation" style="width: 100%;">
                                            <tr><td style="padding: 6px 0; color: #475569; font-size: 14px;">✓ Unlimited high-speed bandwidth</td></tr>
                                            <tr><td style="padding: 6px 0; color: #475569; font-size: 14px;">✓ 24/7 priority customer support</td></tr>
                                            <tr><td style="padding: 6px 0; color: #475569; font-size: 14px;">✓ Advanced security features</td></tr>
                                            <tr><td style="padding: 6px 0; color: #475569; font-size: 14px;">✓ Multi-device connectivity</td></tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table role="presentation" style="width: 100%; margin: 35px 0 20px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: #ffffff; text-decoration: none; padding: 18px 50px; border-radius: 8px; font-weight: 600; font-size: 16px; box-shadow: 0 4px 14px rgba(239,68,68,0.4);">
                                            Renew Subscription Now
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <p style="color: #94a3b8; font-size: 13px; text-align: center; margin: 20px 0 0;">
                                Already renewed? Status update may take a few moments.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background: linear-gradient(to right, #f8fafc 0%, #f1f5f9 100%); padding: 35px 40px; border-top: 2px solid #e2e8f0; text-align: center;">
                            <p style="margin: 0; color: #475569; font-size: 14px; font-weight: 500;">
                                © {{ date('Y') }} {{$name}} • Professional Services
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
