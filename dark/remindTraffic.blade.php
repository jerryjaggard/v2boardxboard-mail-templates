{{-- Dark Professional Template 2025 - Traffic --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandwidth Alert</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 50px 20px;">
        <tr>
            <td align="center">
                <table role="presentation" style="width: 100%; max-width: 620px; border-collapse: collapse; background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%); border-radius: 16px; overflow: hidden; border: 1px solid rgba(148,163,184,0.1); box-shadow: 0 20px 60px rgba(0,0,0,0.5);">
                    <tr>
                        <td style="background: linear-gradient(135deg, rgba(59,130,246,0.15) 0%, rgba(37,99,235,0.1) 100%); padding: 45px 40px; text-align: center; border-bottom: 1px solid rgba(148,163,184,0.1);">
                            <table role="presentation" style="width: 80px; height: 80px; margin: 0 auto 20px; background: rgba(59,130,246,0.15); border-radius: 50%; border: 2px solid rgba(59,130,246,0.3);">
                                <tr><td style="text-align: center; vertical-align: middle;"><span style="font-size: 38px;">📊</span></td></tr>
                            </table>
                            <h1 style="margin: 0; color: #f1f5f9; font-size: 26px; font-weight: 700;">Bandwidth Status</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 45px 40px;">
                            <p style="color: #e2e8f0; font-size: 16px; margin: 0 0 10px; font-weight: 600;">Hello,</p>
                            <p style="color: #cbd5e1; font-size: 15px; line-height: 1.8; margin: 0 0 30px;">
                                {{$name}} bandwidth at <strong style="color: #f59e0b;">80%</strong>.
                            </p>
                            <table role="presentation" style="width: 100%; background: rgba(59,130,246,0.1); border: 2px solid #3b82f6; border-radius: 12px; margin: 30px 0;">
                                <tr>
                                    <td style="padding: 30px; text-align: center;">
                                        <p style="margin: 0 0 15px; color: #3b82f6; font-size: 40px; font-weight: 700;">80%</p>
                                        <div style="background: rgba(148,163,184,0.2); height: 12px; border-radius: 6px; overflow: hidden; margin: 15px 0;">
                                            <div style="background: linear-gradient(90deg, #3b82f6, #f59e0b); width: 80%; height: 100%; box-shadow: 0 0 20px rgba(59,130,246,0.5);"></div>
                                        </div>
                                        <p style="margin: 10px 0 0; color: #94a3b8; font-size: 13px;">20% REMAINING</p>
                                    </td>
                                </tr>
                            </table>
                            <table role="presentation" style="width: 100%; margin: 35px 0 15px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: #ffffff; text-decoration: none; padding: 16px 45px; border-radius: 10px; font-weight: 600; font-size: 15px; box-shadow: 0 4px 14px rgba(59,130,246,0.4); margin: 8px;">
                                            View Details
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