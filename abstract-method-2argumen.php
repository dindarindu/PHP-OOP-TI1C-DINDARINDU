<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  // The child class may define optional arguments that are not in the parent's abstract method
  public function prefixName($name, $separator = ".", $greet = "Dear") {
    if ($name == "Dinda") {
      $prefix = "Ms";
    } elseif ($name == "Dinda") {
      $prefix = "Ms";
    } else {
      $prefix = "";
    }
    return "$greet $prefix$separator $name";
  }
}

$class = new ChildClass;
echo $class->prefixName("Dinda");
echo "<br>";
echo $class->prefixName("Dinda");
?>