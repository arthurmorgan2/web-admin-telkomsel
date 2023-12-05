<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- Login CSS File --}}
    <link rel="stylesheet" href="css/login.css">
    {{-- FontAwesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <title>Login Admin NTE Telkomsel</title>
</head>

<body>
    <div class="container-fluid bg-image">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-md-4 card-container d-flex flex-column justify-content-center align-items-center">
                <div class="mb-4">
                    <div class="card-icon d-flex justify-content-center align-items-center">
                        <p class="icon">
                            <i class="fa-solid fa-user fa-2xl" style="color: #ffff">
                            </i>
                        </p>
                    </div>
                </div>

                <div class="card-form">
                    <form action="/login" method="post">
                        @csrf
                        <div class="mb-1">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-solid fa-user fa-xl"></i></span>
                                <input type="name" class="form-control" id="name" name="name"
                                    placeholder="Username" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="input-group">
                                <span class="input-group-text"><i class="fa fa-solid fa-lock fa-xl"></i></span>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Password" required>
                            </div>
                        </div>

                        <button type="submit" class="btn-login py-2 fw-bold">Getting Started</button>
                        <div class="row mt-2">
                            <div class="col login-extras d-flex justify-content-between align-items-center">
                                <a href="#">
                                    Create an account?
                                </a>
                                <a href="#">
                                    Need Help?
                                </a>
                            </div>
                        </div>
                    </form>
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('loginError') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                            </button>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</body>


{{-- Bootstrap 5 --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
