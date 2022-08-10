<?php
Class Student
{
    private $name;
    public $USN;
    public $address;
    public $avg;
    function __construct($n, $usn, $add, $avg)
    {
        $this->name    = $n;
        $this->USN     = $usn;
        $this->address = $add;
        $this->avg     = $avg;
    }
    protected function display()
    {
        echo $this->name . "<br>";
    }
}
class FeeDetails extends Student
{
    private $sports;
    private $academic;
    function __construct($n, $usn, $add, $avg, $s, $ac)
    {
        $this->sports   = $s;
        $this->academic = $ac;
        parent::__construct($n, $usn, $add, $avg);
    }
    public function total()
    {
        $sum = ($this->sports) + ($this->academic);
        echo "total fee is $sum";
    }
    public function display()
    {
        parent::display();
        $this->total();
    }
}
$f1 = new FeeDetails("Sajeev", "1VA15CS013", "Bangalore", 66, 25000, 3000);
$f1->display();
?>