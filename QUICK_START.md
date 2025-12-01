# Installation & Quick Start Guide

## 🚀 Quick Installation (5 Minutes)

### Step 1: Choose Your Theme

We recommend starting with one of our **Enhanced 2025 Edition themes**:
- **Modern** - Professional purple gradient (best for most use cases)
- **Premium** - Luxury gold design (for VIP/premium services)
- **Aurora** - Vibrant northern lights (for creative brands)

### Step 2: Copy Templates

```bash
# Navigate to your chosen theme
cd modern  # or premium, or aurora

# Copy all templates to your xboard/v2board installation
cp *.blade.php /path/to/your/xboard/resources/views/mail/
```

### Step 3: Configure Variables

The templates use these Laravel Blade variables:

```php
$name     // Your service name (e.g., "MyVPN")
$subject  // Email subject
$content  // Main message content  
$url      // Action button URL
$code     // Verification code (verify template only)
$link     // Magic login link (mailLogin template only)
```

### Step 4: Test!

Send a test email to verify everything works:

```php
// In your Laravel/XBoard application
Mail::send('mail.notify', [
    'name' => 'Your Service Name',
    'content' => 'This is a test notification.',
    'url' => 'https://yoursite.com'
], function($message) {
    $message->to('test@example.com');
    $message->subject('Test Notification');
});
```

## 📁 Template Files Explained

### notify.blade.php
**Purpose**: General notifications and announcements  
**When to use**: System updates, news, general messages  
**Variables needed**: `$name`, `$content`, `$url` (optional)

### verify.blade.php
**Purpose**: Email address verification  
**When to use**: New account signup, email change  
**Variables needed**: `$name`, `$code`, `$url`  
**Special**: Shows verification code prominently, includes 5-minute expiry notice

### mailLogin.blade.php
**Purpose**: Passwordless login (magic link)  
**When to use**: Login authentication via email  
**Variables needed**: `$name`, `$link`  
**Special**: Security tips included, alternative plain link provided

### remindExpire.blade.php
**Purpose**: Subscription expiration warnings  
**When to use**: 24-48 hours before subscription expires  
**Variables needed**: `$name`, `$url`  
**Special**: Urgent styling, benefits reminder, clear renewal CTA

### remindTraffic.blade.php
**Purpose**: Bandwidth/traffic usage alerts  
**When to use**: When user reaches 80% of bandwidth limit  
**Variables needed**: `$name`, `$url`  
**Special**: Visual progress bar, usage statistics, upgrade options

## 🎨 Customization Examples

### Change Primary Color

**Modern Theme** (Purple → Blue):
```css
/* Find this in notify.blade.php */
background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);

/* Change to */
background: linear-gradient(135deg, #3b82f6 0%, #1e40af 100%);
```

### Add Your Logo

Add this inside the main content table, before the header:

```html
<tr>
    <td align="center" style="padding: 20px 0;">
        <img src="https://yoursite.com/logo.png" 
             alt="Your Logo" 
             style="max-width: 150px; height: auto;">
    </td>
</tr>
```

### Change Fonts

**Modern Theme** - Replace system fonts with custom:
```css
/* Current */
font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Arial, sans-serif;

/* Custom (ensure web-safe fallbacks) */
font-family: 'Your Font Name', 'Helvetica Neue', Arial, sans-serif;
```

## 🔧 Troubleshooting

