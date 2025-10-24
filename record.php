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
    $cnic = $_POST['cnic'];
    $password =md5($_POST['password']);
    $city =$_POST['city'];
    $query="insert into record(name,cnic,password,city)values('$name','$cnic','$password','$city')";
$outcome=mysqli_query($connection,$query);

if ($outcome==true) {
    echo "Data is inserted!";
}

//     print $name .'<br>' .$cnic . '<br>' .$password . '<br>' .$city .'<br>';
} 

$sql="select * from record";
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
    }
$result=mysqli_query($connection,$sql);
// var_dump($result);
$record;
if ($result->num_rows>0) {
    while ($row=$result->fetch_assoc()) {
        $record[]=$row;
    
    }
    // print $record;
    }


// var_dump($record);

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
        <label for="cnic">cnic</label>
        <input type="text" name="cnic" id="cnic" placeholder="enter your cnic">
        <br>
        <br>
        <label for="password">password</label>
        <input type="text" name="password" id="password" placeholder="enter your password">
        <br>
        <br>
        <label for="city">city</label>
        <input type="text" name="city" id="city" placeholder="enter your city">
        <input type="submit" value="submit">
    </form>


    <table border="1">
        <th>ID</th>
        <th>Name</th>
        <th> CNIC</th>
        <th>Password</th>
        <th>City</th>
        <th>Action</th>
        <?php
        if(!empty($record))
            foreach ($record as $data) {
                echo "<tr>";
                echo "<td>" . $data['id']."</td>";
                echo "<td>" . $data['name']."</td>";
                echo "<td>" . $data['cnic']."</td>";
                echo "<td>" . $data['password']."</td>";
                echo "<td>" . $data['city']."</td>";
                  echo "<td>". "<a href='?delete=".$data['id']."'delete>Delete </a>" . "</td>";
                echo "</tr>";
            }
            else{
                echo "no record is found";
            }
            ?>
    </table>
</body>

</html>