<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Simple Multiple Form Upload</title>
</head>
<body>

<?php
if(isset($_SESSION['error'])){
	echo '<div style="color:#d00;">'.$_SESSION['error'].'</div>';
	unset($_SESSION['error']);
}
if(isset($_SESSION['success'])){
	echo '<div style="color:#080;">'.$_SESSION['success'].'</div>';
	unset($_SESSION['success']);
}

?>
<strong>Upload File Disini</strong>
<form action="proses.php" method="post" enctype="multipart/form-data">
	<input type="file" name="upload[]" accept="image/*" multiple="multiple">
	<button type="submit">Upload</button>
</form>


<br>
<br>
</body>
</html>
