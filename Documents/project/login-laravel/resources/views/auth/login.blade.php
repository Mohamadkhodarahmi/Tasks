<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>login</title>
</head>
<body class="bg-liner-gradient bg-info-subtle" >
@include('sweetalert::alert')
@if(session::get('error'))
    <p>{{session('error')}}</p>
@endif
<div class="container col-4 mt-4 card rounded-5" >
    <h2 class="mt-4"> login page</h2>
    <form  method="post">
        @csrf

        <label for="email" class="form-label">email:</label>
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror">

        @error('email')
        <p class="text-danger">{{$message}}</p>
        @enderror

        <label for="password" class="form-label">password:</label>
        <input type="password" name="password" class="form-control mb-4 @error('password') is-invalid @enderror">

        @error('password')
        <p class="text-danger">{{$message}}</p>
        @enderror
        <div class="d-flex flex-row">
            <a class="btn btn-outline-success mx-5 mb-4"  href="{{route('register')}}">back to register</a>
            <button class="btn btn-outline-success mx-5 mb-4" type="submit"> login</button>

        </div>


    </form>
</div>

</body>
</html>
