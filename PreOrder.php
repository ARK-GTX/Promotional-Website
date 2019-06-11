

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PreOrder</title>
</head>
<body>


    <h2>Pre Order!</h2>
    <br>
    <br>
    <br>

    <form action="includes/signup.php" method="POST">

        <input type="text" name="email" placeholder="Email Address">
    <br>
        <input type="text" name="AccntNum" placeholder="BML Account Number">
    <br>
        <input type="text" name="username" placeholder="Username">
    <br>
    <br>
    <button type="submit" name="submit">Sign up</button>

    </form>



    <h3>By signing up, you will receive real-time news about our progress. </h3>


    <div action ="GetDbData">

    

    </div>



<?php







/*
$ResultCheck = mysqli_num_rows($result);

if($ResultCheck > 0){
    while ($row =mysqli_fetch_assoc($result)){
        echo $row['username']. "<br>";

    }

}

*/

?>




</body>
</html>