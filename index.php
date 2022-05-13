<?php

class ParentClass{
  public function data() {
    return [];
  }
}

class ChildClass extends ParentClass{

  public function __construct() {
    $temp = 0;
  }

  public function getId() {
    return 1;
  }

  public function country() {
    return "PH";
  }

  public function doing() {

  }
}

$child = new ChildClass();
print $child->country();