<!DOCTYPE html>
<html>
<body>

<?php
function printIterable(iterable $x) {
  foreach($x as $item) {
    echo $item;
  }
}

// Called with an array:
printIterable(["r", "i", "n"]);

// Called with an object:
$iterator = new ArrayIterator(["d", "u", ".p"]);
printIterable($iterator);
?>

</body>
</html>