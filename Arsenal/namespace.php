<?php
namespace Code\Html;
class table{
    public $title = "";
    public $numRow = 0;
    public function message(){
        echo "<p> Table '{$this->title}' has '{$this->numRow}' rows</p>";
    }
}
$table = new table;
$table->title = "My Table";
$table->numRow = 10;
?>
<html>
    <body>
        <h2>Namespace</h2>
        <?php
        $table->message();
        ?>
    </body>
</html>