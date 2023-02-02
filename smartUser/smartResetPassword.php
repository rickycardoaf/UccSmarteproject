<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
// //session_start();

//     include("connection.php");
//     include("functions.php");

 
//     if($_SERVER['REQUEST_METHOD'] == "POST")
//     {
//         //something was posted
//         $fname = mysqli_real_escape_string($con, $_POST['fname']);
//         $lname = mysqli_real_escape_string($con, $_POST['lname']);
//         $email = mysqli_real_escape_string($con, $_POST['email']);
//         $password = mysqli_real_escape_string($con,$_POST['password']);
//         // $password = mysqli_real_escape_string($con,$_POST['reg_password']);
//         //echo $name ." ". $email . " ".$user_name." " .$password;

//         // $select = mysqli_query($conn, "SELECT * FROM users WHERE email = '".$_POST['email']."'");
//         // if(mysqli_num_rows($select)) {
//         //     exit('This email address is already used!');
//         // }
//         $uppC = preg_match('@[A-Z]@', $password);
//         $number = preg_match('@[0-9]@', $password);

//         // validate fielf on the signup page
//         if($fname == "" || $lname == ""){
//             $error = "Your name is required";
//         }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//             $error = "Invalid email format";
//         }elseif(!$uppC || !$number || strlen($password) < 6){
//             $error = "Password should be at least 6 characters in length and should include at least one upper case letter and a number";
//         }elseif($password == ""){
//             $error = "Password is required";
//         }else{
            
            
//             $checkForEmail = mysqli_query($con, "SELECT Email_Address FROM Users WHERE Email_Address = '".$email."'");
        
//             if(mysqli_num_rows($checkForEmail) > 0){

//                 while($row = mysqli_fetch_assoc($checkForEmail)){

//                     // $dbuname = $row['user_name'];
//                     $dbemail = $row['Email_Address'];

//                   }

//                 //   check if username and email exist
//                   if($dbemail == $email){
//                     $error = "Email address already exist.";
//                   }

//                 //   if($dbuname == $user_name){
//                 //     $error = "Username address already exist.";
//                 //   }

                
            
//             }else{
                

               
//                     //save to database 
//                     $password_hashed = password_hash($password, PASSWORD_DEFAULT);
//                     $user_id = random_num(20);
//                     date_default_timezone_set("Jamaica");
//                     $date = date("d/M/Y --- h:i:sa");
//                     $query = "INSERT INTO Users (User_Id,First_Name, Last_Name,Email_Address, User_Password, Reg_date) values ('$user_id', '$fname', '$lname','$email','$password_hashed', '$date')";

//                     if(mysqli_query($con, $query)){
//                         mysqli_close($con);
//                         $success = "Account created";
//                         $name = "";
//                         $email = ""; 
//                         $password = "";
//                     }else{
//                         $error = "There was an issue with you registration.";
//                     }
                    

                
//             }
//         }
//     }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
    <link rel="stylesheet" href="../Static/Css/style.css">
    <link rel="stylesheet" href="../Static/Css/signup.css">

    <title>Farmers Bank Registration Page</title>
</head>

<body>
    <div>
        <a href="../index.php"><img src="../static/img/logo.jpg" alt=""></a>
    </div>
    <?php
                // if(isset($error)){
                    
                //     echo '<div class="alert alert-danger" role="alert">
                //     '.$error.'
                //   </div>';
                // }else{
                //     echo "";
                // }
    ?>

    <div class="container">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <!-- <div class="img-right d-none d-md-flex">
                    <img id="signupimg" src="images/greenforce-staffing-bYZn_C-RswQ-unsplash.jpg" alt="">
                </div> -->

                <div class="card-body">
                    <?php
                // if(isset($error)){
                    
                //     echo '<div class="alert alert-danger" role="alert">
                //     '.$error.'
                //   </div>';
                // }elseif(isset($success)){
                //     echo '<div class="alert alert-success" role="alert">
                //     '. $success.'
                //   </div>';
                   
                // }else{
                //     echo "";
                // }
            ?>
                    <h2 class="title text-center mt-4">Password Reset</h2>
                    <p class="text-center">Please enter your information</p>
                    <form class="form-box px-3" method="post">
                        <div class="form-input">
                            <div class="container">
                                <div class="row">


                                    <div class="form-input">
                                        <span><i class="fa fa-envelope-o"></i></span>
                                        <label for="email" class="form-label">Enter Account Email</label>
                                        <input type="email" name="email" id="email" placeholder="Email"
                                            class="form-control" required />
                                    </div>
                                    <div class="form-input">
                                        <span><i class="fa fa-key"></i></span>
                                        <label for="password" class="form-label">Enter New Password</label>
                                        <input type="password" name="password" id="password" placeholder="Password"
                                            class="form-control" required />
                                    </div>

                                    <div class="col-md-5">
                                        <label for="inputState" class="form-label">Security Question</label>
                                        <select id="inputState" class="form-select">
                                            <option selected>Choose...</option>
                                            <option>In what city were you born?</option>
                                            <option>What is the name of your favorite pet?</option>
                                            <option>What high school did you attend?</option>
                                            <option>What is the name of your first school?</option>
                                            <option>What was the make of your first car?</option>
                                            <option>What was your favorite food as a child?</option>
                                        </select>
                                    </div>
                                    <div class="col-md-7">
                                        <label for="answer" class="form-label">Answer</label>
                                        <input type="text" class="form-control" id="answer">
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-block text-uppercase">
                                            Reset Password
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- <div class="mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="cb1" name="" />
                                <label class="custom-control-label" for="cb1">Remember me</label>
                            </div>
                        </div> -->



                        <hr class="my-4" />

                        <div class="text-center mb-2">
                            Already have an account?
                            <a href="login.php" class="register-link"> Click here to sign in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>