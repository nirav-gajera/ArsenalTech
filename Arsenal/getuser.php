<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                height: 10%;
                width: 80%;
                border-collapse: collapse;
            }

            table, td, th {
                border: 3px solid black;
                padding: 4px;
            }

            th {
                text-align: left;
                background-color: #ccffcc;  
            }
        </style>
    </head>
<body>

<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','','blog');
    if (!$con) {
    die('Could not connect : ' . mysqli_error($con));
    }

    mysqli_select_db($con,"blog");
    $sql="SELECT * FROM users WHERE id = '".$q."'";
    $result = mysqli_query($con,$sql);

    echo "<table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Created Date</th>
            </tr>";
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['created_at'] . "</td>";
        echo "</tr>";
    }
        echo "</table>";
        mysqli_close($con);
?>
</body>
</html>