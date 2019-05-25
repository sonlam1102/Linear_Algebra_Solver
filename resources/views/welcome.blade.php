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
<div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <img class="mr-10" src="http://utc2.edu.vn//uploads/img/images/logo.png"/>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <label class="mr-top-20"
                       style="font-size:22px;text-align: center; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">CHƯƠNG
                    TRÌNH HỖ TRỢ GIẢI CÁC BÀI TẬP <br/> KIẾN THỨC ĐẠI SỐ TUYẾN TÍNH</label>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #0080FF!important">
        <a class="navbar-brand" href="#" style="color: #000"><i class="fas fa-home" id="home"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-navbar" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown text-navbar">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Định thức ma trận</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item get-operator operator" href="">Phép cộng ma trận</a>
                        <a class="dropdown-item get-operator operator" href="">Phép trừ ma trận</a>
                        <a class="dropdown-item get-operator operator" href="">Phép nhân ma trận</a>
                        <a class="dropdown-item get-operator operator" href="">Định thức ma trận</a>
                        <a class="dropdown-item get-operator operator" href="">Hạng ma trận</a>
                        <a class="dropdown-item get-operator operator" href="">Ma trận nghịch đảo</a>
                        <a class="dropdown-item get-operator operator" href="">Phương trình ma trận</a>

                    </div>
                </li>
                <li class="nav-item active text-navbar">
                    <a class="nav-link get-operator operator" href="">Hệ phương trình tuyến tính<span
                                class="sr-only"></span></a>
                </li>

                <li class="nav-item dropdown text-navbar">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Không gian vector</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item get-operator operator" href="">Độc lập tuyến tính,phụ thuộc tuyến
                            tính</a>
                        <a class="dropdown-item get-operator operator" href="">Ma trận đổi cơ sở</a>
                    </div>
                </li>
                
            </ul>
            <form class="form-inline my-2 my-lg-0 search-form" id="frm-search">
                <select class="col-sm-4 js-example-basic-single" name="search-select" id="search-select">

                </select>
                <button class="btn btn-success my-2 my-sm-0" type="submit" style="margin-left: 10px">Search</button>
            </form>
        </div>
    </nav>
    <div style="margin:10px 50px;">
        <form>
            <input id="token" value="{{ @csrf_token() }}" hidden>
            <div class="row justify-content-between">
                <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4" style="width: 100%;color: blue;">
                    <div class="row">
                        <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10 border-frm">
                            <label class="mr-top-20">Dạng bài toán</label>
                            <input type="text" name="" class="form-control border-input" value="" id="operator"
                                   readonly>
                            <div class="file btn btn-success upfile mr-top-20" id="upfile">
                                Upload
                                <input type="file" name="file" class="upfile" id="upfiles"
                                       onchange="onFileSelected(event)"/>
                            </div>
                            <textarea class="form-control mr-top-20 border-input" id="exampleFormControlTextarea1"
                                      rows="10"></textarea>
                        </div>
                        <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
                            <button class="btn btn-success mr-5" id="result"
                                    style="text-align:center; padding: 15px 65px;position: absolute;bottom: 50%"><i
                                        class="fas fa-angle-double-right"></i></button>
                        </div>
                    </div>

                </div>
                <!-- <textarea class="col-sm-7 border-frm" id="show"> </textarea> -->
                <div class="col-sm-4 col-md-6 col-lg-6 col-xl-7 border-frm" id="show"></div>
            </div>
        </form>
    </div>
</div>

<hr/>
<div class="pd-50" style="background-color: #0080ff; color: black">
    TRƯỜNG ĐH GIAO THÔNG VẬN TẢI - PHÂN HIỆU TẠI TP. HCM<br/>
    Địa chỉ: 450-451 Lê Văn Việt, Phường Tăng Nhơn Phú A, Quận 9, TP. Hồ Chí Minh<br/>
    Điện thoại: (028).3896.6798 - (028).7300.1155 - Email: banbientap@utc2.eu.vn<br/>
    Fax: (028).3896.4736 - Website: http://utc2.edu.vn
</div>

</body>
</html>


