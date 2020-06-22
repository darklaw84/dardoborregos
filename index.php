<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="./imagenes/favicon.svg" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/style.css" id="personal-css">


    <link rel="stylesheet" href="css/bootstrap.css" id="bootstrap-css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>

    <script>

function irHome()
{
    window.location='home.php';
}
</script>

</head>

<body>
    <div class="video-container">
        <video playsinline autoplay muted id="myVideo" onended="irHome()" >
            <source src="imagenes/D7_VIDEO_VIDEOWEB_V02.mp4" type="video/mp4">
        </video>
    </div>
</body>

</html>