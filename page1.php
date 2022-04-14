<?php
session_start();
$_SESSION["score"] = 0;
?>

<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php' ?>

    <main>
        <?php
        echo "<div class='px-4 py-5 my-5 text-center'>";
        echo " <img class='question-image' src='../img/rings.jpg' alt=''> ";

        echo " <h1 class='display-5 fw-bold'>Frage 1 </h1> ";

        echo " <div class='col-lg-6 mx-auto'> ";
        echo "<p class='lead mb-4'> How many rings has the olympics symbol?</p> ";

        echo " <form action='/page2.php' method='post' onsubmit='return validateNumber1();'> ";

        echo " <input type='number' name='number-text' id='number-text' class='number-imput'><br> ";
        echo " <input type='hidden' name='lastPageID' value='question-1'> ";
        echo " <input type='hidden' name='points' id='rings' value=''> ";

        echo " <p id='validation-warning' class='warning'></p> ";

        echo "<div class='d-grid gap-2 d-sm-flex justify-content-sm-center'> ";
        echo " <button type='submit' class='btn btn-outline-secondary btn-lg px-4'>WEITER</button> ";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo " </form> ";


        echo " <script src='js/main.js'></script> ";
        ?>
    </main>

</body>

</html>