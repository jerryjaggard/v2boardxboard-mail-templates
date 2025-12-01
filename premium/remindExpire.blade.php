{{-- Premium Luxury Template 2025 - Subscription Expiry Reminder --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Subscription Expiry Notice</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Palatino Linotype', 'Georgia', 'Times New Roman', serif; background: linear-gradient(180deg, #1a1a1a 0%, #0d0d0d 100%);">
    <table role="presentation" style="width: 100%; border-collapse: collapse; background: linear-gradient(180deg, #1a1a1a 0%, #0d0d0d 100%); padding: 50px 20px;">
        <tr>
            <td align="center">
                <table role="presentation" style="width: 100%; max-width: 620px; border-collapse: collapse; background: linear-gradient(180deg, #1c1c1c 0%, #0f0f0f 100%); border-radius: 8px; overflow: hidden; border: 4px solid #d4a574; box-shadow: 0 30px 60px rgba(0,0,0,0.5);">
                    <tr>
                        <td style="background: linear-gradient(135deg, #d4a574 0%, #f4e4bc 50%, #d4a574 100%); padding: 10px;">
                            <div style="background: linear-gradient(180deg, #1c1c1c 0%, #0f0f0f 100%); padding: 50px 40px; text-align: center;">
                                <table role="presentation" style="width: 80px; height: 80px; margin: 0 auto 25px; background: rgba(212,165,116,0.15); border-radius: 50%; border: 2px solid #d4a574;">
                                    <tr><td style="text-align: center; vertical-align: middle;"><span style="font-size: 40px;">⚠️</span></td></tr>
                                </table>
                                <span style="font-size: 11px; color: #d4a574; letter-spacing: 6px; font-weight: 600;">★ URGENT NOTICE ★</span><br>
                                <h1 style="margin: 15px 0 0; color: #d4a574; font-size: 32px; font-weight: 400; letter-spacing: 2px;">Membership Expiring</h1>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 50px 45px;">
                            <p style="color: #d4a574; font-size: 17px; margin: 0 0 20px; font-weight: 500;">Distinguished Member,</p>
                            <p style="color: #999999; font-size: 16px; line-height: 1.9; margin: 0 0 35px;">
                                Your exclusive {{$name}} premium membership will expire in <strong style="color: #d4a574;">24 hours</strong>. Renew now to maintain your privileged access.
                            </p>
                            <div style="background: linear-gradient(135deg, rgba(212,165,116,0.15) 0%, rgba(244,228,188,0.1) 100%); padding: 30px; border: 3px solid #d4a574; margin: 30px 0; text-align: center;">
                                <p style="margin: 0 0 10px; color: #d4a574; font-size: 20px; font-weight: 600;">⏰ Expires in 24 Hours</p>
                                <p style="margin: 0; color: #999999; font-size: 14px;">Preserve your premium status and exclusive benefits</p>
                            </div>
                            <div style="background: rgba(212,165,116,0.08); padding: 28px; margin: 30px 0; border-radius: 4px;">
                                <p style="margin: 0 0 18px; color: #d4a574; font-size: 15px; font-weight: 600;">Your Premium Benefits:</p>
                                <table role="presentation" style="width: 100%;">
                                    <tr><td style="padding: 6px 0; color: #999999; font-size: 14px;">✦ Unlimited premium bandwidth</td></tr>
                                    <tr><td style="padding: 6px 0; color: #999999; font-size: 14px;">✦ Priority concierge support</td></tr>
                                    <tr><td style="padding: 6px 0; color: #999999; font-size: 14px;">✦ Exclusive member features</td></tr>
                                    <tr><td style="padding: 6px 0; color: #999999; font-size: 14px;">✦ VIP access privileges</td></tr>
                                </table>
                            </div>
                            <table role="presentation" style="width: 100%; margin: 45px 0 30px;">
                                <tr>
                                    <td align="center">
                                        <a href="{{$url}}" style="display: inline-block; background: linear-gradient(135deg, #d4a574 0%, #f4e4bc 50%, #d4a574 100%); color: #0f0f0f; text-decoration: none; padding: 20px 60px; font-weight: 700; font-size: 15px; letter-spacing: 3px; text-transform: uppercase; box-shadow: 0 10px 30px rgba(212,165,116,0.4); border: 2px solid #d4a574;">
                                            RENEW MEMBERSHIP
                                        </a>
                                    </td>
                                </tr>
                            </table>
                            <p style="color: #666666; font-size: 13px; text-align: center; margin: 30px 0 0;">Already renewed? Status update may take a few moments.</p>
                        </td>
                    </tr>
                    <tr>
                        <td style="background: linear-gradient(135deg, #d4a574 0%, #f4e4bc 50%, #d4a574 100%); padding: 4px;">
                            <div style="background: #0f0f0f; padding: 35px 40px; text-align: center;">
                                <p style="margin: 0; color: #d4a574; font-size: 12px; letter-spacing: 3px;">★ {{$name}} PREMIUM © {{ date('Y') }} ★</p>
                            </div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>