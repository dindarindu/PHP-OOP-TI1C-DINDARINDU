<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function prefixName($name) {
    if ($name == "Dinda Rindu") {
      $prefix = "Ms.";
    } elseif ($name == "Dinda Rindu") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "$prefix $name";
  }
}

$class = new ChildClass;
echo $class->prefixName("Dinda Rindu");
echo "<br>";
echo $class->prefixName("Dinda Rindu");
echo "<br>";
echo $class->prefixName("Dinda Rindu");
?>