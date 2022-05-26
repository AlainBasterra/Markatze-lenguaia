<?php
function KonektatuDatuBasera()
{

	if (!($konexioa = mysqli_connect("localhost", "root", ""))) {
		echo "There is an error connecting the DB.";
		exit();
	}


	if (!mysqli_select_db($konexioa, "kiroldegia")) {


		echo "There is an error selecting the DB.";
		exit();
	}

	return $konexioa;
}
