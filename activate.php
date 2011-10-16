<title>Activation</title>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
if (isset($_GET['x'])) {
    $x = (int) $_GET['x'];
} else {
    $x = 0;
}
if (isset($_GET['y'])) {
    $y = $_GET['y'];
} else {
    $y = 0;
}
 
if ( ($x> 0) && (strlen($y) == 32)) {
 
    require_once ('mysql_connect.php');
    $query = "UPDATE users SET active=NULL WHERE (id=$x AND active='" . $y . "') LIMIT 1";  
    $result = mysql_query($query);
   
    if (mysql_affected_rows() == 1) {
        echo "<h3>Your account is now active. You may now log in.</h3>";
    } else {
        echo '<p><font color="red" size="+1">Your account could not be activated. Please re-check the link or contact the system administrator.</font></p>';
    }
 
    mysql_close();
 
}
else {
 
    echo '<b>Activation link not valid!</b>';
 
}
?>