<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/bootstrap_1.css" rel="stylesheet" type="text/css"/>
    <title>Laravel voyager</title>
    

<body>
    @include('partials.navbar')

    <div class="container mt-5">
        @yield('content')
    </div>

    <!--script src="../js/bootstrap.js" type="text/javascript"></scrip>
    <script src="../js/bootstrape.js" type="text/javascript"></script>
    <script src="../js/jquery.js" type="text/javascript"></script>
    <script>
        $(document).ready(function(){
            alert(3);
        });
    </script-->
</body>
</html>