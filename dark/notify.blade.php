{{-- Dark Professional Template 2025 - Notification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $subject ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%); padding: 50px 20px;">
        <tr>
            <td align="center">
                <table role="presentation" style="width: 100%; max-width: 620px; border-collapse: collapse; background: linear-gradient(180deg, #1e293b 0%, #0f172a 100%); border-radius: 16px; overflow: hidden; border: 1px solid rgba(148,163,184,0.1); box-shadow: 0 20px 60px rgba(0,0,0,0.5), 0 0 80px rgba(59,130,246,0.15);">
                    <!-- Dark Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, rgba(59,130,246,0.1) 0%, rgba(37,99,235,0.05) 100%); padding: 45px 40px; border-bottom: 1px solid rgba(148,163,184,0.1);">
                            <div style="background: rgba(59,130,246,0.15); display: inline-block; padding: 8px 20px; border-radius: 20px; margin-bottom: 15px; border: 1px solid rgba(59,130,246,0.3);">
                                <span style="color: #3b82f6; font-size: 11px; font-weight: 600; letter-spacing: 1.5px; text-transform: uppercase;">Notification</span>
                            </div>
                            <h1 style="margin: 0; color: #f1f5f9; font-size: 28px; font-weight: 700; letter-spacing: -0.5px;">{{ $name ?? 'Notification' }}</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px 40px;">
                            <p style="color: #e2e8f0; font-size: 16px; line-height: 1.6; margin: 0 0 10px; font-weight: 600;">Hello,</p>
                            <div style="color: #cbd5e1; font-size: 15px; line-height: 1.8; margin: 20px 0;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <table role="presentation" style="width: 100%; margin: 35px 0 20px;">
                                    <tr>
                                        <td align="center">
                                            <a href="{{ $url }}" style="display: inline-block; background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); color: #ffffff; text-decoration: none; padding: 16px 45px; border-radius: 10px; font-weight: 600; font-size: 15px; box-shadow: 0 4px 14px rgba(59,130,246,0.4), 0 0 20px rgba(59,130,246,0.2);">
                                                View Details →
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            @endif
                            <!-- Info Panel -->
                            <table role="presentation" style="width: 100%; background: rgba(59,130,246,0.05); border-left: 3px solid #3b82f6; border-radius: 8px; margin: 30px 0 0;">
                                <tr>
                                    <td style="padding: 20px;">
                                        <p style="margin: 0; color: #94a3b8; font-size: 14px; line-height: 1.6;">
                                            <strong style="color: #cbd5e1;">Need assistance?</strong> Our support team is available 24/7.
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: linear-gradient(180deg, rgba(15,23,42,0.5) 0%, rgba(15,23,42,0.8) 100%); padding: 35px 40px; text-align: center; border-top: 1px solid rgba(148,163,184,0.1);">
                            <p style="margin: 0 0 8px; color: #94a3b8; font-size: 14px;">
                                © {{ date('Y') }} {{ $name ?? config('app.name', 'XBoard') }}
                            </p>
                            <p style="margin: 0; color: #64748b; font-size: 12px;">
                                Professional dark theme
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
