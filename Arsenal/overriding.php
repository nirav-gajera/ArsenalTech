<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <h2> Overriding Inheritance Method </h2>
        <?php
        class fruit {
            public $name;
            public $color;
            public function __construct($name,$color){
            $this->name =  $name;
            $this->color = $color;
            }
            public function intro(){
                echo "The fruit is {$this->name} and color is {$this->color}";
            }
        }

        class strawberry extends fruit {
            public $weight;
            public function __construct($name,$color,$weight) {
                $this->name =  $name;
                $this->color = $color;
                $this->weight = $weight;
            }
            public function intro() {
                echo "The fruit is {$this->name} , color is {$this->color} and weight is {$this->weight}";
                }
        }
        $strawberry = new strawberry("strawberry","red","50");
        $strawberry->intro();
        ?>
    </body>
</html>