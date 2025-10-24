<?php
$connection=new mysqli('localhost','root','','revision',3306);
if ($connection->connect_error) {
    print 'There is an error in connecting to database ';
    die();
}
    else {
        echo 'Database is connected! ';
    }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $country =$_POST['country'];
    $cnic = $_POST['cnic'];
    
    $query="insert into register(name,country,cnic)values('$name', '$country','$cnic')";
$outcome=mysqli_query($connection,$query);

if ($outcome==true) {
    echo "Data is inserted!";
}

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP create</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="name">NAME</label>
        <input type="text" name="name" id="name" placeholder="enter your name">
        <br>
        <br>
        <label for="country">country</label>
        <input type="text" name="country" id="country" placeholder="enter your country">
        <br>
        <br>
        <label for="cnic">cnic</label>
        <input type="text" name="cnic" id="password" placeholder="enter your cnic">
    
        <input type="submit" value="submit">
    </form>
</body>

</html>