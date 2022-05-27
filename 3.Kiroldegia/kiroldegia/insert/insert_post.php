
    <?php
			include("../connect/connect.php");

            $Eizena=$_POST["Eizena"];
            $izena=$_POST["izena"];
            $email=$_POST["email"];
            $herrialdea=$_POST["herrialdea"];
            $pasahitza=$_POST["pasahitza"];

            $serbitzarikoHelbidea = '../argazkiak/Erabiltzaileen_argazkiak';

            $helbideTemporala = 	$_FILES['img']['tmp_name'];
            $argazkiIzena = 		$_FILES['img']['name'];
            $bukaeraHelbidea = 		$serbitzarikoHelbidea.'/'.$argazkiIzena;
            move_uploaded_file($helbideTemporala,$bukaeraHelbidea);


            $link=KonektatuDatuBasera();

            mysqli_query($link,"insert into erabiltzailea values('$Eizena', '$izena','$email','$herrialdea', '$pasahitza','$bukaeraHelbidea')");
        	header("Location:../menua/menua.php");
?>