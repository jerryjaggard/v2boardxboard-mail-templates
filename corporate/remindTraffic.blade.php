{{-- Corporate Professional Template 2025 - Traffic Usage Warning --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Traffic Usage Alert</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background: linear-gradient(135deg, #f0f4f8 0%, #e2e8f0 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(135deg, #f0f4f8 0%, #e2e8f0 100%); padding: 50px 20px;">
        <tr>
            <td align="center">
                <table role="presentation" style="width: 100%; max-width: 640px; border-collapse: collapse; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 40px rgba(37,99,235,0.12);">
                    <tr>
                        <td style="background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%); padding: 45px 40px; text-align: center;">
                            <table role="presentation" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(255,255,255,0.15); border-radius: 50%; border: 3px solid rgba(255,255,255,0.3);">
                                <tr><td style="text-align: center; vertical-align: middle;"><span style="font-size: 38px;">📊</span></td></tr>
                            </table>
                            <div style="background: rgba(255,255,255,0.15); display: inline-block; padding: 6px 18px; border-radius: 20px; margin-bottom: 12px;">
                                <span style="color: #ffffff; font-size: 11px; font-weight: 600; letter-spacing: 1.5px;">USAGE ALERT</span>
                            </div>
                            <h1 style="margin: 10px 0 0; color: #ffffff; font-size: 26px; font-weight: 700;">Bandwidth Status</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 45px 40px;">
                            <p style="color: #1e293b; font-size: 16px; margin: 0 0 10px; font-weight: 600;">Dear Valued Client,</p>
                            <p style="color: #475569; font-size: 15px; line-height: 1.8; margin: 0 0 30px;">
                                Your {{$name}} account has consumed <strong style="color: #f59e0b;">80% of allocated bandwidth</strong>. Monitor your usage to ensure uninterrupted service.
                            </p>
                            <table role="presentation" style="width: 100%; background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%); border: 2px solid #2563eb; border-radius: 12px; margin: 30px 0;">
                                <tr>
                                    <td style="padding: 32px; text-align: center;">
                                        <p style="margin: 0 0 8px; color: #64748b; font-size: 12px; text-transform: uppercase; letter-spacing: 1.5px; font-weight: 600;">Current Usage Level</p>
                                        <p style="margin: 0 0 20px; color: #2563eb; font-size: 44px; font-weight: 700;">80%</p>
                                        <div style="background: #e2e8f0; height: 14px; border-radius: 7px; overflow: hidden; margin: 20px 0 10px;">
                                            <div style="background: linear-gradient(90deg, #2563eb, #3b82f6, #f59e0b); width: 80%; height: 100%; box-shadow: 0 2px 8px rgba(37,99,235,0.4);"></div>
                                        </div>
                                        <p style="margin: 12px 0 0; color: #64748b; font-size: 13px; letter-spacing: 0.5px;">20% REMAINING • UPGRADE AVAILABLE</p>
                                    </td>
                                </tr>
                            </table>
                            <table role="presentation" style="width: 100%; background: #f8fafc; border-radius: 10px; border: 1px solid #e2e8f0; margin: 30px 0;">
                                <tr>
                                    <td style="padding: 25px;">
                                        <p style="margin: 0 0 15px; color: #1e293b; font-size: 15px; font-weight: 600;">💡 Recommended Actions:</p>
                                        <table role="presentation" style="width: 100%;">
                                            <tr><td style="padding: 6px 0; color: #475569; font-size: 14px;">• Review your daily usage patterns</td></tr>
                                            <tr><td style="padding: 6px 0; color: #475569; font-size: 14px;">• Consider upgrading to higher tier plan</td></tr>
                                            <tr><td style="padding: 6px 0; color: #475569; font-size: 14px;">• Optimize connection settings</td></tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <table role="presentation" style="width: 100%; margin: 35px 0 15px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%); color: #ffffff; text-decoration: none; padding: 16px 45px; border-radius: 8px; font-weight: 600; font-size: 15px; box-shadow: 0 4px 14px rgba(37,99,235,0.4); margin: 8px;">
                                            View Usage Details
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <a href="{{$url}}" style="display: inline-block; background: #ffffff; color: #2563eb; text-decoration: none; padding: 14px 45px; border-radius: 8px; font-weight: 600; font-size: 14px; border: 2px solid #2563eb; margin: 8px;">
                                            Upgrade Plan
                                        </a>
                                    </td>
                                </tr>
                            </table>
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
