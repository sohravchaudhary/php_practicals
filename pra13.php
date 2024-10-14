<?php
abstract class Car
{
public $name;
public function __construct($name) {
$this->name=$name; }
abstract public function intro():string; }
class Honda extends Car
{
public function intro() : string
{
return "Choose Indian Quality ! I'm an $this->name ";
} }
class Toyota extends Car
{
public function intro(): string
{
return "Proud to be Indian ! I'm a $this->name!";
} }
class Mahindra extends Car
{
public function intro(): string
{
return "Indian also likes a $this->name";
} }
$honda = new Honda("Honda"); echo $honda->intro();
echo "<br>";
$toyota=new Toyota("Toyota"); echo $toyota->intro();
echo "<br>";
$mahindra = new Mahindra("Mahindra"); echo $mahindra->intro();
?>