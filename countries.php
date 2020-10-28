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

<body>

    <div class="container">

        <?php include 'include/header.php';?>
        <br>
        <hr>
        <br>
        <table>
            <tr>
                <th>COUNTRY</th>
                <th>CAPITAL</th>
            </tr>

            <?php
       
       include 'include/array.php';

        foreach($country as $x => $capital) {
        
            echo "<tr><td>" . $x . "</td><td> ". $capital ." </td></tr>";
        }
?>
        </table>
        <?php


include 'include/footer.php';

?>
    </div>

</body>

</html>