<?php
class Employee
{
public $name="Ajit"; protected $profile="HR"; private $salary=50000;
public function show()
{
echo "Employee Name :".$this->name."</br>"; echo "Profile :".$this->profile."</br>";
echo "salary :".$this->salary."</br>";
} }
class Employee2 extends Employee {
function display()
{
echo "welcome :".$this->name."</br>"; echo "profile :".$this->profile."</br>"; // echo "salary :".$this->salary."</br>";
} }
$obj=new Employee2; $obj->display();
?>