<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Claudio Dionisio</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css ">
</head>
<!-- this is the beginning of the body content -->
<body>
    <div class="container">
        <!-- include file with the menu bar-->
        <?php include 'include/header.php';?>

        <!-- this is the beginning of the body content -->

        <br>
        <hr><br>
        <div class="card mb-" id="cardTop"></div>
        <div class="row no-gutters">
            <div class="col-md-4">
                <!-- image in the card -->

                <img src="img/profile.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-8">
                <!-- card with student identification-->
                <div class="card-body">
                    <h5 class="card-title">Claudio Dionisio</h5>
                    <p id=" topCardTitle"> STUDENT NUMBER: 2019235
                        <br>COURSE: Web Development
                        <br>TEACHER: John Snel
                        <br>PROJECT TITLE: PHP Project 1
                    </p>

                </div>
            </div>
        </div>
        <!-- include file with the footer-->
        <?php

        include 'include/footer.php';
        ?>

    </div>
</body>

</html>