<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quote Verification</title>
</head>
<body>
<p>Hello {{ $quote->name }},</p>

<p>
    Thank you for your inquiry. Please click the button below to verify your email address and complete your quote submission.
</p>

<p>
    <a href="{{ route('verify.quote', ['quote' => $quote, 'token' => $quote->verification_token]) }}">Verify Email</a>
</p>

<p>
    If you did not make this request, you can safely ignore this email.
</p>

<p>Regards,<br>
    Your Company Name
</p>
</body>
</html>
