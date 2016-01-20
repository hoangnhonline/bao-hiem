<?php
//ini_set('display_errors', '1');
if(!isset($_SESSION)){
    session_start();    
}
class Home {

    function __construct() {
        if($_SERVER['SERVER_NAME']=='baohiem.dev'){
            mysql_connect('localhost', 'root', '') or die("Can't connect to server");
               mysql_select_db('baohiem') or die("Can't connect database");
        }else{
			mysql_connect('mysql.onehost.vn', 'thietken_baohiem', 'baohiem!@#') or die("Can't connect to server");
			mysql_select_db('thietken_baohiem') or die("Can't connect database");  
        }
        mysql_query("SET NAMES 'utf8'") or die(mysql_error());
    }
    function processData($str) {
        $str = trim(strip_tags($str));
        if (get_magic_quotes_gpc() == false) {
            $str = mysql_real_escape_string($str);
        }
        return $str;
    }
    
    function changeTitle($str) {
        $str = $this->stripUnicode($str);
        $str = str_replace("?", "", $str);
        $str = str_replace("&", "", $str);
        $str = str_replace("'", "", $str);
        $str = str_replace("  ", " ", $str);
        $str = trim($str);
        $str = mb_convert_case($str, MB_CASE_LOWER, 'utf-8'); // MB_CASE_UPPER/MB_CASE_TITLE/MB_CASE_LOWER
        $str = str_replace(" ", "-", $str);
        $str = str_replace("---", "-", $str);
        $str = str_replace("--", "-", $str);
        $str = str_replace('"', '', $str);
        $str = str_replace('"', "", $str);
        $str = str_replace(":", "", $str);
        $str = str_replace("(", "", $str);
        $str = str_replace(")", "", $str);
        $str = str_replace(",", "", $str);
        $str = str_replace(".", "", $str);
        $str = str_replace("?", "", $str);
        $str = str_replace("'", "", $str);
        $str = str_replace('"', "", $str);
        $str = str_replace("%", "", $str);
        for($i = 0;$i<=strlen($str);$i++){
            $str = str_replace(" ", "-", $str);
            $str = str_replace("--", "-", $str);
        }

        return $str;
    }
    function throw_ex($e){
        throw new Exception($e);
    }
    function insert($table,$arrParams){
        $column = $values = "";

        foreach ($arrParams as $key => $value) {
            $value = addslashes($value);
            $column .= "$key".",";
            $values .= "'".$value."'".",";
        }
        $column = rtrim($column,",");
        $values = rtrim($values,",");
        $sql = "INSERT INTO ".$table."(".$column.") VALUES (".$values.")";
        mysql_query($sql) or die(mysql_error().$sql);
        $id = mysql_insert_id();
        return $id;
    }
    function update($table,$arrParams){
        $str = "";
        foreach ($arrParams as $key => $value) {
            $str.= $key."= '".$value."',";
        }
        $str = rtrim($str,",");        
        $sql = "UPDATE ".$table." SET ".$str." WHERE id = ".$arrParams['id'];
        mysql_query($sql) or die(mysql_error().$sql);
    }
}