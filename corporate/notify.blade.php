{{-- Corporate Professional Template 2025 - Notification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $subject ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background: linear-gradient(135deg, #f0f4f8 0%, #e2e8f0 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(135deg, #f0f4f8 0%, #e2e8f0 100%); padding: 50px 20px;">
        <tr>
            <td align="center">
                <table role="presentation" style="width: 100%; max-width: 640px; border-collapse: collapse; background: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 40px rgba(37,99,235,0.12), 0 4px 16px rgba(0,0,0,0.08);">
                    <!-- Professional Header with Gradient -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%); padding: 45px 40px; position: relative;">
                            <table role="presentation" style="width: 100%;">
                                <tr>
                                    <td style="text-align: left;">
                                        <div style="background: rgba(255,255,255,0.15); display: inline-block; padding: 8px 20px; border-radius: 20px; margin-bottom: 15px;">
                                            <span style="color: #ffffff; font-size: 11px; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase;">Business Update</span>
                                        </div>
                                        <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 700; letter-spacing: -0.5px;">{{ $name ?? 'Notification' }}</h1>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Content Section -->
                    <tr>
                        <td style="padding: 45px 40px;">
                            <p style="color: #1e293b; font-size: 16px; line-height: 1.6; margin: 0 0 10px; font-weight: 600;">Dear Valued Client,</p>
                            <div style="color: #475569; font-size: 15px; line-height: 1.8; margin: 20px 0;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <!-- Professional CTA -->
                                <table role="presentation" style="width: 100%; margin: 40px 0 25px;">
                                    <tr>
                                        <td align="center">
                                            <table role="presentation" style="border-collapse: separate; border-spacing: 0;">
                                                <tr>
                                                    <td style="background: linear-gradient(135deg, #2563eb 0%, #1e40af 100%); border-radius: 8px; box-shadow: 0 4px 14px rgba(37,99,235,0.4);">
                                                        <a href="{{ $url }}" style="display: block; padding: 16px 45px; color: #ffffff; text-decoration: none; font-weight: 600; font-size: 15px; letter-spacing: 0.3px;">
                                                            Access Dashboard →
                                                        </a>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </table>
                            @endif
                            <!-- Info Table -->
                            <table role="presentation" style="width: 100%; background: #f8fafc; border-radius: 10px; margin: 30px 0 0; border: 1px solid #e2e8f0;">
                                <tr>
                                    <td style="padding: 25px;">
                                        <table role="presentation" style="width: 100%;">
                                            <tr>
                                                <td style="padding: 8px 0; color: #2563eb; font-size: 13px; font-weight: 600; text-transform: uppercase; letter-spacing: 0.5px;">Support Available</td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 8px 0; color: #64748b; font-size: 14px; line-height: 1.6;">Our professional team is available 24/7 to assist you with any questions or technical support needs.</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Professional Footer -->
                    <tr>
                        <td style="background: linear-gradient(to right, #f8fafc 0%, #f1f5f9 100%); padding: 35px 40px; border-top: 2px solid #e2e8f0;">
                            <table role="presentation" style="width: 100%;">
                                <tr>
                                    <td style="text-align: center;">
                                        <p style="margin: 0 0 12px; color: #475569; font-size: 14px; font-weight: 500;">
                                            © {{ date('Y') }} {{ $name ?? config('app.name', 'XBoard') }} • Professional Services
                                        </p>
                                        <p style="margin: 0; color: #94a3b8; font-size: 12px; line-height: 1.5;">
                                            This is an automated message • <a href="#" style="color: #2563eb; text-decoration: none;">Privacy Policy</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>