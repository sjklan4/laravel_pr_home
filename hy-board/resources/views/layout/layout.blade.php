<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('layout.inc.header')
    @yield('contents')
    @include('layout.inc.footer')

    @yield('if')
    @yield('for')
    @yield('foreach')
    @yield('forelse')
</body>
</html>

{{-- layout은 여기서 header와 footer등을 한번에 입력해서 전체적으로 보여주는 구성을 미리 작성한다음 view들에게 적용해서 별도의html을 작성하지 않고도 공통적으로
    적용되도록 할 수 있다. --}}