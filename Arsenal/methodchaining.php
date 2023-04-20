<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h2>Method Chaining</h2>
        <?php
        class employee{
            private $name = "";
            private $eid = "";
            private $position = "";
 
            public function setName($name){
                $this->name = $name;
            }
            public function seteid($eid){
                $this->eid = $eid;
            }
            public function setposition($position){
                $this->position = $position;
            }
            public function getempInfo(){
                echo "<b> Employee Info :</b><br> 
                    Name is: ".$this->name." <br> 
                    EmployeeID is: ".$this->eid."<br> 
                    Position is: ".$this->position;
            }
        }
 
        $employee = new employee();
        $employee->setName("Nirav");
        $employee->seteid("1257");
        $employee->setposition("Trainee");
        $employee->getempInfo();
        
        ?>
    </body>
</html>
