<?php
       $connection=new mysqli('localhost','root','','lab',3306);
if ($connection->connect_error) {
    echo 'server connection failed please check mysqli server ';
    die();
}
    else {
        echo 'mysql server is working fine and connected ';
    }


if ($_SERVER['REQUEST_METHOD']=='POST') {
    $name=$_POST['name'];
       $phone=$_POST['phone'];
        $email=$_POST['email'];
         $password=$_POST['password'];
    //    echo "i have got" .$name;
    //    echo "<br/>";
    //     echo "i have got" .$age;
$sql="insert into users(name,phone,email,password)values('$name','$phone','$email','$password')";
$result=mysqli_query($connection,$sql);
// var_dump($result);
if ($result==true) {
    echo '<script>alert("data is inserted")</script>';
}
else {
    echo "<script>alert('data is not inserted')</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    <label for="name">NAME</label>
    <input type="text" name="name" id="name" placeholder="enter your name">
     <label for="phone">phone</label>
        <input type="text" name="phone" id="phone" placeholder="enter your phone">
             <label for="email">email</label>
        <input type="text" name="email" id="email" placeholder="enter your email">
             <label for="password">password</label>
        <input type="text" name="password" id="password" placeholder="enter your password">
        <input type="submit" value="submit">
        </form>
</body>
</html>