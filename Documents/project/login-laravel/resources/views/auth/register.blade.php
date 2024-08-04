@include('sweetalert::alert')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>register</title>
</head>
<body class="bg-liner-gradient bg-info-subtle" >

<div class="container col-4 mt-4 card rounded-5" >
    <h2 class="mt-4"> register page</h2>
    <form  method="post">
        @csrf
        <label for="name" class="form-label" >name:</label>
        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror">

        @error('name')
        <p class="text-danger">{{$message}}</p>
        @enderror

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
            <a class="btn btn-outline-success mx-5 mb-4"  href="{{route('login')}}">back to login </a>
            <button class="btn btn-outline-success mx-5 mb-4" type="submit"> register</button>

        </div>

    </form>
</div>
<script type="text/javascript">
    function deleteConfirmation(id) {
        swal.fire({
            title: "Delete?",
            icon: 'question',
            text: "Please ensure and then confirm!",
            type: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: !0
        }).then(function (e) {

            if (e.value === true) {
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    type: 'POST',
                    url: "{{url('/delete')}}/" + id,
                    data: {_token: CSRF_TOKEN},
                    dataType: 'JSON',
                    success: function (results) {
                        if (results.success === true) {
                            swal.fire("Done!", results.message, "success");
                            // refresh page after 2 seconds
                            setTimeout(function(){
                                location.reload();
                            },2000);
                        } else {
                            swal.fire("Error!", results.message, "error");
                        }
                    }
                });

            } else {
                e.dismiss;
            }

        }, function (dismiss) {
            return false;
        })
    }
</script>
</body>
</html>