### Issue: Images Not Showing
**Solution**: Ensure image URLs are absolute (starting with https://) and publicly accessible.

### Issue: Styles Look Different in Gmail
**Solution**: Gmail strips `<style>` tags. All styles are already inline in our templates.

### Issue: Outlook Rendering Problems
**Solution**: Templates include MSO conditionals. Test with Litmus for Outlook-specific fixes if needed.

### Issue: Button Not Clickable
**Solution**: Verify the `$url` or `$link` variable is properly set and contains a valid URL.

### Issue: Verification Code Not Showing
**Solution**: Ensure the `$code` variable is being passed to the view.

## 📱 Mobile Testing Checklist

Before going live, test your emails on:

- [ ] iPhone (iOS Mail app)
- [ ] Android (Gmail app)
- [ ] Gmail (web interface)
- [ ] Outlook (desktop and web)
- [ ] Apple Mail (macOS)

**Recommended Testing Tools:**
- [Litmus](https://litmus.com) - Comprehensive testing
- [Email on Acid](https://www.emailonacid.com) - Preview across clients
- [Mailtrap](https://mailtrap.io) - Safe testing environment

## 🎯 Best Practices

### Subject Lines
✅ Keep under 50 characters  
✅ Use action words  
✅ Avoid all caps and excessive punctuation  
✅ Make it relevant to email content

### Content
✅ Keep paragraphs short (2-3 lines)  
✅ Use bullet points for lists  
✅ Include clear call-to-action  
✅ Test all links before sending

### Sending
✅ Use proper SPF/DKIM/DMARC records  
✅ Don't send too many emails at once  
✅ Include unsubscribe option  
✅ Respect user preferences

## 🔐 Security Recommendations

### Verification Codes
- Use 6-digit codes
- Set 5-minute expiration
- Implement rate limiting
- Log all code generation events

### Magic Links
- Use cryptographically secure tokens
- Set 5-minute expiration
- Single-use only (invalidate after use)
- Track suspicious activity

### General
- Never include passwords in emails
- Use HTTPS for all links
- Implement DMARC for email authentication
- Monitor for phishing attempts using your templates

## 💡 Pro Tips

### Improving Deliverability
1. Authenticate your domain (SPF, DKIM, DMARC)
2. Maintain clean mailing lists
3. Monitor bounce rates
4. Warm up new sending IPs gradually
5. Include plain-text version

### Increasing Engagement
1. Personalize with user's name
2. Make CTAs prominent and clear
3. Test different button text
4. A/B test subject lines
5. Send at optimal times for your audience

### Maintaining Templates
1. Keep a test email list
2. Review templates quarterly
3. Update copyright year annually
4. Monitor email client changes
5. Gather user feedback

## 🆘 Support Resources

### Email Design References
- [Really Good Emails](https://reallygoodemails.com/)
- [Email Design Reference](https://templates.mailchimp.com/)
- [Can I Email](https://www.caniemail.com/) - CSS support checker

### Testing Tools
- [Mailtrap](https://mailtrap.io) - Email testing
- [Mail Tester](https://www.mail-tester.com) - Spam score checker
- [Litmus](https://litmus.com) - Cross-client testing

### Learning Resources
- [HTML Email Guide](https://htmlemail.io/)
- [Email Marketing Best Practices](https://www.campaignmonitor.com/best-practices/)
- [Laravel Mail Documentation](https://laravel.com/docs/mail)

## 📞 Quick Reference

### All Available Themes

| Theme | Style | Use Case | Status |
|-------|-------|----------|--------|
| Modern | Clean purple | General | ⭐ Enhanced |
| Premium | Luxury gold | VIP | ⭐ Enhanced |
| Aurora | Vibrant gradients | Creative | ⭐ Enhanced |
| Corporate | Professional | B2B | ✓ Available |
| Dark | Dark mode | Tech | ✓ Available |
| Forest | Nature green | Eco | ✓ Available |
| Futuristic | Cyberpunk | Gaming | ✓ Available |
| Glassmorphism | Glass effect | Modern | ✓ Available |
| Gradient | Colorful | Creative | ✓ Available |
| Minimal | Simple | Minimalist | ✓ Available |
| Neon | Glowing | Entertainment | ✓ Available |
| Ocean | Blue tones | Health | ✓ Available |
| Rose | Pink theme | Beauty | ✓ Available |
| Royal | Purple/Gold | Premium | ✓ Available |
| Sunset | Warm colors | Hospitality | ✓ Available |

⭐ = Enhanced with 2025 design improvements

### Template Variables Quick Reference

```php
// Common to all templates
$name = "Your Service Name";
$subject = "Email Subject";
$content = "Main message content here\nSupports line breaks";

// URL for action buttons (most templates)
$url = "https://yoursite.com/dashboard";

// Verification code (verify.blade.php only)
$code = "123456";

// Magic login link (mailLogin.blade.php only)
$link = "https://yoursite.com/login/magic/token123";
```

---

**Need Help?** Check the main README.md for detailed documentation.

**Ready to Deploy?** Just copy your chosen theme's `.blade.php` files to `resources/views/mail/` and you're done!
