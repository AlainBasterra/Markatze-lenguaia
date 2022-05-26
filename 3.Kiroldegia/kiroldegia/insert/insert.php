<head>
    <link rel="STYLESHEET" TYPE="TEXT/CSS" HREF="insert.css">
    <title>Kiroldegia</title>

</head>
<?php
// session_start();
// 	$userID = $_SESSION['erabiltzailea'];
// 	$session = $_SESSION['session'];
	include("../connect/connect.php");
	$link=KonektatuDatuBasera();
?>

    <div>
    <form action="./insert_post.php" method="POST" enctype="multipart/form-data">
                <h3 class="mb-4">Erabiltzailea gehitu</h3>
                <!-- Izena -->
                <div>
                  <label>Izena</label>
                  <input type="text" name="izena" id="izena" placeholder="Izena" required>
                </div>

                <!-- emaila -->
                <div>
                  <label >Emaila</label>
                  <input type="text" name="email" id="emaila" placeholder="Emaila" required>
                </div>

                <!-- herrialdea -->
                <div>
                  <label >Herrialdea</label>
                  <input type="text" name="herrialdea" id="herrialdea" placeholder="Herrialdea" required>
                </div>

                <!-- pasahitza -->
                <div>
                  <label>Pasahitza</label>
                  <input type="password" name="pasahitza" id="pasahitza" placeholder="Pasahitza" required>
                </div>

                <!-- argazkia -->
                <div class="image-upload">
                    <label for="file-input">
                        <img src="../argazkiak/argazkia_igo.png" id="argazkia_form"/>
                    </label>

                    <input id="file-input" type="file" />
                </div>


                <!-- Submit  -->

                <button type="submit" >Create account</button>

              </form>
    </div>


    <a href="../menua/menua.php"><p>Menura</p></a>
