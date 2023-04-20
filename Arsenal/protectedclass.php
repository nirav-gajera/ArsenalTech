<html>
    <body>
        <h2>Protected Class.</h2>
        <?php
        class add{
            protected $a = 70;
            protected $b = 30;

            protected function addition(){
                echo "The sum is ", $this->a + $this->b;
            }
        }
        /* child class*/
        class sub extends add{
            function subtract(){
                $this->addition();
                echo ", and the difference is ", $this->a - $this->b; 
            }
        }
        
        $obj = new sub;
        $obj->subtract();
        ?>
    </body>
</html>