<?php
namespace Html;
class Table {
  public $title = "";
  public $rows = 0;
  public function info() {
    echo "<p>$this->title has $this->rows rows.</p>";
  }
}

$table = new \Html\Table();
$table->title = "My chair";
$table->rows = 2;
?>

<!DOCTYPE html>
<html>
<body>

<?php
$table->info();
?>

</body>
</html>