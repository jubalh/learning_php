<?php
if (isset($_POST['usrname'])) {
	echo "Hello " . $_POST['usrname'];
} else {
	include 'form.html.php';
}?>
