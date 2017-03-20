<?php
	
	function getAll($tbl) {
		require_once('connect.php');
		//echo $tbl;
		$queryAll = "SELECT * FROM {$tbl} order by photos_id DESC";
		//echo $queryAll;
		$runAll = mysqli_query($link, $queryAll);
		
		if($runAll){
			return $runAll;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
	}

	function getEntry($tbl) {
		require_once('connect.php');
		//echo $tbl;
		$queryAll = "SELECT * FROM {$tbl} order by blog_id DESC";
		//echo $queryAll;
		$runAll = mysqli_query($link, $queryAll);
		
		if($runAll){
			return $runAll;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
	}

	function getSingle($tbl, $col, $id) {
		require_once('connect.php');
		
		$querySingle = "SELECT * FROM {$tbl} WHERE {$col}={$id}";
		
		$runSingle = mysqli_query($link, $querySingle);
		
		if($runSingle){
			return $runSingle;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
	}
	
	function filterType($tbl1, $tbl2, $tbl3, $col1, $col2, $col3, $filter) {
		require_once('connect.php');
		//$tbl1, $tbl2, $tbl3, $col1, $col2, $col3, $filter
		
		/*$tbl1 = "tbl_movies";
		$tbl2 = "tbl_cat";
		$tbl3 = "tbl_L_mc";
		$col1 = "movies_id";
		$col2 = "cat_id";
		$col3 = "cat_name";
		$filter = "action";*/
		
		$queryFilter = "SELECT * FROM {$tbl1}, {$tbl2}, {$tbl3} WHERE {$tbl1}.{$col1} = {$tbl3}.{$col1} AND {$tbl2}.{$col2} = {$tbl3}.{$col2} AND {$tbl2}.{$col3} = '{$filter}'";
		
		//echo $filterQuery;
		
		$runFilter = mysqli_query($link, $queryFilter);
		
		if($runFilter){
			return $runFilter;	
		}else{
			$error =  "There was an error accessing this information.  Please contact your admin.";
			return $error;
		}
		
	}

?>