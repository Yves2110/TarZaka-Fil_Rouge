<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TarZaka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="shortcut icon" href=" {{ asset('assets/images/TARZAKA.png') }} " />
</head>
<style>
    body {
        background-image: url({{ url('portes-auth.jpg') }} );
        background-repeat: no-repeat;
        background-size: cover;
    }
    @font-face {
        src: url('/../font/GRAM 01.ttf');
        font-family: "GRAM 01";}
    .tete{
        font-family: "GRAM 01";
        font-size: 5em;
            color: white;
            z-index: 120;
    }
    input{
        height:3.5em;
    }
</style>

<body>
    <main class="login-form">

        <div class="cotainer">

            <div class="row justify-content-center">

                <div class="col-md-8">

                    <div class="card">

                        <div class="card-header">Reset Password</div>

                        <div class="card-body">



                            <form action="{{ route('reset.password.post') }}" method="POST">

                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">



                                <div class="form-group row">

                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                    <div class="col-md-6">

                                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>

                                        @if ($errors->has('email'))

                                            <span class="text-danger">{{ $errors->first('email') }}</span>

                                        @endif

                                    </div>

                                </div>



                                <div class="form-group row">

                                    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                    <div class="col-md-6">

                                        <input type="password" id="password" class="form-control" name="password" required autofocus>

                                        @if ($errors->has('password'))

                                            <span class="text-danger">{{ $errors->first('password') }}</span>

                                        @endif

                                    </div>

                                </div>



                                <div class="form-group row">

                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

                                    <div class="col-md-6">

                                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation" required autofocus>

                                        @if ($errors->has('password_confirmation'))

                                            <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>

                                        @endif

                                    </div>

                                </div>



                                <div class="col-md-6 offset-md-4">

                                    <button type="submit" class="btn btn-primary">

                                        Reset Password

                                    </button>

                                </div>

                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>

      </main>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
