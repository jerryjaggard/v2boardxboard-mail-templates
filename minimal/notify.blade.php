{{-- Minimal Professional Template 2025 - Notification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $subject ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif; background-color: #fafafa;">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background-color: #fafafa;">
        <tr>
            <td align="center" style="padding: 60px 20px;">
                <table role="presentation" style="width: 100%; max-width: 580px; border-collapse: collapse; background: #ffffff; border-radius: 2px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
                    <!-- Clean Header -->
                    <tr>
                        <td style="padding: 50px 45px 40px; border-bottom: 1px solid #e8e8e8;">
                            <h1 style="margin: 0; color: #1a1a1a; font-size: 26px; font-weight: 600; letter-spacing: -0.5px;">{{ $name ?? 'Notification' }}</h1>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 45px;">
                            <p style="color: #1a1a1a; font-size: 16px; line-height: 1.6; margin: 0 0 8px; font-weight: 500;">Hello,</p>
                            <div style="color: #4a4a4a; font-size: 15px; line-height: 1.7; margin: 20px 0;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <table role="presentation" style="width: 100%; margin: 35px 0 20px;">
                                    <tr>
                                        <td align="center">
                                            <a href="{{ $url }}" style="display: inline-block; background: #1a1a1a; color: #ffffff; text-decoration: none; padding: 14px 38px; border-radius: 2px; font-weight: 500; font-size: 15px; letter-spacing: 0.3px;">
                                                View Details
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            @endif
                        </td>
                    </tr>
                    <!-- Footer -->
                    <tr>
                        <td style="background: #fafafa; padding: 30px 45px; text-align: center; border-top: 1px solid #e8e8e8;">
                            <p style="margin: 0 0 8px; color: #6a6a6a; font-size: 13px; line-height: 1.5;">
                                © {{ date('Y') }} {{ $name ?? config('app.name', 'XBoard') }}
                            </p>
                            <p style="margin: 0; color: #9a9a9a; font-size: 12px;">
                                Professional communication
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>