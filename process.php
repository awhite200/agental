<?php
session_start();
include ("dbqry.php");
include ("connection.php");
$Obj = new easyagent();

if (get_magic_quotes_gpc())
  {
  function stripslashes_deep($value)
           {
		    $value = is_array($value) ?
			array_map('stripslashes_deep' , $value) :
			stripslashes($value);
			return $value;
           }
$_POST = array_map('stripslashes_deep', $_POST);
$_GET = array_map('stripslashes_deep', $_GET);
$_COOKIE = array_map('stripslashes_deep', $_COOKIE);
$_REQUEST = array_map('stripslashes_deep', $_REQUEST);
$_FILES = array_map('stripslashes_deep' , $_FILES);
}
 if(isset($_POST['password']))
 {
  $name = mysqli_real_escape_string($link, $_POST['name']);
  echo json_encode(array('status'=>'success','message'=>'Full name is '.$name));
 }
 else
 {
 echo json_encode(array('status'=>'error','message'=>'I am not working!'));
 }
?>
