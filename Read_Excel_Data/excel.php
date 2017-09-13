
 <?php
 define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'excelreader');
 $connection = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
 //include 'db.php'; 
 include 'reader.php';
    	$excel = new Spreadsheet_Excel_Reader();
		echo "connection is created";

            $excel->read('book2.xls');    
 $x=2;
  while($x<=$excel->sheets[0]['numRows']) {
	 $id = isset($excel->sheets[0]['cells'][$x][1]) ? $excel->sheets[0]['cells'][$x][1] : '';
	 $name = isset($excel->sheets[0]['cells'][$x][2]) ? $excel->sheets[0]['cells'][$x][2] : '';
	 $job = isset($excel->sheets[0]['cells'][$x][3]) ? $excel->sheets[0]['cells'][$x][3] : '';
	 $email = isset($excel->sheets[0]['cells'][$x][4]) ? $excel->sheets[0]['cells'][$x][4] : '';
     echo $id." ".$name." ".$job." ".$email;
     
 // Save details
  $sql_insert="UPDATE users_details SET name='$name ',job='$job',email='$email' WHERE id='$id'";
  $result_insert = mysqli_query($connection,$sql_insert) or die('Error: ' . mysqli_error($connection)); 
   $x++;
 }
 echo "Data successfully Inserted";
 mysqli_close($connection);
   ?>    
 