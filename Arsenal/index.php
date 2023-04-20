<html>
    <head>
        <title>Employee Details</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" id="font-awesome-style-css" href="http://phpflow.com/code/css/bootstrap3.min.css" type="text/css" media="all">
        <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.9/css/jquery.dataTables.min.css"/>
	    <script type="text/javascript" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
    <div class="container">
      <div class="">
        <h1>Employee Data Table</h1>
        <div class="">
		<table id="employee_grid" class="display" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>id</th>
                <th>First Name</th>
			    <th>Last Name</th>
                <th>Email</th>
                <th>City</th>
                <th>Reg. Date</th>
            </tr>
        </thead>
        </table>
    </div>
    </div>
</div>

<script type="text/javascript">
    $( document ).ready(function(){
        $('#employee_grid').DataTable({
		    "bProcessing": true,
            "serverSide": true,
            "ajax":{  
                url :"response.php", 
                type: "post", 
                error: function(){
                    $("#employee_grid_processing").css("display","none");
                }
            }
        });   
    });
</script>
</head>
</html>
