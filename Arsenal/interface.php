<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h2>Interface</h2>
        <?php
        interface animal{
            public function makesound();
        }
        class cat implements animal {
            public function makesound(){
                echo "Meow";
                echo "<br>";
            }
        }
        class dog implements animal {
            public function makesound(){
                echo "Woof";
                echo "<br>";
            }
        }
        class mouse implements animal {
            public function makesound(){
                echo "Squeak";
            }
        }

        $cat = new cat();
        $dog = new dog();
        $mouse = new mouse();
        $animal = array($cat,$dog,$mouse);

        foreach ($animal as $animal){
            $animal->makesounSd();
        }
        ?>
    </body>    
</html>