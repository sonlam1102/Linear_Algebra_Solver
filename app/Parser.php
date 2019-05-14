<?php

namespace App;


use App\Console\RunCommand;

class Parser
{
    private $objects = [
        "Matran" => "MATRAN",
        "Hephuongtrinh" => "HEPHUONGTRINH",
        "Vector" => "VECTOR"
    ];

    private $problem = [
        "Phép cộng ma trận" => 1,
        "Phép trừ ma trận" => 2,
        "Phép nhân ma trận" => 3,
        "Định thức ma trận" => 4,
        "Hạng ma trận" => 5,
        "Ma trận nghịch đảo" => 6,
        "Phương trình ma trận" => 7,
        "Hệ phương trình tuyến tính" => 8,
        "Độc lập tuyến tính,phụ thuộc tuyến tính" => 9,
        "Ma trận đổi cơ sở" => 10
    ];

    private $variables = ["A", "B", "C", "D", "E", "F", "G"];   # Các biến gán cho đối tượng

    protected $ob = [];     # Tập O
    protected $facts = [];  # Tập F
    protected $goal = [];   # Tập G

    private $input = null;
    private $type = null;

    function __construct($input, $type) {
        $this->input = $input;
        $this->type = $type;
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

    public function parse() {
        $count = 0;

        $temp_array = explode(";", $this->input);

        $curr_var_ob = [];

        foreach ($temp_array as $val) {
            foreach ($this->objects as $key => $value) {
                $k = strpos($val, $key);
                if ($k !== false) {
                    $var = $this->variables[$count];

                    $fact_arr = explode($key, $val);

                    if ($key == 'Matran') {
                        array_push($this->ob, "[".$var.","."\"".$value."\""."]");
                        array_push($this->facts, $var.".K=Array(".$fact_arr[1].")");

                        array_push($curr_var_ob, $var);
                    }
                    elseif ($key == 'Hephuongtrinh') {
                        $var = $this->variables[$count+2];
                        array_push($this->ob, "[".$var.","."\"".$value."\""."]");
//                        dd($fact_arr);
                        $htp_facts_arr = explode(",{", $fact_arr[1]);

                        array_push($this->facts, $var.".K=".ltrim($htp_facts_arr[0], "("));
                        array_push($this->facts, $var.".p={".rtrim($htp_facts_arr[1], ")"));

                        array_push($curr_var_ob, $var);
                    }

                    $count = $count + 1;
                }
            }
        }

//        dd($this->facts);

        if ($this->problem[$this->type] == 1) {
            array_push($this->ob, "[".$this->variables[count($curr_var_ob)].","."\""."MATRAN"."\""."]");
            array_push($this->facts, $this->variables[count($curr_var_ob)]."=".$this->variables[count($curr_var_ob)-2]."+".$this->variables[count($curr_var_ob)-1]);
            array_push($this->goal, $this->variables[count($curr_var_ob)]."."."K");
        }
        elseif ($this->problem[$this->type] == 2) {
            array_push($this->ob, "[".$this->variables[count($curr_var_ob)].","."\""."MATRAN"."\""."]");
            array_push($this->facts, $this->variables[count($curr_var_ob)]."=".$this->variables[count($curr_var_ob)-2]."-".$this->variables[count($curr_var_ob)-1]);
            array_push($this->goal, $this->variables[count($curr_var_ob)]."."."K");
        }
        elseif ($this->problem[$this->type] == 3) {
            array_push($this->ob, "[".$this->variables[count($curr_var_ob)].","."\""."MATRAN"."\""."]");
            array_push($this->facts, $this->variables[count($curr_var_ob)]."=".$this->variables[count($curr_var_ob)-2]."*".$this->variables[count($curr_var_ob)-1]);
            array_push($this->goal, $this->variables[count($curr_var_ob)]."."."K");
        }
        elseif ($this->problem[$this->type] == 4) {
            array_push($this->goal, "DINHTHUC(".$this->variables[count($curr_var_ob)-1].")");
        }
        elseif ($this->problem[$this->type] == 5) {
            array_push($this->goal, "HANG(".$this->variables[count($curr_var_ob)-1].")");
        }
        elseif ($this->problem[$this->type] == 6) {
            array_push($this->goal, "NGHICHDAO(".$this->variables[count($curr_var_ob)-1].")");
        }
        elseif ($this->problem[$this->type] == 8) {
            array_push($this->goal, "NGHIEM(".$curr_var_ob[count($curr_var_ob)-1].")");
        }

//        var_dump($this->ob);
//        var_dump($this->facts);
//        var_dump($this->goal);
//
//        dd(1);
    }

    public function make() {
        $this->parse();
        $data = "restart;path := currentdir(); example_path := cat(path, \"/\"); knowledge_path := cat(cat(path, \"/Knowledge/\")); engine_path := cat(path, \"/COKB.mla\");";
        $data = $data."march('open', engine_path);Init();ReadCOKB(knowledge_path);";

        $data = $data."Ob:={".implode(",", $this->ob)."};";

        $data = $data."F:={".implode(",", $this->facts)."};";
        $data = $data."G:={".implode(",", $this->goal)."};";

        $data = $data."Sol := GiaiBaiToan(Ob, F, G, false);";
        $data = $data."XuatLoiGiai(Sol, cat(example_path, \"Ketqua.txt\"));";


        $file = fopen("maple.mpl",'w');
        fwrite($file, $data);
        fclose($file);
    }

    public function execute() {
        $this->make();

        $run_bat = new RunCommand('maple.mpl');

        try {
            if (file_exists('Ketqua.txt')) {
                unlink('Ketqua.txt');
            }
            $run_bat->execute();
            return file_get_contents('Ketqua.txt');
        }
        catch (\Exception $e ) {
            return "Hiện không thể giải bài toán này";
        }
    }
}

