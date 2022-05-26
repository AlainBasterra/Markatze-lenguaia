<head>
    <link rel="STYLESHEET" TYPE="TEXT/CSS" HREF="select.css">
    <title>Kiroldegia</title>

</head>
<?php
// session_start();
// 	$userID = $_SESSION['erabiltzailea'];
// 	$session = $_SESSION['session'];
	include("../connect/connect.php");
	$link=KonektatuDatuBasera();

    $emaitza = mysqli_query($link,"select * from erabiltzailea");
        ?>
    <table>
    <Tr>
    <Th>Erabiltzailea</Th><Th>Izena</Th><Th>emaila</Th><Th>herrialdea</Th><Th>Pasahitza</Th><Th>Argazkia</Th>
    </Tr>
        <?php
        
            while($lerroak = mysqli_fetch_array($emaitza))
            {

                printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td><img src='%s' id='argazkia'></td></tr>",$lerroak["usuario"],$lerroak["izena"],$lerroak["email"],$lerroak["herrialdea"],$lerroak["pasahitza"],$lerroak["argazkia"]);
            } 
        
     ?>
    </table>
    <div style="width:50px;">
        <a href="../menua/menua.php"><p>Menura</p></a>
    </div>
    