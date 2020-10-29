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
    <!-- beginning of body content-->

<body>
    <!--container for the body, it will make the page be centralized-->
    <div class="container">
        <!-- include file to insert the menu bar-->
        <?php include 'include/header.php';?>
        <br>
        <hr>
        <br>
        <!--table with some styling from bootstrap -->
        <table class="table table-striped" id="table" ;>
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">COUNTRY</th>
                    <th scope="col">CAPITAL</th>
                </tr>
            </thead>
            <tbody>

                <?php
       //include file to make use of the table stored in a diferent file
       include 'include/array.php';
        // foreach loop will run through the array and print the table
        foreach($country as $x => $capital) {
                    echo'<th scope="row"></th><td>'. $x .'</td><td>' . $capital . '</td></tr>';
        }
                ?>
            </tbody>
        </table>
        <!-- include file with the footer-->
        <?php


    include 'include/footer.php';

        ?>
    </div>

</body>

</html>