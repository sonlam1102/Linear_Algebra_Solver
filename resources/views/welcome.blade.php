<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Đại Số Tuyến Tính</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .border-frm{
                border: 2px solid black;
                border-radius: 5px;
                height: 450px;
            }
            .mr-top-200{
                margin-top:200px;
            }
            .mr-top-20{
                margin-top:20px;
            }
            .mr-top-40{
                margin-top:40px;
            }
            .navbar-cus{
                background-color: #0080ff;
            }
            li.text-navbar a {
                color: #000;
            }
            li a hover{
                background-color: 936c6c
            }
            .right-title{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="">
            <div style="width: 100%;height: 100px">
                <div class="row justify-content-between">
                    <div class="col-sm-6">
                        <img src="http://utc2.edu.vn//uploads/img/images/logo.png"/>
                    </div>
                    <div class="col-sm-6">
                        <label class="" style="font-size:30px;text-align: center; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">CHƯƠNG TRÌNH HỖ TRỢ GIẢI CÁC BÀI TẬP <br/> KIẾN THỨC ĐẠI SỐ TUYẾN TÍNH</label>
                    </div>
                </div>
                
                
            </div>
            <nav class="navbar navbar-expand-lg navbar-cus">
              <a class="navbar-brand" href="#" style="color: #000"><i class="fas fa-home"></i></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown text-navbar">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Định thức ma trận</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item get-operator" href="#">Action</a>
                          <a class="dropdown-item get-operator" href="#">Another action</a>
                          <!-- <div class="dropdown-divider"></div> -->
                          <a class="dropdown-item get-operator" href="#">Something else here</a>
                        </div>
                    </li>
                    <li class="nav-item active text-navbar">
                        <a class="nav-link get-operator" href="#">Hệ phương trình tuyến tính <span class="sr-only"></span></a>
                    </li>

                    <li class="nav-item dropdown text-navbar">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Không gian vector</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item get-operator" href="#">Action</a>
                          <a class="dropdown-item get-operator" href="#">Another action</a>
                          <!-- <div class="dropdown-divider"></div> -->
                          <a class="dropdown-item get-operator" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
                </form>
              </div>
            </nav>
            <div class="" style="margin: 50px;">
                <form>
                     <div class="row justify-content-between">
                        <div class="col-sm-4 border-frm" style="width: 100%;color: blue;">
                            <label class="mr-top-20">Dạng bài toán</label>
                            <input type="text" name="" class="form-control" value="" id="operator">
                            <button class="btn btn-success mr-top-20">Import file</button><br/>
                            <textarea class="form-control mr-top-20" id="exampleFormControlTextarea1" rows="10"></textarea>
                        </div>
                        <div class="col-sm-1 mr-top-200">
                            <button class="btn btn-success">Excute</button><br/>
                        </div>
                        <div class="col-sm-7 border-frm">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <hr/>
        <div class="container">
            <div style="color: #000;">
                TRƯỜNG ĐH GIAO THÔNG VẬN TẢI - PHÂN HIỆU TẠI TP. HCM<br/>
            Địa chỉ: 450-451 Lê Văn Việt, Phường Tăng Nhơn Phú A, Quận 9, TP. Hồ Chí Minh<br/>
            Điện thoại: (028).3896.6798 - (028).7300.1155 - Email: banbientap@utc2.eu.vn<br/>
            Fax: (028).3896.4736 - Website: http://utc2.edu.vn
            </div>
        </div>
        <script type="text/javascript">
            $(".get-operator").click(function(){
                $("#operator").val($(this).text());
            });
        </script>
    </body>
</html>
