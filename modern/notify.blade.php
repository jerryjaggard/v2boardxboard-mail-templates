{{-- Modern Clean Template 2025 - Enhanced Purple Gradient --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $subject ?? 'Notification' }}</title>
    <!--[if mso]>
    <style type="text/css">
        table {border-collapse: collapse; border-spacing: 0; margin: 0;}
        div, td {padding: 0;}
    </style>
    <![endif]-->
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background-color: #f4f7fa;">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background-color: #f4f7fa;">
        <tr>
            <td align="center" style="padding: 50px 20px;">
                <!-- Main Container -->
                <table role="presentation" style="width: 100%; max-width: 600px; border-collapse: collapse; background: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 32px rgba(0,0,0,0.08);">
                    <!-- Modern Header with Icon -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); padding: 50px 40px; text-align: center;">
                            <div style="background: rgba(255,255,255,0.2); width: 70px; height: 70px; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; backdrop-filter: blur(10px);">
                                <span style="font-size: 36px; line-height: 70px;">🔔</span>
                            </div>
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 700; letter-spacing: -0.5px;">{{ $name ?? 'Notification' }}</h1>
                            <p style="margin: 15px 0 0; color: rgba(255,255,255,0.9); font-size: 14px;">Stay informed with the latest updates</p>
                        </td>
                    </tr>
                    <!-- Content Section -->
                    <tr>
                        <td style="padding: 50px 40px;">
                            <p style="color: #1a202c; font-size: 17px; line-height: 1.7; margin: 0 0 10px; font-weight: 600;">Hello,</p>
                            <div style="color: #4a5568; font-size: 16px; line-height: 1.8; margin: 20px 0;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <!-- Call to Action -->
                                <div style="text-align: center; margin: 40px 0 30px;">
                                    <a href="{{ $url }}" style="display: inline-block; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); color: #ffffff; text-decoration: none; padding: 16px 48px; border-radius: 12px; font-weight: 600; font-size: 16px; box-shadow: 0 4px 15px rgba(102,126,234,0.4); transition: all 0.3s ease;">
                                        View Details →
                                    </a>
                                </div>
                            @endif
                            <!-- Info Box -->
                            <div style="background: #f7fafc; border-left: 4px solid #667eea; padding: 20px; margin: 30px 0 0; border-radius: 8px;">
                                <p style="margin: 0; color: #718096; font-size: 14px; line-height: 1.6;">
                                    <strong style="color: #4a5568;">Need help?</strong> Our support team is available 24/7 to assist you with any questions or concerns.
                                </p>
                            </div>
                        </td>
                    </tr>
                    <!-- Modern Footer -->
                    <tr>
                        <td style="background: #f8fafc; padding: 35px 40px; text-align: center; border-top: 1px solid #e2e8f0;">
                            <p style="margin: 0 0 15px; color: #718096; font-size: 14px; line-height: 1.6;">
                                © {{ date('Y') }} {{ $name ?? config('app.name', 'XBoard') }}. All rights reserved.
                            </p>
                            <p style="margin: 0; color: #a0aec0; font-size: 13px; line-height: 1.5;">
                                This is an automated message, please do not reply directly.<br>
                                <a href="#" style="color: #667eea; text-decoration: none;">Privacy Policy</a> • 
                                <a href="#" style="color: #667eea; text-decoration: none;">Terms of Service</a>
                            </p>
                        </td>
                    </tr>
                </table>
                <!-- Email Client Notice -->
                <p style="margin: 20px 0 0; color: #a0aec0; font-size: 12px; text-align: center;">
                    Having trouble viewing this email? <a href="{{ $url ?? '#' }}" style="color: #667eea; text-decoration: none;">View in browser</a>
                </p>
            </td>
        </tr>
    </table>
</body>
</html>
