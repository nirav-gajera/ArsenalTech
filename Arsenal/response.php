
<?php 
	include_once("connection.php");
	$params = $columns = $totalRecords = $data = array();
    $params = $_REQUEST;

	$columns = array( 
		0 =>'id',
		1 =>'firstname', 
		2 => 'lastname',
		3 => 'email',
        4 => 'city',
        5 => 'reg_date',
	);

	$where = $sqlTot = $sqlRec = "";
	if( !empty($params['search']['value']) ){   
		$where .=" WHERE ";
		$where .=" ( id LIKE '".$params['search']['value']."%' ";    
		$where .=" OR firstname LIKE '".$params['search']['value']."%' ";
        $where .=" OR lastname LIKE '".$params['search']['value']."%' ";
        $where .=" OR email LIKE '".$params['search']['value']."%' ";
        $where .=" OR city LIKE '".$params['search']['value']."%' ";
		$where .=" OR reg_date LIKE '".$params['search']['value']."%' )";
	}
	$sql = "SELECT * FROM employee";
	$sqlTot .= $sql;
	$sqlRec .= $sql;
	
	if(isset($where) && $where != '') {
        $sqlTot .= $where;
		$sqlRec .= $where;
	}


 	$sqlRec .=  " ORDER BY ". $columns[$params['order'][0]['column']]."   ".$params['order'][0]['dir']."  LIMIT ".$params['start']." ,".$params['length']." ";

	$queryTot = mysqli_query($conn, $sqlTot) or die("database error:". mysqli_error($conn));

	$totalRecords = mysqli_num_rows($queryTot);

	$queryRecords = mysqli_query($conn, $sqlRec);

	while( $row = mysqli_fetch_row($queryRecords) ) { 
		$data[] = $row;
	}	

	$json_data = array(
			"draw"            => intval( $params['draw'] ),   
			"recordsTotal"    => intval( $totalRecords ),  
			"recordsFiltered" => intval($totalRecords),
			"data"            => $data   
			);

	echo json_encode($json_data); 
?>
	