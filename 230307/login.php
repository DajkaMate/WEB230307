<?php
    include("includes/header.php");
    $email = "";
    $password = "";
    $num = "";
    $error = false;
    $message = array("email" => "", "password" => "", "loginerror" => "");

    if(isset($_POST["submit"]))
    {   
        if(empty($_POST["email"]))
        {
            $message["email"] = "Empty Email";
            $error = true;
        }
        else
        {
            $email = $_POST["email"];
            if (!preg_match_all("/^[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+(?:\\.[a-z0-9!#$%&'*+\\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/",$email)) 
            {
                $message["email"] = "Invalid Email";
                $error = true;
            }
        }

        if(empty($_POST["password"]))
        {
            $message["password"] = "Empty Password";
            $error = true;
        }
        else
        {
            $password = $_POST["password"];
            if (!preg_match("$\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])(?=\S*[\W])\S*$",$password)) 
            {
                $message["password"] = "Invalid password";
                $error = true;
            }
        }

        if($error == false)
        {
            $email = $_POST["email"];
            $password = $_POST["password"];
            $password = hash("md5", $password);
            $num = Login($email, $password);
        }

        if($num == 1)
        {
            //session
        }
        else
        {
            $num = "";
            $message["loginerror"] = "Invalid Login";
        }
    }

?>
    <div class="container">
        <div class="card m-auto mt-3" style="width: 23rem;">
            <div class="card-body">
                <h5>Login</h5>
                <strong class="d-block text-center text-danger">
                    <?php if($error == true) 
                    {
                        echo $message["email"];
                        echo "<br>".$message["password"];
                    }
                    ?>
                </strong>
                <form action="login.php" method="post">
                    <div class="mt-1">
                        <label class="form-label" for="email">E-mail:</label>
                        <input class="form-control" type="text" name="email" placeholder="Email Here" novalidate>
                    </div>
                    <div class="mt-1">
                        <label class="form-label" for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password Here">
                    </div>
                    <button type="submit" class="d-block mx-auto mt-3 btn btn-outline-danger" name="submit">Login</button>
                </form> 
            </div>
        </div>
        
        
    </div>
<?php
    include("includes/footer.php");
?>  