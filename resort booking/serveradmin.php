<?php 
        $username = "";
        $email = "";
        $errors = array(); 
        //connect to the database
        $db = mysqli_connect('localhost', 'root', '', 'resort booking');
        if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            //ensure that form fields are filled properly
            if (empty($username)) {
                array_push($errors, "Username is required");
            }
            if (empty($password)) {
                array_push($errors, "Password is required");

            }
            if(count($errors) == 0) {
                // $password = md5($password); //encrypt password before comparing with that from database
                $query = "SELECT * FROM adminlogin WHERE username='$username' AND password ='$password' ";
                $result = mysqli_query($db, $query);
                if (mysqli_num_rows($result) >= 1) {
                    //log user in
                    $_SESSION['username'] = $username;
                    $_SESSION['success'] = "You are now logged in";
                    header('location: indexadmin.php'); //redirecting to home page  
                }else{
                    array_push($errors, "wrong username/password combination");
                }
            }
        }

?>