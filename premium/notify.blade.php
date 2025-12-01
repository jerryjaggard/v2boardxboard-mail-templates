{{-- Premium Luxury Template 2025 - Notification --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $subject ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Palatino Linotype', 'Georgia', 'Times New Roman', serif; background: linear-gradient(180deg, #1a1a1a 0%, #0d0d0d 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(180deg, #1a1a1a 0%, #0d0d0d 100%); padding: 50px 20px;">
        <tr>
            <td align="center">
                <table role="presentation" style="width: 100%; max-width: 620px; border-collapse: collapse; background: linear-gradient(180deg, #1c1c1c 0%, #0f0f0f 100%); border-radius: 8px; overflow: hidden; border: 4px solid #d4a574; box-shadow: 0 30px 60px rgba(0,0,0,0.5), 0 0 100px rgba(212,165,116,0.15);">
                    <!-- Luxury Border Top -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #d4a574 0%, #f4e4bc 25%, #d4a574 50%, #f4e4bc 75%, #d4a574 100%); padding: 10px;">
                            <div style="background: linear-gradient(180deg, #1c1c1c 0%, #0f0f0f 100%); padding: 50px 40px; text-align: center;">
                                <div style="margin-bottom: 20px;">
                                    <span style="font-size: 11px; color: #d4a574; letter-spacing: 6px; font-weight: 600;">★ PREMIUM MEMBERSHIP ★</span>
                                </div>
                                <h1 style="margin: 0; color: #d4a574; font-size: 32px; font-weight: 400; letter-spacing: 2px;">{{ $name ?? 'Notification' }}</h1>
                            </div>
                        </td>
                    </tr>
                    <!-- Content -->
                    <tr>
                        <td style="padding: 50px 45px;">
                            <p style="color: #d4a574; font-size: 17px; line-height: 1.9; margin: 0 0 20px; font-weight: 500;">Distinguished Member,</p>
                            <div style="color: #999999; font-size: 16px; line-height: 1.9;">
                                {!! nl2br(e($content ?? '')) !!}
                            </div>
                            @if(isset($url) && $url)
                                <!-- Luxury CTA -->
                                <table role="presentation" style="width: 100%; margin: 45px 0 30px;">
                                    <tr>
                                        <td align="center">
                                            <a href="{{ $url }}" style="display: inline-block; background: linear-gradient(135deg, #d4a574 0%, #f4e4bc 50%, #d4a574 100%); color: #0f0f0f; text-decoration: none; padding: 18px 55px; font-weight: 700; font-size: 14px; letter-spacing: 3px; text-transform: uppercase; box-shadow: 0 10px 30px rgba(212,165,116,0.4); border: 2px solid #d4a574;">
                                                PROCEED
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            @endif
                            <!-- Premium Info -->
                            <div style="background: rgba(212,165,116,0.08); border: 1px solid rgba(212,165,116,0.3); padding: 25px; margin: 35px 0 0; border-radius: 4px;">
                                <p style="margin: 0; color: #999999; font-size: 14px; line-height: 1.7; text-align: center;">
                                    <strong style="color: #d4a574;">Exclusive Support</strong><br>
                                    Our concierge team is available 24/7 for premium members
                                </p>
                            </div>
                        </td>
                    </tr>
                    <!-- Luxury Footer -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #d4a574 0%, #f4e4bc 25%, #d4a574 50%, #f4e4bc 75%, #d4a574 100%); padding: 4px;">
                            <div style="background: #0f0f0f; padding: 35px 40px; text-align: center;">
                                <p style="margin: 0 0 10px; color: #d4a574; font-size: 12px; letter-spacing: 3px;">★ {{ $name ?? config('app.name', 'XBoard') }} PREMIUM © {{ date('Y') }} ★</p>
                                <p style="margin: 0; color: #666666; font-size: 11px; letter-spacing: 1px;">EXCELLENCE IN SERVICE</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
