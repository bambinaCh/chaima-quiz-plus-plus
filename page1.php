<?php
session_start();
$_SESSION["score"] = 0;
?>

<?php include 'inc/head.php' ?>

<body>
    <?php include 'inc/header.php' ?>

    <main>

        <div class='px-4 py-5 my-5 text-center'>
            <img class='question-image' src='../img/rings.jpg' alt=''>

            <h1 class='display-5 fw-bold'>Frage <?php echo $currentQuestion ?> 1 </h1>

            <div class='col-lg-6 mx-auto'>
                <p class='lead mb-4'> How many rings has the olympics symbol?</p>

                <form action='/page2.php' method='post' onsubmit='return validateNumber1();'>

                    <input type='number' name='number-text' id='number-text' class='number-imput'><br>
                    <input type='hidden' name='lastPageID' value='question-1'>
                    <input type='hidden' name='points' id='rings' value=''>

                    <p id='validation-warning' class='warning'></p>

                    <div class='d-grid gap-2 d-sm-flex justify-content-sm-center'>
                        <button type='submit' class='btn btn-outline-secondary btn-lg px-4'>WEITER</button>
                    </div>
            </div>
        </div>
        </form>


        <script src='js/main.js'></script>
        ?>
    </main>

</body>

</html>