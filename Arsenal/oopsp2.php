<html>
    <body>
        <h2>Construct, Destruct</h2>
        <?php
        class fruit {
            var $name;
            var $color;

            function __construct($name, $color){
                $this->name = $name;
                $this->color = $color;
                }
            function __destruct(){
                echo "<br>";
                echo "The fruit is {$this->name} and the color is {$this->color}.";
            }
        }
        $apple = new fruit ("Apple", "Red");
        $orange = new fruit ("Orange", "Orange");
        $banana = new fruit ("Banana","Yellow");
        ?>
    </body>
</html>