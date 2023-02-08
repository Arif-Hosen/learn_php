<?php
echo "<h3>Practising Access Modifier</h3>";
class Engineer{
    public $name;
    protected $phone;
    private $salary;

    function __construct($name, $phone, $salary)
    {
        $this->name = $name;
        $this->phone = $phone;
        $this->salary = $name;
    }
    function passingPrtectedData(){
        return $this->phone;
    }

    // protected function
    protected function setName($name){
        $this->name = $name;
    }
}

$engineer1 = new Engineer('Sadek', '0129', 50000);
// public property
echo 'Public Property = ', $engineer1->name ,'<br>';
// echo 'Public Porperty =', $engineer1->phone ,'<br>'; //give error
// echo 'Public Porperty =', $engineer1->salary ,'<br>'; //give error
// accessing protected
echo 'Protected Property = ', $engineer1->passingPrtectedData() ,'<br>';
// accessing protected function
// echo $engineer1->setName("Baker"); // error

?>