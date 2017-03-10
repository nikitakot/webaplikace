<!>
<HTML>
<BODY>
<?php
$file = "guestbook.txt";
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];
$msg = stripslashes($msg);
$email = stripslashes($email);
$name = stripslashes($name);
$msg = str_replace("<", "&lt;", $msg);
$msg = str_replace("\n", "<br>", $msg);
$email = str_replace("<", "&lt;", $email);
$email = str_replace("\n", "<br>", $email);
$name = str_replace("<", "&lt;", $name);
$name = str_replace("\n", "<br>", $name);

if (empty($email) || empty($name) || empty($msg)) {
    echo "<h3>all fields are requered</h3>";
} else {
    file_put_contents($file, '

<BR>
Name: ' . $name . '<BR>
Email: <a href="mailto:' . $email . '">' . $email . '</a><BR>
Message: ' . $msg . '<BR>
', FILE_APPEND);
    echo '<p align="center">dik ' . $name . ' za recenzi</p>';
}
?>
<p align="center"><a href="index.php">zpet na  guestbook</a></p>
</BODY>
</HTML>