<script type="text/javascript">

    $(document).ready(function () {
        //search execute
        let optionsarray = [
            {
                "name": "",
                "type": ""
            },
            {
                "name": "Phép cộng ma trận",
                "type": "Phép cộng ma trận"
            },

            {
                "name": "Phép trừ ma trận",
                "type": "Phép trừ ma trận"
            },
            {
                "name": "Phép nhân ma trận",
                "type": "Phép nhân ma trận"
            },
            {
                "name": "Định thức ma trận",
                "type": "Định thức ma trận"
            },
            {
                "name": "Hạng ma trận",
                "type": "Hạng ma trận"
            },
            {
                "name": "Ma trận nghịch đảo",
                "type": "Ma trận nghịch đảo"
            },
            {
                "name": "Phương trình ma trận",
                "type": "Phương trình ma trận"
            },
            {
                "name": "Hệ phương trình tuyến tính",
                "type": "Hệ phương trình tuyến tính"
            },

            {
                "name": "Độc lập tuyến tính,phụ thuộc tuyến tính",
                "type": "Độc lập tuyến tính,phụ thuộc tuyến tính"
            },
            {
                "name": "Ma trận đổi cơ sở",
                "type": "Ma trận đổi cơ sở"
            },

        ];
        let seloption = "";

        $.each(optionsarray, function (i) {
            seloption += '<option value="' + optionsarray[i].type + '">' + optionsarray[i].name + '</option>';
        });

        $('#search-select').append(seloption);
        $('.js-example-basic-single').select2();
    });

    $(".get-operator").click(function (event) {

        event.preventDefault();
        $("#operator").val($(this).text());
        // $('#exampleFormControlTextarea1').val("");
        /*$('div#show').empty();
        $('#exampleFormControlTextarea1').empty();*/
        /*console.log($('#exampleFormControlTextarea1').val())*/
        document.getElementById("search-select").value = "";
        setDefaultTextAreaValue();
        document.getElementById("show").innerHTML = "";

    });

    $(".fa-home").click(function (event) {
        document.location.reload(true);
        //console.log($('#exampleFormControlTextarea1').val())
    });

    function setDefaultTextAreaValue() {
        switch ($("#operator").val()) {
            // case "cong":
            case "Phép cộng ma trận":
                document.getElementById("exampleFormControlTextarea1").innerHTML = "Matran([[3,0,5],[-2,7,4]]);Matran([[-1,5,14],[6,13,-8]])";
                break;

            case "tru":
            case "Phép trừ ma trận":
                document.getElementById("exampleFormControlTextarea1").innerHTML = "Matran([[1, 5, -1], [11, 3, 4], [1, -1, 3]]);Matran([[7, 2, 9], [1, 2, 5], [0, 2, 4]])  ";
                break;

            // case  "nhan":
            case "Phép nhân ma trận":
                document.getElementById("exampleFormControlTextarea1").innerHTML = "Matran([[11, 3],[-7, 11]]);Matran([[8, 0, 1],[0, 3, 5],[9, 3, 5]])";
                break;

            // case "dinh_thuc":
            case "Định thức ma trận":
                document.getElementById("exampleFormControlTextarea1").innerHTML = "Matran([[2, -1, 4], [6, -3, -2], [4, 1, 2]])";
                break;

            // case "hang":
            case "Hạng ma trận":
                document.getElementById("exampleFormControlTextarea1").innerHTML = "Matran([[1, 3, 5, 9], [1, 3, 1, 7], [4, 3, 9, 7], [5, 2, 0, 9]])";
                break;

            // case "nghich_dao":
            case "Ma trận nghịch đảo":
                document.getElementById("exampleFormControlTextarea1").innerHTML = "Matran([[1, 2, 3], [4, 5, 6], [7, 2, 9]])";
                break;

            // case "pt_ma_tran":
            case "Phương trình ma trận":
                document.getElementById("exampleFormControlTextarea1").innerHTML =
                    "A := Matran([[1,2],[3,5]]); \nB := Matran([[1,0],[2,1]]) ;";
                break;

            // case "he_pt":
            case "Hệ phương trình tuyến tính":
                console.log(1);
                document.getElementById("exampleFormControlTextarea1").innerHTML =
                    "Hephuongtrinh([x+y+z=25, 5*x+3*y+2*z= 0, x+y-z=6],{x,y,z})";
                break;

            // case "doc_lap_tt" :
            case "Độc lập tuyến tính,phụ thuộc tuyến tính":
                console.log(1);
                document.getElementById("exampleFormControlTextarea1").innerHTML =
                    "x:=Vector([3, -4, 1, 7]);\ny:=Vector([-2, 6, 8, -1]);\nz:=Vector([-13, 24, 13, -23]);";
                break;

            // case "doi_co_so":
            case "Ma trận đổi cơ sở":
                document.getElementById("exampleFormControlTextarea1").innerHTML =
                    "x:=Vector([-1, 1, 5, 0]);\ny:=Vector([2, -5, -4, 1]);\nz:=Vector([-3, 0, -2, 4]);\nS:=[x,y,z];\nx1:=Vector([-1, 7, 16, -5]);\ny1:=Vector([11, -17, 3, -4]);\nz1:=Vector([-19, 13, 15, 14]);\nSpace:=[x1,y1,z1];";
                break;
        }
    }

    function onFileSelected(event) {
        let selectedFile = event.target.files[0];
        if (getFileExtension(selectedFile.name) && getFileExtension(selectedFile.name) === "txt") {
            var reader = new FileReader();

            var result = document.getElementById("exampleFormControlTextarea1");
            reader.onload = function (event) {
                result.innerHTML = event.target.result;
            };

            reader.readAsText(selectedFile);
        } else {
            alert(".txt file, PLEASE!!!")
        }
    }

    function getFileExtension(filename) {
        return filename.split('.').pop();
    }

    $('#result').click(function (event) {
        event.preventDefault()
        let enteredText = "$";

        enteredText += document.getElementById("exampleFormControlTextarea1").value;
        enteredText += "$";

        enteredText = enteredText.replace(/\n/g, "\$ <br/> \$");
        let y = $('#operator').val();
        let x = $("#exampleFormControlTextarea1").val()
        if (y === '') {
            alert("Chọn dạng bài toán muốn thực hiện, sau đó nhập bài toán trước khi giải");
        } else {
            // xử lý lấy kết quả và trả về giao diện
            document.getElementById("show").innerHTML = "";
            $.ajax({
                type: "POST",
                url: '/',
                dataType: 'text',
                data: {
                    "type": y,
                    "problem": x,
                    "_token": $("#token").val()
                },
                success: function (text) {

                    text = "$" + text;
                    text = text.replace(/\n/g, "\$ <br/> \$");
                    text = text.replace(/\\noalign{\\medskip}/g, "");
                    console.log(text);
                    text = text.substr(0, text.length - 1);
                    document.getElementById("show").innerHTML = text;
                    MathJax.Hub.Queue(["Typeset", MathJax.Hub, "show"]);
                }
            });

        }

    });

    $("#upfile").on('click', function (event) {
        if ($('#operator').val().length === 0) {
            alert("Vui lòng chọn dạng bài toán!!!")
            event.preventDefault();
        }
    });

    $('.search-form').on('submit', function (e) {
        // e.preventDefault()
        let search = $('#search-select').val();
        $("#operator").val(search);
        setDefaultTextAreaValue();
        return false
    })
</script>
