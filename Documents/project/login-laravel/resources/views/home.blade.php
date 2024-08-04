<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Laravel</title>


</head>
<body >


@include('sweetalert::alert')
@if(session::get('success'))
    <p>{{session('success')}}</p>
@endif
@foreach($users as $user) @endforeach
<div class="container">
    <h2>wellcome {{$user->name }} </h2>
</div>

</body>
</html>
