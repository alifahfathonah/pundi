<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PUNDI</title>
</head>
<body>
    @php
        $image = App\Models\Images::select('id', 'footer', 'header', 'poster')->first();
    @endphp
    <footer>
        <div class="footer-area footer-padding fix">
            <div class="container">
                <div class="text-center">
                    <img class="m-b-15" src="{{ config('app.path_url').$image->footer }}" width="100" alt="footer">
                    <p class="f-wht">Tajam dan Mencerahkan</p>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="footer-copy-right">
                                <p>2020 PUNDI.or.id - kanal pendidikan tajam dan mencerahkan</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-menu f-right -mt-20">
                                <ul>
                                    <li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
                                    <li><a href="{{ route('disclaimer') }}">Disclaimer</a></li>
                                    <li><a href="{{ route('redaksi') }}">Redaksi</a></li>
                                    <li><a href="{{ route('media-siber') }}">Media Siber</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
