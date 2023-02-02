<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


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

    <title>Smart-E-Signup</title>
    <style>
        #signupbtn{
            background-color: #59A799;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="card-body">
                    <h2 class="title text-center mt-4">Welcome To <a href="../index.php"><img src="../static/img/logo.jpg" alt="" style="height:50px; width:150px;"></a></h2>
                    <h3 class="title text-center mt-4">Let's get started</h3>
                    <p class="text-center">Please enter your information</p>
                    <?php
echo '<div class="alert alert-warning" role="alert">
error message will here appear here
</div>';
?>
                    <form class="form-box px-3" method="post">
                        <div class="form-input">
                            <div class="container">
                                <div class="row">
                                    <span><i class="fa fa-key"></i></span>
                                    <div class="col">
                                        <label for="fname">First Name</label>
                                        <input type="text" name="fname" id="fname" placeholder="Enter first name" required />
                                    </div>
                                    <div class="col">
                                        <label for="lname">Last Name</label>
                                        <input type="text" name="lname" id="lname" placeholder="Enter last name" required />
                                    </div>
                                    <div class="form-group">
                                        <label for="userEmail">Email</label>
                                        <input type="email" class="form-control" id="userEmail" placeholder="Email" name="userEmail" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="userPassword">Password</label>
                                        <input type="password" class="form-control" id="userPassword" placeholder="Password" name="userpassword" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="confUserPassword">Confirm Password</label>
                                        <input type="password" class="form-control" id="confUserPassword" placeholder="Confirm Password" name="confUserPassword" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="userContactNumber">Contact Number</label>
                                        <input type="number" class="form-control" id="userContactNumber" placeholder="Contact Number" name="userContactNumber" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <button type="submit" id="signupbtn" class="btn btn-block text-uppercase text-white" >
                                            Create account
                                        </button>
                                    </div>
                                    <script>
                                         let fname = document.getElementById('#fname');
                                         let lname = document.getElementById('#lname');
                                    //     let userEmail = document.getElementById('#userEmail');
                                        
                                    //     createAccBtn.disabled = true;
                                    //     function valEle{

                                        
                                    //     // let createAccBtn = document.getElementById("signupbtn");
                                    //     // let fname = document.getElementById("fname");
                                    //     // let lname = document.getElementById("lname");
                                    //     // let userEmail = document.getElementById("userEmail");
                                    //     // let userPassword = document.getElementById("userPassword");
                                    //     // let confUserPassword = document.getelementById("confUserPassword");
                                    //     // let userContactNumber = document.getElementById("userContactNumber");

                                    //     createAccBtn.disabled = true;
                                    //     if(fname.value = 0, lname.value = 0, userEmail.value = 0){
                                    //         createAccBtn.disabled = true;
                                    //     }else{
                                    //         createAccBtn.disabled = false;
                                    //     }
                                    // }
                                    //         window.valEle();

                                    </script>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                        <div class="text-center mb-2">
                            Already have an account?
                            <a href="smartLoginView.php" class="register-link text-primary"> Click here to sign in</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>