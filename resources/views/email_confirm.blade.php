<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
</head>
<body>
<div>
    <a href="{{$link}}">{{__('messages.email_confirm')}}</a>
</div>
</body>
</html>
