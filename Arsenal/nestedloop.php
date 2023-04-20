<html>
<head>
    <style>
        table, tr, td {
        border:2px solid blue;
		text-align: center;
		height: 30px;
        }
    </style>
</head>
<body>
<h2>Nested For Loop</h2>
    <table>
        <?php 
        for($row=1; $row<=7; $row++){
            echo "<tr>";
            for($col=1; $col<=7; $col++){
                echo "<td>".$row*$col."</td>";   
            }
            echo "</td>";
        }
        ?>
    </table>
</body>
</html>