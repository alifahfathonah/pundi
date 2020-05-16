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
                        <img src="{{ asset('images/logo-round.png') }}" width="120px" alt="" style="margin-bottom: 18%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('./assets/js/plugins.js') }}"></script>
<script src="{{ asset('./assets/js/main.js') }}"></script>

<script>
    $(document).ready(function () {
        $(".preloader").fadeOut();
    })

</script>

</html>
