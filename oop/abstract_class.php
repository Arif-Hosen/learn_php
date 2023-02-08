<?php
// Abstract class - is a class defined with abstract keyword and must have atleast one abstract method, which method also declare with abstract keyword. This method  has only method name, haven't any method body, there are no task. Child class must have parent class's abstract method and body, it means the method have some task.
/* when child class inherited from a abstract class- the rules are-
1. must redeclare same name of parent class's abstract method
2. method have same or less restricted access modifier
3. number of parameter must be same as parent abstract class. but optional parameter can be use
*/ 

abstract class Employee{
    public $name;
    protected $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }
    
    abstract protected function information($phone, $email);
}

class Manager extends Employee{
    // inherited abstract class's method - child method has optional parameter
    public function information($phone, $email, $age = 20){
        echo 'Employee is Manager, Name = ', $this->name, ' Salary = ', $this->salary, ' PHone =',$phone, ' email',$email," $age",'<br>';
    }
}
class Developer extends Employee{
    // inherited abstract class's method
    public function information($phone, $email){
        echo 'Employee is Developer, Name = ', $this->name, ' Salary = ', $this->salary, ' PHone =',$phone, ' email',$email, '<br>';
    }
}

$raju = new Manager('Raju',20000);
$raju->information(017, 'abc.mail');

$raihan = new Developer('Raihan',30000);
$raihan->information(10111119,'z.mail');
?>