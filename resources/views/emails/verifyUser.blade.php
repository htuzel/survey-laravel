<!DOCTYPE html>
<html>
<head>
    <title>Verify Email</title>
</head>

<body>

<br/>
@lang('A new user has registered  , Please click on the below link to verify the account.')
<br/>
<p>@lang('Name') : {{$user['name']}}</p>
<p>@lang('Email') : {{$user['email']}} </p>
<a href="{{url('user/verify', $user->verification_token)}}">@lang('Verify Account')</a>
</body>

</html>