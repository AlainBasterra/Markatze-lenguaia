
    <?php
    include("../connect/connect.php");

    $email = $_POST["email"];
    $pasahitza = $_POST["pasahitza"];

    $link = KonektatuDatuBasera();

    $emaitza = mysqli_query($link, "select email, pasahitza from erabiltzailea where email = '$email' and pasahitza = '$pasahitza'");
    if (mysqli_num_rows($emaitza) == 0) {
        header("Location:./login.php?logeatu=ez");
    } else {
        $emaitza = mysqli_query($link, "select usuario from erabiltzailea where email = '$email'");
        $emaitza = mysqli_fetch_array($emaitza);
        $usuario = $emaitza["usuario"];

        session_start();
        $_SESSION["usuario"] = $usuario;
        header("Location:../menua/menua.php");
    }

    ?>