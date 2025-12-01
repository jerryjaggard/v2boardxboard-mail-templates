{{-- Aurora Theme 2025 - Vibrant Northern Lights Notification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $subject ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif; background: linear-gradient(135deg, #0c0c1e 0%, #1a1a3e 50%, #0f0f2e 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(135deg, #0c0c1e 0%, #1a1a3e 50%, #0f0f2e 100%); padding: 50px 20px;">
        <tr>
            <td align="center">
                <table role="presentation" style="width: 100%; max-width: 600px; border-collapse: collapse; background: linear-gradient(180deg, rgba(255,255,255,0.05) 0%, rgba(255,255,255,0.02) 100%); border-radius: 24px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 25px 80px rgba(0,0,0,0.5), 0 0 100px rgba(99,102,241,0.2), 0 0 60px rgba(236,72,153,0.1);">
                    <!-- Aurora Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, rgba(99,102,241,0.3) 0%, rgba(139,92,246,0.3) 25%, rgba(236,72,153,0.3) 50%, rgba(34,211,238,0.3) 75%, rgba(16,185,129,0.3) 100%); padding: 50px 40px; text-align: center; position: relative;">
                            <div style="margin-bottom: 20px;">
                                <span style="font-size: 12px; color: rgba(255,255,255,0.6); letter-spacing: 4px; font-weight: 600;">✧ AURORA BOREALIS ✧</span>
                            </div>
                            <h1 style="margin: 0; color: #ffffff; font-size: 28px; font-weight: 600; text-shadow: 0 0 30px rgba(139,92,246,0.8);">{{ $name ?? 'Notification' }}</h1>
                            <p style="margin: 15px 0 0; color: rgba(255,255,255,0.8); font-size: 14px;">Experience the magic of digital communication</p>
                        </td>
                    </tr>
                    <!-- Aurora Wave -->
                    <tr>
                        <td style="height: 4px; background: linear-gradient(90deg, #6366f1, #8b5cf6, #ec4899, #22d3ee, #10b981, #6366f1);"></td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 50px 40px;">
                            <p style="color: rgba(255,255,255,0.9); font-size: 17px; line-height: 1.7; margin: 0 0 10px; font-weight: 600;">Hello,</p>
                            <div style="color: rgba(255,255,255,0.75); font-size: 16px; line-height: 1.8; margin: 20px 0;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <table role="presentation" style="width: 100%; margin: 40px 0 30px;">
                                    <tr>
                                        <td align="center">
                                            <a href="{{ $url }}" style="display: inline-block; background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 50%, #ec4899 100%); color: #ffffff; text-decoration: none; padding: 16px 50px; border-radius: 14px; font-weight: 600; font-size: 16px; box-shadow: 0 10px 40px rgba(139,92,246,0.5), 0 0 20px rgba(236,72,153,0.3);">
                                                ✨ Explore Now
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            @endif
                            <!-- Info Panel -->
                            <div style="background: rgba(99,102,241,0.1); border-left: 4px solid #8b5cf6; padding: 20px; margin: 30px 0 0; border-radius: 12px;">
                                <p style="margin: 0; color: rgba(255,255,255,0.7); font-size: 14px; line-height: 1.6;">
                                    <strong style="color: rgba(255,255,255,0.9);">💫 Need assistance?</strong><br>
                                    Our support constellation is available 24/7 to guide you.
                                </p>
                            </div>
                        </td>
                    </tr>
                    <!-- Aurora Footer -->
                    <tr>
                        <td style="background: linear-gradient(180deg, rgba(99,102,241,0.1) 0%, rgba(16,185,129,0.1) 100%); padding: 35px 40px; text-align: center; border-top: 1px solid rgba(255,255,255,0.1);">
                            <p style="margin: 0 0 10px; color: rgba(255,255,255,0.6); font-size: 14px;">
                                ✧ {{ $name ?? config('app.name', 'XBoard') }} • Dancing Lights © {{ date('Y') }} ✧
                            </p>
                            <p style="margin: 0; color: rgba(255,255,255,0.4); font-size: 12px;">
                                This mystical message was crafted with care
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>