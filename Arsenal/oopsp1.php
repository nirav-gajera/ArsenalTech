<html>
    <body>
        <h2>Oops Program 1</h2>
        <?php
        class fruit{
            public $name;
            public $color;

            function set_name($name){
                $this->name = $name;
            }
            function get_name(){
                return $this->name;
            }
            function set_color($color){
                $this->color = $color;
            }
            function get_color(){
                return $this->color;
            }
        }
        
        $apple = new fruit();
        $banana =  new fruit();
        $apple->set_name("Apple");
        $banana->set_name("Banana");
        $apple->set_color("Red");
        $banana->set_color("Yellow");
        echo "Name: ".$apple->get_name();
        echo "<br>";
        echo "Color: ".$apple->get_color();
        echo "<br>";
        echo "<br>";
        echo "Name: ".$banana->get_name();
        echo "<br>";
        echo "Color: ".$banana->get_color();
        ?>
    </body>
</html>