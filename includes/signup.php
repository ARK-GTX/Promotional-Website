
<?php
    include_once 'dbh.php';



$EMAIL = mysqli_real_escape_string($conn,$_POST['email']);
$BMLACCOUNTNO = mysqli_real_escape_string($conn,$_POST['AccntNum']);
$USERNAME =  mysqli_real_escape_string($conn,$_POST['username']);



$sql ="INSERT INTO subscribers (subscriber_email , subscriber_username,  subscriber_BmlAccntNumb)
 VALUES (?,?,?);";


$stmt = mysqli_stmt_init($conn);
if(!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL Error!!";
}else{
    mysqli_stmt_bind_param($stmt, "ssi" ,$EMAIL, $USERNAME,$BMLACCOUNTNO);
    mysqli_stmt_execute($stmt);
}





mysqli_query($conn, $sql);



header("Location: ../PreOrder.php?Signup=Success");