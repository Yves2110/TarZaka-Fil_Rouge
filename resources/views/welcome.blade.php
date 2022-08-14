<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tar'Zaka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="shortcut icon" href=" {{ asset('assets/images/TARZAKA.png') }} " />
</head>

<body>
    <style type="text/css">
        body {
            background-image: url({{ url('comment-bien-choisir-son-agence-immobiliere-1350894.jpg') }} );
            background-repeat: no-repeat;
            background-size: cover;
        }

        h1 {
            font-size: 5em;
            color: white;
            margin-top: 8.5%;
            font-family: "GRAM 01";
        }

        a {
            background-color: #faa44d !important;
            width: 175px !important;
            height: 60px !important;
            -webkit-border-radius: 160px / 100px !important;
            -moz-border-radius: 160px / 100px !important;
            border-radius: 160px / 100px !important;
            margin: 15% 65%;
            display: flex !important;
            justify-content: center !important;
            align-items: center;
        }
        @font-face {
        src: url('/../font/GRAM 01.ttf');
        font-family: "GRAM 01";

    }
    </style>
    <h1>BIENVENUE SUR TAR'ZAKA</h1>
    <a href=" {{route('auth.login')}} " class="btn btn-warning text-light fs-5" role="button">Connexion</a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>
