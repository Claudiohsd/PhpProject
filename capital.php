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
<!-- beginning of body content -->

<body>
    <div class="container">

        <?php include 'include/header.php';?>

        <!-- paragraph above form -->
        <br>
        <hr><br>
        <h4>CHECK THE CAPITAL</h4>

        <!-- form to get input -->
        <!-- redirects the user to the validation page -->

        <form action="capitalCheck.php" method="get">
            <!-- this takes the country name -->
            <div class="form-group">
                <label for="CountryName">Please enter a country</label>
                <input type="text" name="country">
            </div>

            <!-- button used to submit the form -->
            <button type="submit" class="btn btn-primary">Confirm</button>

        </form>
        <br>
        <p>Or...</p>
        <!-- button to redirect the user to the page with full list of countries-->
        <a href="countries.php"><button type="submit" class="btn btn-primary">See full List of Countries</button></a>
        <br>
        <!-- include file with the footer-->
        <?php


        include 'include/footer.php';

?>
    </div>
</body>

</html>