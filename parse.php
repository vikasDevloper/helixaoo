<?php  
include("db_connection.php");  
$obj = new DatabaseClass ();  
$a = $obj-> get_rows (implode(",",array("ID","post_date","post_title")), '' , "tablenane") ; // there are pass two parameters one is table fields and second is table name  
echo "<pre>";  
print_r($a);  
echo "</pre>";  
?>  