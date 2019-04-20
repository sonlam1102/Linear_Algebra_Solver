<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="http://sheaves.github.io/images/favicons/android-icon-192x192.png"/>

        <title>Đại Số Tuyến Tính</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script
                src="https://code.jquery.com/jquery-3.4.0.min.js"
                integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
                crossorigin="anonymous">
        </script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
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
                    <div class="col-sm-4">
                        <img class="mr-10" src="http://utc2.edu.vn//uploads/img/images/logo.png"/>
                    </div>
                    <div class="col-sm-6">
                        <label class="mr-top-20" style="font-size:22px;text-align: center; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">CHƯƠNG TRÌNH HỖ TRỢ GIẢI CÁC BÀI TẬP <br/> KIẾN THỨC ĐẠI SỐ TUYẾN TÍNH</label>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-expand-lg navbar-cus">
                <a class="navbar-brand" href="#" style="color: #000"><i class="fas fa-home" id ="home"></i></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse text-navbar" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown text-navbar">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Định thức ma trận</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item get-operator operator" href="">Phép cộng ma trận</a>
                          <a class="dropdown-item get-operator operator" href="">Phép trừ ma trận</a>
                          <a class="dropdown-item get-operator operator" href="">Phép nhân ma trận</a>
                          <a class="dropdown-item get-operator operator" href="">Luỹ thừa ma trận</a>
                          <a class="dropdown-item get-operator operator" href="">Ma trận chuyển vị</a>
                          <a class="dropdown-item get-operator operator" href="">Định thức ma trận</a>
                          <a class="dropdown-item get-operator operator" href="">Hạng ma trận</a>
                          <a class="dropdown-item get-operator operator" href="">Ma trận nghịch đảo</a>
                          <a class="dropdown-item get-operator operator" href="">Phương trình ma trận</a>

                        </div>
                    </li>
                    <li class="nav-item active text-navbar">
                        <a class="nav-link get-operator" href="">Hệ phương trình tuyến tính <span class="sr-only"></span></a>
                    </li>

                    <li class="nav-item dropdown text-navbar">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Không gian vector</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item get-operator operator" href="">Độc lập tuyến tính,phụ thuộc tuyến tính</a>
                          <a class="dropdown-item get-operator operator" href="">Ma trận đổi cơ sở</a>
                          <!--<a class="dropdown-item get-operator operator" href="">Xác định tổ hợp tuyến tính</a>
                          <a class="dropdown-item get-operator operator" href="">Hạng của hệ vector</a>
                          <a class="dropdown-item get-operator operator" href="">Tập sinh không gian tuyến tính</a>
                          <a class="dropdown-item get-operator operator" href="">Cơ sở không gian tuyến tính</a>
                          <a class="dropdown-item get-operator operator" href="">Toạ độ vector</a>
                          <a class="dropdown-item get-operator operator" href="">Tổng và giao không gian con</a> -->

                        </div>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 search-form">
                    <!-- <input class="form-control mr-sm-2" id="search" type="search" placeholder="Search" aria-label="Search"> -->
                    <select class="js-example-basic-single" name="search-select" id="search-select">
                        
                    </select>
                    <button class="btn btn-success my-2 my-sm-0" type="submit" style="margin-left: 10px">Search</button>
                </form>
            </div>
            </nav>
            <div style="margin:10px 50px;">
                <form>
                     <input id="token" value="{{ @csrf_token() }}" hidden>
                     <div class="row justify-content-between">
                        <div class="col-sm-4 border-frm" style="width: 100%;color: blue;">
                            <label class="mr-top-20">Dạng bài toán</label>
                            <input type="text" name="" class="form-control border-input" value="" id="operator" readonly>
                            <div class="file btn btn-success upfile mr-top-20" id="upfile">
                                Upload
                                <input type="file" name="file" class="upfile" id="upfiles" onchange="onFileSelected(event)"/>
                            </div>
                            <textarea class="form-control mr-top-20 border-input" id="exampleFormControlTextarea1" rows="10"></textarea>
                        </div>
                        <div class="col-sm-1">
                            <div class="container">
                                <button class="btn btn-success mr-5" id="result" style="text-align:center"><i class="fas fa-angle-double-right"></i></button>
                            </div>
                            
                        </div>
                        <!-- <textarea class="col-sm-7 border-frm" id="show"> </textarea> --> 
                        <div class="col-sm-7 border-frm" id="show">
                            
                        </div>
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

            $(document).ready(function() {
                //search execute
                let optionsarray = [

                    {
                        "name": "",
                        "type": ""
                    },
                    {
                        "name": "Phép cộng ma trận",
                        "type": "cong"
                    },

                    {
                        "name": "Phép trừ ma trận",
                        "type": "tru"
                    },
                    {
                        "name": "Phép nhân ma trận",
                        "type": "nhan"
                    },
                    {
                        "name": "Luỹ thừa ma trận",
                        "type": "luy_thua"
                    },
                    {
                        "name": "Ma trận chuyển vị",
                        "type": "chuyen_vi"
                    },
                    {
                        "name": "Định thức ma trận",
                        "type": "dinh_thuc"
                    },
                    {
                        "name": "Hạng ma trận",
                        "type": "hang"
                    },
                    {
                        "name": "Ma trận nghịch đảo",
                        "type": "nghich_dao"
                    },
                    {
                        "name": "Phương trình ma trận",
                        "type": "pt_ma_tran"
                    },
                    {
                        "name": "Hệ phương trình tuyến tính",
                        "type": "nghiem_he_pt"
                    },
                    {
                        "name": "Hệ phương trình tuyến tính",
                        "type": "nghiem_he_pt"
                    },
                    {
                        "name": "Độc lập tuyến tính,phụ thuộc tuyến tính",
                        "type": "doc_lap_tt"
                    },
                    {
                        "name": "Ma trận đổi cơ sở",
                        "type": "doi_co_so"
                    },

                ]; 
                let seloption = "";

                $.each(optionsarray,function(i){
                    seloption += '<option value="'+optionsarray[i].type+'">'+optionsarray[i].name+'</option>';
                });

                $('#search-select').append(seloption);
                $('.js-example-basic-single').select2();
            });

            $(".get-operator").click(function(event){
                event.preventDefault();
                $("#operator").val($(this).text());
                // $('#exampleFormControlTextarea1').val("");
                $('div#show').empty();
                $('#exampleFormControlTextarea1').empty();
                console.log($('#exampleFormControlTextarea1').val())
            });

            $(".fa-home").click(function(event){
                event.preventDefault()
                $("#operator").val($(this).text());
                // $('#exampleFormControlTextarea1').val("");
                $('div#show').empty();
                $('#exampleFormControlTextarea1').empty();
                //console.log($('#exampleFormControlTextarea1').val())
            });

            function onFileSelected(event) {
                let selectedFile = event.target.files[0];
                if(getFileExtension(selectedFile.name) && getFileExtension(selectedFile.name) === "txt"){
                    var reader = new FileReader();

                    var result = document.getElementById("exampleFormControlTextarea1");
                    reader.onload = function(event) {
                        result.innerHTML = event.target.result;
                    };

                    reader.readAsText(selectedFile);
              }
              else {
                alert(".txt file, PLEASE!!!")
              }
            }

            function getFileExtension(filename) {
                return filename.split('.').pop();
            }

            $('#result').click(function(event){
                event.preventDefault()
                let enteredText = "$";

                enteredText += document.getElementById("exampleFormControlTextarea1").value;
                enteredText += "$";

                enteredText = enteredText.replace(/\n/g, "\$ <br/> \$");
                let y = $('#operator').val();
                let x = $("#exampleFormControlTextarea1").val();
                if (y === '') {
                alert("Chọn dạng bài toán muốn thực hiện, sau đó nhập bài toán trước khi giải");
                }
                else {
                    // xử lý lấy kết quả và trả về giao diện
                    $.ajax({
                        type: "POST",
                        url: '/',
                        dataType: 'json',
                        data: {
                            "type": y,
                            "problem": x,
                            "_token": $("#token").val()
                        },
                    }).done(function(response) {
                        //xử lý kết quả thêm thì viết ở đây

                        document.getElementById("show").innerHTML = response;
                        MathJax.Hub.Queue(["Typeset",MathJax.Hub,"show"]);
                    });

                    // document.getElementById("show").innerHTML = enteredText;
                    // MathJax.Hub.Queue(["Typeset",MathJax.Hub,"show"]);
                }
                
            });

            $("#upfile").on('click', function(event){
                if($('#operator').val().length===0){
                    alert("Vui lòng chọn dạng bài toán!!!")
                    event.preventDefault();
                }
             });   
                   
            $('.search-form').on('submit', function(e){
                // e.preventDefault()
                var search = $('#search-select').val();
                $("#operator").val(search);
                return false
            })
</script>
