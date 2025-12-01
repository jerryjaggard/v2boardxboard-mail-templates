{{-- Modern Clean Template 2025 - Traffic Usage Warning --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Traffic Usage Alert</title>
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
                                    <tr><td style="text-align: center; vertical-align: middle;"><span style="font-size: 36px;">📊</span></td></tr>
                                </table>
                            </div>
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 700; letter-spacing: -0.5px;">Traffic Usage Alert</h1>
                            <p style="margin: 15px 0 0; color: rgba(255,255,255,0.9); font-size: 14px;">Monitor your bandwidth consumption</p>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 50px 40px;">
                            <p style="color: #1a202c; font-size: 17px; line-height: 1.7; margin: 0 0 10px; font-weight: 600;">Hello,</p>
                            <p style="color: #4a5568; font-size: 16px; line-height: 1.8; margin: 0 0 30px;">
                                Your {{$name}} account has reached <strong style="color: #ed8936;">80% of its bandwidth allocation</strong>. Please monitor your usage to avoid service interruption.
                            </p>
                            <!-- Usage Stats Box -->
                            <div style="background: linear-gradient(135deg, #667eea15 0%, #764ba215 100%); border: 2px solid #667eea; padding: 30px; margin: 30px 0; border-radius: 12px; text-align: center;">
                                <p style="margin: 0 0 10px; color: #718096; font-size: 13px; text-transform: uppercase; letter-spacing: 1px; font-weight: 600;">Current Usage</p>
                                <p style="margin: 0 0 20px; color: #667eea; font-size: 38px; font-weight: 700;">80%</p>
                                <!-- Progress Bar -->
                                <div style="background: #e2e8f0; height: 12px; border-radius: 6px; overflow: hidden; margin: 20px 0 10px;">
                                    <div style="background: linear-gradient(90deg, #667eea 0%, #ed8936 100%); width: 80%; height: 100%; border-radius: 6px; box-shadow: 0 2px 8px rgba(102,126,234,0.4);"></div>
                                </div>
                                <p style="margin: 10px 0 0; color: #718096; font-size: 13px;">You have 20% remaining</p>
                            </div>
                            <!-- Recommendation Box -->
                            <div style="background: #ebf8ff; border-left: 4px solid #4299e1; padding: 20px; margin: 30px 0; border-radius: 8px;">
                                <p style="margin: 0 0 10px; color: #2c5282; font-size: 15px; font-weight: 600;">💡 What you can do:</p>
                                <table role="presentation" style="width: 100%;">
                                    <tr>
                                        <td style="padding: 5px 0; color: #2d3748; font-size: 14px;">• Monitor your daily usage</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0; color: #2d3748; font-size: 14px;">• Upgrade your plan for more bandwidth</td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 5px 0; color: #2d3748; font-size: 14px;">• Optimize your connection settings</td>
                                    </tr>
                                </table>
                            </div>
                            <!-- CTA Buttons -->
                            <table role="presentation" style="width: 100%; margin: 40px 0 20px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #ffffff; text-decoration: none; padding: 16px 40px; border-radius: 12px; font-weight: 600; font-size: 16px; box-shadow: 0 4px 15px rgba(102,126,234,0.4); margin: 0 8px 10px;">
                                            View Usage Details →
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <a href="{{$url}}" style="display: inline-block; background: #f7fafc; color: #667eea; text-decoration: none; padding: 16px 40px; border-radius: 12px; font-weight: 600; font-size: 16px; border: 2px solid #667eea; margin: 10px 8px 0;">
                                            Upgrade Plan
                                        </a>
                                    </td>
                                </tr>
                            </table>
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
