<!-- 
# static properties - static properties can be called without creating object/instance.
 -->
<?php
//  1* access static properties - 
//  class Office{
//    public static $employees = 10;

//  }

// Office::$employees;

// 2* call/access from a method in same class - using self keyword/ class name also be work
// class Office
// {
//     public static $employees = 10;
//     public static function displayEmployeeNo()
//     {
//         // here we use self keyword
//         echo "Employees are = ", self::$employees;
//     }
// }
// Office::displayEmployeeNo();

// 3* call from child class - 
class Office
{
    public static $employees = 10;
    public static function displayEmployeeNo()
    {
        // here we use self keyword
        echo "Employees are = ", self::$employees;
    }
}

class Employees extends Office{
    public function display(){
        echo "Employees are ", parent::$employees;
    }
}
// one way
echo Employees::$employees, '<br>';
// 2nd way
$emp = new Employees();
echo $emp->display();
?>