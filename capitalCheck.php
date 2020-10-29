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
    <!-- this is the beginning of the body content-->
    <div class="container">
        <!-- include file with the menu bar-->
        <?php include 'include/header.php';?>

        <!-- paragraph above form -->
        <br>
        <hr><br>
        <h4>
            <?php

        $userImput = ucfirst(strtolower($_GET["country"]));

        include 'include/array.php';
            // foreach loop to check if the country given by the user is within the list
            foreach($country as $x => $capital) {
                if($x === $userImput){
                    //if the country is found, then  the validation is true and the country is stored in the variable capital
                    $ValidCountry = true;
                    $validCapital = $capital;
                }
            }
            // if the validation is true, the respective capital is printed to the user
            if ($ValidCountry === true){
                echo "The capital of ".$userImput. " is ".($validCapital).".";
                // if false, then a message tells the user the country couldnot be found
            }else{ 
                echo "The country ".$userImput." is not a valid country ";}
     
        ?> <br><br></h4>
        <p>Check for spelling errors or try another country!</p>
        <!-- button to go back to the previous page-->
        <a href="capital.php"><button type="submit" class="btn btn-primary">Try again</button></a>
        <!-- include file with the footer-->
        <?php


        include 'include/footer.php';

        ?>
    </div>
</body>

</html>