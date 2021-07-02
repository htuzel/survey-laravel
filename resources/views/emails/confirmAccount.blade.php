<!DOCTYPE html>
<html>
<head>
    <title>@lang('Welcome Set Your Motivation')</title>
</head>

<body>
<h2>@lang('Congratulations') {{$user['name']}}</h2>
<p>
    @lang('Your <a href="https://www.setyourmotivation.com/login"> Set Your Motivation</a> account has been confirmed. You can login with your email address  and password.')
</p>
<p>
    @lang('Your email address') : {{$user['email']}}
</p>

<a href="{{url('login', $user->verification_token)}}">@lang('Login')</a>
</body>

</html>