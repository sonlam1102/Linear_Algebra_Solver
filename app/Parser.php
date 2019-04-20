<?php

namespace App;


class Parser
{
    private $objects = [
        "Matran" => "MATRAN",
        "Hephuongtrinh" => "HEPHUONGTRINH",
        "Vector" => "VECTOR"
    ];

    private $problem = [
        "Hang" => 1,
        "Nghichdao" => 2,
        "Cong" => 3,
        "Tru" => 4,
        "Nhan" => 5,
        "DinhThuc" => 6,
        "PhuongTrinhMaTran" => 7,
        "NghiemHePhuongTirnh" => 8
    ];

    private $variables = ["A", "B", "C", "D", "E", "F", "G"];   # Các biến gán cho đối tượng
    private $operators = ["+", "*"];                            # Các toán tử

    protected $ob = [];     # Tập O
    protected $facts = [];  # Tập F
    protected $goal = [];   # Tập G

    function __construct() {

    }

    # Tách ra từng vế nếu như nhập vào dạng biểu thức
    public function expression($input) {
        $arr = [];
        foreach ($this->operators as $val) {

            $arr = explode($val, $input, -1);

            if (!empty($arr)) {
                return explode($val, $input);
            }
        }
        return $arr;
    }

    public function parse($input) {
        $count = 0;

        $expr = $this->expression($input);

        //Neu nhu nhap vao mot bieu thuc
        if (!empty($expr)) {
            foreach ($expr as $v) {
                foreach ($this->objects as $key => $value) {
                    $k = strpos($v, $key);
                    if ($k !== false) {
                        array_push($this->ob, "[".$this->variables[$count].","."\"".$value."\""."]");
                        $count = $count + 1;
                    }
                }
            }
        }
        # Nhập vào đối tượng bình thường
        else {
            foreach ($this->objects as $key => $value) {
                $k = strpos($input, $key);
                if ($k !== false) {
                    array_push($this->ob, "[".$this->variables[$count].","."\"".$value."\""."]");
                    $count = $count + 1;
                }
            }
        }
        dd($this->ob);
    }
}

