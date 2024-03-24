<div style="text-align:center; margin-top: 50px;">
<?php
include('connect.php');
$dsdas=$_POST['username'];
$ans=$_POST['answer'];
$sadsdsd = $db->prepare("SELECT count(*) FROM users WHERE username= :k AND answer= :l");
	$sadsdsd->bindParam(':k', $dsdas);
	$sadsdsd->bindParam(':l', $ans);
	$sadsdsd->execute();
	$rowaas = $sadsdsd->fetch(PDO::FETCH_NUM);
	$wapakpak=$rowaas[0];
?>
<?php
if ($wapakpak != 0) {
$resultas = $db->prepare("SELECT * FROM users WHERE username= :a AND  answer= :b");
	$resultas->bindParam(':a', $dsdas);
	$resultas->bindParam(':b', $ans);
	$resultas->execute();
	for($i=0; $rowas = $resultas->fetch(); $i++){
	?>
Your Password is : <?php echo $rowas['pss']; ?>
<br /><br /><br /><br /><br />
<p> Powered by Abba Gana</p>
<?php
}
}
if ($wapakpak == 0) {
echo 'Incorrect answer...';
}
?>
</div>