<?php    
 $valid = true;
    if ( !empty($_POST)) {

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $reppassword = $_POST['reppassword'];
        

        

        if (empty($firstname)) {
            $fnameError = '-Please enter your first Name !<br>';
            $errorborderfn = "border-color: red;";
            $valid = false;
        }

         if (empty($lastname)) {
            $lnameError = '-Please enter your last Name !<br>';
            $errorborderln = "border-color: red;";
            $valid = false;
        }
         
        if (empty($email)) {
            $emailError = '-Please enter your Email Address !<br>';
            $errorborderemail = "border-color: red;";
            $valid = false;
        } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
            $emailError = '-Please enter a valid Email Address !<br>';
            $valid = false;
        }
         
        if (empty($password)) {
            $passwordError = '-Please enter your password !<br>';
            $errorborderpass = "border-color: red;";
            $valid = false;
        }

         if (empty($reppassword)) {
            $reppassError = '-Please enter your password again !';
            $errorborderreppas = "border-color: red;";
            $valid = false;
        }else if ($password != $reppassword) {
             $reppassError = '-Your repeat password invalid !';
             $errorborderreppas = "border-color: red;";
             $valid = false;
        }



        if ($valid) {
                header("location: dashboard.php");
              }
        }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
 
<body style="background-color: turquoise;">
    <div class="container">
            
         <div class="content">
          <div class="row">

            <div class="col-md-4 col-sm-12 align-center offset-md-4 shadow p-3 mb-5 bg-white rounded" style="background-color: #fff; margin-top: 8%;padding: 3%">
                            
                            <form class="" method="POST" action="">

                                <div class="block block-themed block-rounded block-shadow">
                                    <div class="block-header bg-gd-dusk mb-4">
                                        <h3 class="block-title">Register</h3>
                                  
                                    </div>
                                
                                    <div class="block-content">
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input type="text" style="<?php echo @$errorborderfn; ?>" class="form-control" id="firstname" name="firstname" placeholder="first name" value="<?php echo @$firstname ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input type="text" style="<?php echo @$errorborderln; ?>" class="form-control" id="lastname" name="lastname" placeholder="last name" value="<?php echo @$lastname ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input type="text" style="<?php echo @$errorborderemail; ?>" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo @$email ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input type="password" style="<?php echo @$errorborderpass; ?>" class="form-control" id="password" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <div class="col-12">
                                                <input type="password" style="<?php echo @$errorborderreppas; ?>" class="form-control" id="reppassword" name="reppassword" placeholder="Repeat password">
                                            </div>
                                        </div>

                                        <?php if (@$valid == false) {
                                            
                                         ?>
                                        <div class="col-md-12 alert alert-danger pt-0 pb-0" style='font-size: 14px'>
                                              <?php 
                                                    echo @$fnameError; 
                                                    echo @$lnameError; 
                                                    echo @$emailError; 
                                                    echo @$passwordError;
                                                    echo @$reppassError; 
                                              ?>
                                        </div>

                                        <?php } 
                                        ?>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-12 text-md-right push">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="si si-login mr-10"></i> Register
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    </div> 
    <!-- /container -->
  </body>
</html>
