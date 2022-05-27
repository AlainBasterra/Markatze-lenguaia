
    <?php
	include("../connect/connect.php");
	$link=KonektatuDatuBasera();


	$email = $_GET["erabiltzailea"];

			
	$link=KonektatuDatuBasera();
	mysqli_query($link,"delete from erabiltzailea where email = '$email'");
	header("Location:./delete.php");

?>

