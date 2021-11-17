<?php

$orphan = mysqli_connect('localhost', 'root');

if($orphan){
    echo "Connection Successful";
}
else{
    echo "Connection Failed";
}

mysqli_select_db($orphan,'orphanagesystemuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfodata (user, email, mobile, comment)
values ('$user','$email','$mobile','$comment')";

mysqli_query($orphan,$query);

echo "$query";

mysqli_query($orphan, $query);

header('location:index.php');

?>