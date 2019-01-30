 <?php //echo base_url() index.php/event/client/Client_controller ;?>
 <div class="container">
  <h2>Employ</h2><br>
  <?php echo validation_errors(); ?>
  <br>
  <div id="accordion">
    <div class="card my_apply_myform">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Employ Signup Form
        </a>
      </div>
      <div id="collapseOne" class="collapse show">
          
           <div class="col-12 col-lg-12  col-md-12  col-sm-12">
                <div class="card-body">
                    <?php echo form_open("event/employee/Employee_controller/employee_signup_save"); ?>
                    
                      <div class="col-lg-12 col-md-12  col-sm-12">
                            <!--student name start-->
                            
                           <div class="row">
                                <div class="col-lg-6 col-md-6  col-sm-6">
                                <div class="form-group-material">
                                    <input id="client_name" type="text" name="name" required class="input-material" value="<?php echo set_value('client_name'); ?>">
                                    <label for="client_name" class="label-material">Name</label>
                                    <?php echo form_error('client_name');?>
                                </div>

                                </div>
                                <div class="col-lg-6 col-md-6  col-sm-6">
                                <div class="form-group-material">
                                    <input id="client_email" type="text" name="email" required class="input-material" value="<?php echo set_value('client_email'); ?>">
                                    <label for="client_email" class="label-material">Email</label>
                                </div>
                                </div>
                            </div>

                          <div class="row">
                               <div class="col-lg-6 col-md-6  col-sm-4">
                                <div class="form-group-material">
                                  <input id="client_phone" type="text" name="phone" required class="input-material" value="<?php echo set_value('client_phone'); ?>">
                                  <label for="client_phone" class="label-material">Phone</label>
                                </div>
                               </div>
                            <div class="col-lg-6 col-md-6  col-sm-4">
                                <div class="form-group-material">
                                    <input id="client_address" type="text" name="address" required class="input-material" value="<?php echo set_value('client_address'); ?>">
                                    <label for="client_address" class="label-material">Address</label>
                               </div>
                           </div>
                         </div>

                         <div class="row">
                               <div class="col-lg-6 col-md-6  col-sm-4">
                                <div class="form-group-material">
                                  <input id="client_username" type="text" name="username" required class="input-material" value="<?php echo set_value('client_username'); ?>">
                                  <label for="client_username" class="label-material">Username</label>
                                </div>
                               </div>
                            <div class="col-lg-6 col-md-6  col-sm-4">
                                <div class="form-group-material">
                                    <input id="client_password" type="text" name="password" required class="input-material" value="<?php echo set_value('client_password'); ?>">
                                    <label for="client_password" class="label-material">Password</label>
                               </div>
                           </div>

                         </div>
                     <hr>
                      <div class="row justify-content-md-center">
                      <div class="col-lg-4 col-sm-4 col-mb-4">
                            <div class="form-group-material i-checks ">
                                <input id="client_signup" type="submit" name="signup" required class="input-material btn btn-info btn-lg active" role="button" aria-pressed="true" style="border-radius: 50px;" value="SUBMIT">
                                
                            </div>
                      </div>
                 </div>  
                  </div>
             </form>
            </div>
       </div>
     </div>
  
   <!--card body closs-->  
  </div>

  </div>
</div>




