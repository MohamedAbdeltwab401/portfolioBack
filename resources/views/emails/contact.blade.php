<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
        .wrapper { max-width: 600px; margin: 40px auto; background: #fff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        .header { background: #1a1a2e; color: #fff; padding: 30px; text-align: center; }
        .body { padding: 30px; color: #333; line-height: 1.7; }
        .message-box { background: #f9f9f9; border-left: 4px solid #e94560; padding: 12px; border-radius: 4px; white-space: pre-wrap; }
        .footer { background: #f4f4f4; padding: 20px; text-align: center; font-size: 12px; color: #aaa; }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>✅ Message Received!</h1>
        </div>
        <div class="body">
            <p>Hi <strong>{{ $data["name"] }}</strong>,</p>
            <p>Thanks for reaching out! I've received your message and will get back to you as soon as possible.</p>
            <p><strong>Your message:</strong></p>
            <div class="message-box">{{ $data['message'] }}</div>
            <p style="margin-top: 24px;">Talk soon,<br><strong>Mohamed Abdeltwab</strong></p>
        </div>
        <div class="footer">
            This is an automated confirmation — please don't reply to this email.
        </div>
    </div>
</body>
</html>