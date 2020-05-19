<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Document</title>

    <!-- JS -->
    <script type="text/javascript" src="{{ asset('ckeditor/ckeditor.js') }}"></script>
</head>

<body>
    <textarea class="ckeditor" name="isi" cols="100" id="ckedtor"></textarea>
</body>

</html>
