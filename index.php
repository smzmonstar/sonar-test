<?php

define('RUN', TRUE);

class ParentClass{
  public function data() {
    $success = true;
    return [];
  }
}

class ChildClass extends ParentClass{

  public function __construct() {
    $temp = 0;
    $ctr = 12;
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