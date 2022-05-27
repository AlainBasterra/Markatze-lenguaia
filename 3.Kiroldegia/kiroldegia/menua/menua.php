<!DOCTYPE html>
<html>

<head>
    <link rel="STYLESHEET" TYPE="TEXT/CSS" HREF="menua.css">
    <title>Kiroldegia</title>

</head>

<body>
    <?php
    session_start();
    include("../connect/connect.php");
    $link = KonektatuDatuBasera();

    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];

        $emaitza = mysqli_query($link, "select * from erabiltzailea where usuario = '$usuario'");
        $emaitza = mysqli_fetch_array($emaitza);
    ?>
        <div id="login">
            <div id="erabiltzaileAukerak">
                <div id="perfilArgazkia">
                    <img src=<?php echo $emaitza["argazkia"] ?> id="perfilArgazkiaimg"/>
                </div>
                <div id="erabiltzaileIzena">
                    <p class="textua"><?php echo $emaitza["izena"] ?></p>
                </div>
                <div id="logout">
                    <a href="../logout/logout.php">
                        <p class="textua">Log out</p>
                    </a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
    <div id="menua">
        <div id="argazkia">
            <img src="../argazkiak/kiroldegia.jpg" style="width:100%; height:100%;">
        </div>
        <div id="aukerak">
            <?php if (isset($_SESSION['usuario'])) { ?>

                <div class="aukera select">
                    <div class="botoia">
                        <a href="../select/select.php">
                            <p class="textua">Erabiltzaileen lista</p>
                        </a>
                    </div>
                </div>


                <div class="aukera insert">
                    <div class="botoia">
                        <a href="../insert/insert.php">
                            <p class="textua">Erabiltzailea gehitu</p>
                        </a>
                    </div>
                </div>

                <div class="aukera delete">
                    <div class="botoia">
                        <a href="../delete/delete.php">
                            <p class="textua">Erabiltzailea ezabatu</p>
                        </a>
                    </div>
                </div>

            <?php
            } else {
            ?>
                <div class="aukera select">
                    <div class="botoia">
                        <a href="../select/select.php">
                            <p class="textua">Erabiltzaileen lista</p>
                        </a>
                    </div>
                </div>

                <div class="aukera select">
                    <div class="botoia">
                        <a href="../login/login.php">
                            <p class="textua">login</p>
                        </a>
                    </div>
                </div>

            <?php
            }
            ?>

        </div>

    </div>


</body>

</html>