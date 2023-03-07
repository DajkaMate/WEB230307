
<?php
    function AddUser($username, $email, $password)  
    {
        $con = Connect();
        $sql = "INSERT INTO user (username, email, pass) VALUES ('$username', '$email', '$password')";
        mysqli_query($con, $sql);
        mysqli_close($con);
    }

    function Login($email, $password)  
    {
        $con = Connect();
        $sql = "SELECT * FROM user WHERE email = '$email' AND pass = '$password'";
        mysqli_query($con, $sql);
        mysqli_close($con);
    }
?>