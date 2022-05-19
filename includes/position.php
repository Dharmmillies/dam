<?php


require_once "connect.php";



$fn=strip_tags(@$_POST['fname']);
$un=strip_tags(@$_POST['username']);
$em=strip_tags(@$_POST['email']);
$select_post = strip_tags(@$_POST['position']);
$level = strip_tags(@$_POST['level']);
$date=date("y-m-d");


if(isset($_POST['sub_post'])){


   if (empty($fn) || empty($un) || empty($em) || empty($select_post) || $level)  {
    // code...
    header("Location: ../register_post.php?error=enterallfields");
    exit();
  
  }
   elseif (!filter_var($em, FILTER_VALIDATE_EMAIL)) {
    // code...
     header("Location: ../register_post.php?error=enteracorrectemail");
    exit();
  }
  elseif (isset($_POST['add_post'])) {
      // code...

    echo ' <div class="container-fluid" style="width: 70%; margin-top: 150px;height: 40px;">
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" method="POST">
                                      

                                      <div class="form-group row">

                                            <label class="col-lg-3 col-form-label" ><span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-8">
                                                <h4>REGISTER POSITION </h4>
                                            </div>
                                        </div>



                                        <div class="form-group row">

                                            <label class="col-lg-3 col-form-label" for="val-fullname">FullName<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-fullname" name="fname" placeholder="Enter a Fullname..">
                                            </div>
                                        </div>

                                        <div class="form-group row">

                                            <label class="col-lg-3 col-form-label" for="val-username">Nickname<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-username" name="username" placeholder="Enter a Nickname..">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="val-email">Email <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-email" name="confemail" placeholder="Confirm email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="val-password">Position <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                               <select name="position" style="text-transform: uppercase;" class="form-control">
                                                   <option value="">Choose a post</option>
                                                   <option value="president">President</option>
                                                   <option value="vice_pres">Vice President</option>
                                                   <option value="gen_sec">General Secretary</option>
                                                   <option value="fin_sec">Financial Secretary</option>
                                                   <option value="wlefare">Welfare</option>
                                                   <option value="ags">Assistant General Secretary</option>
                                                   <option value="soc_dir">Social Director</option>
                                                   <option value="Pro">Public Relation Officer</option>
                                                   <option value="ags_1">Assistant General Secretary 1</option>
                                                   <option value="ags_2">Assistant General Secretary 2</option>
                                                   <option value="sport">Sport Director</option>
                                                   <option value="eic">Editor in Cheif</option>
                                                   

                                               </select>

                                               <p><?php echo $select_post; ?></p>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label" for="val-confirm-password">LEVEL<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="val-confirm-password" name="level" placeholder="Enter your level">
                                            </div>
                                        </div>
                                        
                                       
                                        
                                        <div class="form-group row">
                                            <div class="col-lg-6 ml-auto">
                                                <input type="submit" name="sub_post" class="btn btn-primary" value="submit">
                                            </div>

                                            <div class="col-lg-6 ml-auto" style="position: relative; left: 105px;">
                                                <input type="submit" name="add_post" class="btn btn-warning" value="Add Post">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
';
  }




  //checking if userNAME alrady exist || EMAIL EXIST
 //  $sql = "SELECT * FROM position WHERE fullname ='$fn' AND email ='$em'; ";
 //  $checkExist = mysqli_query($conn, $sql);
 //  //count the no of row where if exists
 //   $checkrow = mysqli_num_rows($checkExist);
 //  if($checkrow > 0) {
 // // code...
 //    header("Location: ../register_post.php?error=fullnameoremailalreadyexist");
 //    exit();
 //  }
 //  elseif (strlen($pwd)<5) {

 //    // code...
 //    header("Location: ../register_post.php?error=passwordislessthan5");
 //    exit();
    
 //  }
 //  elseif ($pwd !== $pwd2) {
 //    // code...
 //    header("Location: ../register_post.php?error=passworddoesnotmatch");
 //    exit();
 //  }
  
  else{
      // $pwdHash = md5($pwd);
      // $pwdHash2=md5($pwd2);
    mysqli_query($conn, "INSERT INTO position(id, fullname, nickname, email, post, level, reg_date) VALUES('', '$fn','$un', '$em','$select_post','$level','$date')") or die(mysqli_connect_error()) ;
     

      header("Location: ../register_post.php?error=sucessful");
      exit();
     
      mysqli_close();
  }

  




}//end of reg

?>