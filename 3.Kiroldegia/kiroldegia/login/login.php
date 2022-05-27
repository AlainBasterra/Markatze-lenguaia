<head>
    <link rel="STYLESHEET" TYPE="TEXT/CSS" HREF="login.css">
    <title>Kiroldegia</title>

</head>
<?php
// session_start();
// 	$userID = $_SESSION['erabiltzailea'];
// 	$session = $_SESSION['session'];
include("../connect/connect.php");
$link = KonektatuDatuBasera();
?>

<div>
    <form action="./login_post.php" method="POST">
        <h3>Logeatu</h3>

        <!-- emaila -->
        <div>
            <label>Emaila</label>
            <input type="text" name="email" id="emaila" placeholder="Emaila" required>
        </div>

        <!-- pasahitza -->
        <div>
            <label>Pasahitza</label>
            <input type="password" name="pasahitza" id="pasahitza" placeholder="Pasahitza" required>
        </div>

        <!-- Submit  -->

        <button type="submit">Logeatu</button>

    </form>
</div>


<div style="width:50px;">
    <a href="../menua/menua.php">
        <p>Menura</p>
    </a>
</div>