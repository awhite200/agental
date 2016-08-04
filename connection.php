<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
   $link = mysqli_connect('localhost','root','');
if (!$link)
    {
    $output = 'Unable to connect to database server.';
    include 'error.html.php';
	exit();
    }
if(!mysqli_set_charset($link, 'utf8'))
    {
    $output = 'Unable to set database connection encoding.';
    include 'error.html.php';
	exit();
    }
if (!mysqli_select_db($link, 'easyagentproperty'))
   {
   $output = 'Unable to locate database establishement .';
   include 'error.html.php';
   exit();
 }
?>




