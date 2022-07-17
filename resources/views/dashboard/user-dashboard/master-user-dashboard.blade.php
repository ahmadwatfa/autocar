<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Account page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel='stylesheet'
      href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/css/bootstrap-select.min.css'>
      <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
</head>

<body>
    @include('components.header-dashboard')
    <div class="clear"></div>
    @yield('content1')
    @yield('page-script')
    <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
    <script src='https://use.fontawesome.com/8decb1aa86.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.10.0/js/bootstrap-select.min.js'></script>
    <script src="{{asset('js/script.js')}}"></script>
</body>
</html>
