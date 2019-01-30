 <?php //echo base_url() index.php/event/client/Client_controller ;

if (isset($employee_edit_model)) {



   foreach($employee_edit_model->result_array() as $row){   

      //  $row["id"];
     //   $row["name"];
     //   $row["email"];
     //   $row["phone"];
     //   $row["address"];
    //    $row["username"];
      //  $row["password"];
     //   $row["create_date"];
    }

echo $employee_edit_model->num_rows();



}
 ?>
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
                    <?php echo form_open("event/employee/Employee_controller/employee_updat_controller/".$row["id"]); ?>
                    
                      <div class="col-lg-12 col-md-12  col-sm-12">
                            <!--student name start-->
                            
                           <div class="row">
                                <div class="col-lg-6 col-md-6  col-sm-6">
                                <div class="form-group-material">
                                    <input id="name" type="text" name="name" required class="input-material" value="<?php echo $row['name']; ?>">
                                    <label for="name" class="label-material">Name</label>
                                    <?php echo form_error('client_name');?>
                                </div>

                                </div>
                                <div class="col-lg-6 col-md-6  col-sm-6">
                                <div class="form-group-material">
                                    <input id="email" type="text" name="email" required class="input-material" value="<?php echo $row['email']; ?>">
                                    <label for="email" class="label-material">Email</label>
                                </div>
                                </div>
                            </div>

                          <div class="row">
                               <div class="col-lg-6 col-md-6  col-sm-4">
                                <div class="form-group-material">
                                  <input id="phone" type="text" name="phone" required class="input-material" value="<?php echo $row['phone']; ?>">
                                  <label for="phone" class="label-material">Phone</label>
                                </div>
                               </div>
                            <div class="col-lg-6 col-md-6  col-sm-4">
                                <div class="form-group-material">
                                    <input id="address" type="text" name="address" required class="input-material" value="<?php echo $row['address']; ?>">
                                    <label for="address" class="label-material">Address</label>
                               </div>
                           </div>
                         </div>

                         <div class="row">
                             <div class="col-lg-6 col-md-6  col-sm-4">
                                <div class="form-group-material">
                                    <input id="password" type="text" name="password" required class="input-material">
                                    <label for="password" class="label-material">Password</label>
                               </div>
                           </div>  
                            <div class="col-lg-6 col-md-6  col-sm-4">
                                <div class="form-group-material">
                                    <input id="rpassword" type="text" name="rpassword" required class="input-material">
                                    <label for="rpassword" class="label-material">Re Type Password</label>
                               </div>
                           </div>

                         </div>
                     <hr>
                      <div class="row justify-content-md-center">
                      <div class="col-lg-4 col-sm-4 col-mb-4">
                            <div class="form-group-material i-checks ">
                                <input id="client_signup" type="submit" name="btnupdate" required class="input-material btn btn-info btn-lg active" role="button" aria-pressed="true" style="border-radius: 50px;" value="UPDATE">
                                
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

