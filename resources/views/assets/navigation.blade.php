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
                    <a class="dropdown-item get-operator operator" href="">Độc lập tuyến tính</a>
                    <a class="dropdown-item get-operator operator" href="">Ma trận đổi cơ sở</a>
                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0 search-form" id="frm-search">
            <select class="col-sm-4 js-example-basic-single" name="search-select" id="search-select">

            </select>
            <button class="btn btn-success my-2 my-sm-0" type="submit" style="margin-left: 10px">Search</button>
        </form>
        <button class="btn btn-success my-2 my-sm-0" type="submit" style="margin-left: 10px" data-toggle="modal" data-target="#guideModal">Hướng dẫn</button>
    </div>
</nav>