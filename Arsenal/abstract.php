<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h2>Abstract class</h2>
        <?php
        abstract class car{
            public $name;
            public function __construct($name){
                $this->name = $name;
            }
            abstract public function intro(): string ;       
        } 
        
        class audi extends car {
            public function intro(): string {
                return "Choose German quality ! i'm $this->name!";
            }
        }
        class volvo extends car {
            public function intro(): string {
                return "Proud to be swedish ! i'm $this->name!";
            }
        }
        class citroen extends car {
            public function intro(): string {  
                return "French extravegance ! i'm $this->name!";
            }
        }
        //create object
        $audi = new audi("audi");
        echo $audi->intro();
        echo "<br>";

        $volvo = new volvo("volvo");
        echo $volvo->intro();
        echo "<br>";

        $citroen = new   citroen("citroen");
        echo $citroen->intro();
        ?>
     </body> 
</html>