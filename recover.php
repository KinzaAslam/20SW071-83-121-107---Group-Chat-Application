<?php
include('connect.php');
$dsdsss=$_POST['username'];
$sadsdsd = $db->prepare("SELECT count(*) FROM users WHERE username= :h");
	$sadsdsd->bindParam(':h', $dsdsss);
	$sadsdsd->execute();
	$rowaas = $sadsdsd->fetch(PDO::FETCH_NUM);
	$wapakpak=$rowaas[0];
?>
<?php
if ($wapakpak != 0) {
$dsdas=$_POST['username'];
$resultas = $db->prepare("SELECT * FROM users WHERE username= :a");
	$resultas->bindParam(':a', $dsdas);
	$resultas->execute();
	for($i=0; $rowas = $resultas->fetch(); $i++){
	$dsds=$rowas['question'];
	echo ''.$dsds.'
	<center>
<form action="recoverpassword.php" method="POST">
<span style="color: #000000;">Answer</span><br>
<input type="hidden" name="username" value="'.$dsdas.'" /><input type="text" name="answer" value="" /><br><br>
<input type="submit" value="Next" />
<br /><br /><br /><br />
<p>Powered By Abba Gana</p>
</form>';
}
}
if ($wapakpak == 0) {
	echo '<div style="text-align:center; margin-top: 50px;">Registration Number Not Found
	<br>
	<p> if you think this is an error please Contact one of our Excoss or send an email to support@nacoss.cf</p>
	<br>
	Powered By Abba Gana
	</div>';


}
?>

