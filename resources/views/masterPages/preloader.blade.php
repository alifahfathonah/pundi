<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Document</title>

</head>

<body>
    <div class="">
        <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="{{ config('app.path_url').'logo-round.png' }}" width="120px" alt="photo" style="margin-bottom: 18%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Jquery Plugins -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
<script>
    $(document).ready(function () {
        $(".preloader").fadeOut();
    })
</script>

</html>
