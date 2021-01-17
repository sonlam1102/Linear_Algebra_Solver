<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png"
              href="http://sheaves.github.io/images/favicons/android-icon-192x192.png"/>

        <title>Đại Số Tuyến Tính</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script
                src="https://code.jquery.com/jquery-3.4.0.min.js"
                integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
                crossorigin="anonymous">
        </script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
              integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

        <!--Thư viện latex trong toán-->
        <script type="text/x-mathjax-config">
                MathJax.Hub.Config({
                    tex2jax: {
                         inlineMath: [ ['$','$'], ["\\(","\\)"] ],
                         displayMath: [ ['$$','$$'], ["\\[","\\]"] ],
                          processEscapes: true
                    }
                });

        </script>
        <script type="text/javascript" async
                src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.5/MathJax.js?config=TeX-MML-AM_CHTML">
        </script>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">


    </head>

    <body>
        @include('assets/guide')
        <div>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                        <label class="mr-top-20"
                               style="font-size:22px;text-align: center; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">CHƯƠNG
                            TRÌNH HỖ TRỢ GIẢI CÁC BÀI TẬP <br/> KIẾN THỨC ĐẠI SỐ TUYẾN TÍNH</label>
                    </div>
                </div>
            </div>
            @include('assets/navigation')
            @include('assets/input')

        </div>

        <hr/>

    </body>
</html>
<script src="/js/main.js"></script>
