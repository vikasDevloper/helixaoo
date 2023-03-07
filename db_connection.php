<?php
class DatabaseClass  
{  
    private $host = "172.18.0.14"; // your host name  
    private $username = "root"; // your user name  
    private $password = "root"; // your password  
    private $db = "yashi_db"; // your database name  
    public  
    function __construct()  
    {  
        mysqli_connect($this->host, $this->username, $this->password) or die(mysql_error("database"));  
        mysqli_select_db($this->db) or die(mysql_error("database"));  
    }  
    // this method used to execute mysql query  
    protected  
    function query_executed($sql)  
    {  
        $c = mysql_query($sql);  
        return $c;  
    }  
    public  
    function get_rows($fields, $id = NULL, $tablename = NULL)  
    {  
        $cn = !emptyempty($id) ? " WHERE $id " : " ";  
        $fields = !emptyempty($fields) ? $fields : " * ";  
        $sql = "SELECT $fields FROM $tablename $cn";  
        $results = $this->query_executed($sql);  
        $rows = $this->get_fetch_data($results);  
        return $rows;  
    }  
    protected  
    function get_fetch_data($r)  
    {  
        $array = array();  
        while ($rows = mysqli_fetch_assoc($r))  
        {  
            $array[] = $rows;  
        }  
        return $array;  
    }  
}  

?>