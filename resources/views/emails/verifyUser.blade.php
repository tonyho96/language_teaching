<!DOCTYPE html>
<html>
<head>
    <title>Welcome {{$user['full_name']}}</title>
</head>

<body>
<p><span><strong>Dear {{$user['full_name']}}!</strong></span></p>
<p><span>Thanks for signing up for italki! Soon you'll be able to start learning a language online, and meeting people from around the world.</span></p>
<p><span>All you need to do to complete your registration is follow the link below:</span></p>
<p><span><a href="{{url('user/verify', $user->verify_token)}}">Verify Email</a></span></p>
<p><span>If the above link does not work, please copy the address to your web browser and enter our website from there.</span></p>
<p><span>If you did not register for italki, or believe you have received this email in error, please disregard this message.</span></p>
<p><span>Sincerely,</span></p>
<p><span>The italki Team</span></p>

</body>

</html>