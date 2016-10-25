<?php
require_once "Basa.php";
class ChildOfbush extends Bush {
function __construct($a,$b) {
$this->a=$a;
$this->b=$b;
}
function fase (){
$this->c=$this->a*$this->b;
}
};
?>