<?php 
include ("header.php");
?>
<?php 
    
?>


  <!--- signup -->
  <div class="container-fluid" style="margin-top: 140px; margin-bottom: 20px;">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="card">
                            <div class="card-body">
                                <div class="form-validation">
                                    <form class="form-valide" action="includes/signup.php" method="POST">
                                      

                                      <div class="form-group row">

                                            <label class="col-lg-4 col-form-label" ><span class="text-danger"></span>
                                            </label>
                                            <div class="col-lg-6">
                                                <h3>SIGNUP AS ADMIN</h3><br><br>
                                            </div>
                                        </div>



                                        <div class="form-group row">

                                            <label class="col-lg-4 col-form-label" for="val-fullname">FullName<span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-fullname" name="fname" placeholder="Enter your FullName..">
                                            </div>
                                        </div>

                                        <div class="form-group row">

                                            <label class="col-lg-4 col-form-label" for="val-username">Username <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-username" name="username" placeholder="Enter a username..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="email" placeholder="Your valid email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-email">Email <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-email" name="confemail" placeholder="Confirm email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-password">Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-password" name="password" placeholder="Choose a safe one..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="val-confirm-password">Confirm Password <span class="text-danger">*</span>
                                            </label>
                                            <div class="col-lg-6">
                                                <input type="text" class="form-control" id="val-confirm-password" name="conpassword" placeholder="..and confirm it!">
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label"> 
                                            </label>
                                            <div class="col-lg-8">
                                                <label class="css-control css-control-primary css-checkbox" for="val-terms">
                                                    Already registered <a href="admin.php" calss="text-danger">sigin as Admin</a> or <a href="login.php" calss="text-danger">sigin as voter</a> </label>
                                            </div>
                                        </div> 
                                        <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <input type="submit" name="reg" class="btn btn-primary" value="submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


  <?php

    include ("footer.php");
   ?>


            