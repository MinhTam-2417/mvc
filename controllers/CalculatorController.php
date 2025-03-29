<?php
class Calculator
{
    private $a;
    private $b;
    private $pt;

    // hàm khởi tạo
    public function __construct($a, $b, $pt)
    {
        $this->a = $a;
        $this->b = $b;
        $this->pt = $pt;
    }
    function pheptinh(){
        switch ($this->pt){
            case '+': return $this->a + $this->b;
            case '-': return $this->a - $this->b;
            case '*': return $this->a * $this->b;
            case '/': return ($this->b!=0) ? $this->a / $this->b : "không thể chia cho 0";
        }
    }
}

class CalculatorController
{
    public function index()
    {
        require_once PATH_VIEW . 'calculator.php';
    }
    public function Calculator()
    {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $pt = $_POST['pt'];

        $calc = new Calculator($a, $b, $pt);
        $result = $calc->pheptinh();

        echo "Kết quả: " . $result;

        // require_once PATH_VIEW . 'result.php';
    }

}

?>