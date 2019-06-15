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
            "name": "Độc lập tuyến tính",
            "type": "Độc lập tuyến tính"
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
        case "Độc lập tuyến tính":
            console.log(1);
            document.getElementById("exampleFormControlTextarea1").innerHTML =
                "KGVector([3, -4, 1, 7], [-2, 6, 8, -1], [-13, 24, 13, -23]);";
            break;

        // case "doi_co_so":
        case "Ma trận đổi cơ sở":
            console.log(1);
            document.getElementById("exampleFormControlTextarea1").innerHTML =
                "KGVector([-1, 1, 5, 0], [2, -5, -4, 1], [-3, 0, -2, 4]);\nKGVector([-1, 7, 16, -5], [11, -17, 3, -4], [-19, 13, 15, 14]);";
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