 <?php //echo base_url() index.php/event/client/Client_controller ;?>
 <?php 
  foreach($event_create['category']->result_array() as $row){   
    
        // echo $row["name"]."<br/>";

     
       }


 ?>

 <div class="container">
  <h2>Event</h2><br>
  <?php echo validation_errors(); ?>
  <br>
  <div id="accordion">
    <div class="card my_apply_myform">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Event Create Form
        </a>
      </div>
      <div id="collapseOne" class="collapse show">
          
           <div class="col-12 col-lg-12  col-md-12  col-sm-12">
                <div class="card-body">
                    <?php echo form_open("event/new_event/Event_controller/event_save_controller"); ?>
                    
                      <div class="col-lg-12 col-md-12  col-sm-12">
                            <!--student name start -->

                           <div class="row">
                                <div class="col-lg-6 col-md-6  col-sm-6">
                                <div class="form-group-material">
                                    <input id="e_name" type="text" name="e_name" required class="form-control input-material" value="<?php echo set_value('e_name'); ?>">
                                    <label for="e_name" class="label-material">Event Name</label>
                                    <?php echo form_error('e_name');?>
                                </div>
                                </div>

                                <div class="col-lg-6 col-md-6  col-sm-6">
                                <div class="form-group-material">
                                    <input id="e_title" type="text" name="e_title" required class="form-control input-material" value="<?php echo set_value('e_title'); ?>">
                                    <label for="e_title" class="label-material">Event Title</label>
                                </div>
                                </div>
                            </div>

                            <hr>

                           <div class="row">
                               <div class="col-lg-4 col-md-4  col-sm-4">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Event Category</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="e_category" class="form-control">
                                      <option>Select</option>

                                   <?php
                                    foreach($event_create['category']->result_array() as $row){   

            								        echo "<option value=".$row["id"].">".$row["name"]."</option>";
            								       }
                                 ?>
                               </select>
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-4  col-sm-4">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Event Type</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="e_type" class="form-control">
                                      <option>Select</option>

                                   <?php
                                    foreach($event_create['event_name']->result_array() as $row){   
    
            								        echo "<option value=".$row["id"].">".$row["name"]."</option>";
            								       }
                                 ?>
                               </select>
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-4  col-sm-4">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Price Type</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="price_type" class="form-control">
                                      <option>Select</option>

                                   <?php
                                    foreach($event_create['price_type']->result_array() as $row){   
    
              								        echo "<option value=".$row["id"].">".$row["name"]."</option>";
              								     
              								       }
                                 ?>
                               </select>
                               </div>
                            </div>
                         </div>
                         <hr>

                          <div class="row">
                               <div class="col-lg-4 col-md-4  col-sm-4">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Client Name</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="e_client" class="form-control">
                                      <option>Select</option>

                                   <?php
                                    foreach($event_create['client']->result_array() as $row){   

            								        echo "<option value=".$row["id"].">".$row["name"]."</option>";
            								       }
                                 ?>
                               </select>
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-4  col-sm-4">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Decoretor Name</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="e_decoretor" class="form-control">
                                      <option>Select</option>

                                   <?php
                                    foreach($event_create['decorator']->result_array() as $row){   
    
              								        echo "<option value=".$row["id"].">".$row["name"]."</option>";
              								       }
                                 ?>
                               </select>
                               </div>
                            </div>
                            <div class="col-lg-4 col-md-4  col-sm-4">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Administrator</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="e_employee" class="form-control">
                                        <option>Select</option>

                                   <?php
                                    foreach($event_create['employee']->result_array() as $row){   
								                        echo "<option value=".$row["id"].">".$row["name"]."</option>";
								     
								                     }
                                 ?>
                               </select>
                               </div>
                            </div>
                         </div>
                         <hr>

                        <div class="row"> 
                             <div class="col-lg-4 col-md-4  col-sm-4">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Event Vanue</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                 <select name="e_vanue" class="form-control">
                                        <option>Select</option>
                                     <?php
                                      foreach($event_create['venue']->result_array() as $row){   
                  								        echo "<option value=".$row["id"].">".$row["v_name"]."</option>";
                  								       }
                                    ?>
                                 </select>
                               </div>
                             </div>
                             <div class="col-lg-8 col-sm-8 col-mb-8">
                               <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Location</label>
                               </div>
                               <div class="col-lg-12 col-sm-12 col-mb-12">
                                <textarea class="form-control" name="location"></textarea>
                               </div> 
                            </div> 
                         </div>

                      <hr>

                        <div class="row">
                            <div class="col-lg-6 col-md-6  col-sm-6">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Start Date and Time</label>
                              </div>
                              <div class='col-sm-12'>
          					            <input type='text' name="start_datetime" class="form-control input-material" id='start_datetime'>
          					          </div>
                            </div>
                           <div class="col-lg-6 col-md-6  col-sm-6">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material" for="end_datetime" >End Date and Time</label>
                              </div>
                              <div class='col-sm-12'>
        					              <input type='text' name="end_datetime" class="form-control input-material" id='end_datetime'>

        					           </div>
                          </div>
                      </div>

                    <hr>

                      <div class="row">
                               <div class="col-lg-6 col-md-6  col-sm-4">
                                <div class="form-group-material">
                                  <input id="total_attendance" type="text" name="total_attendance" required class="form-control input-material" value="<?php echo set_value('total_attendance'); ?>">
                                  <label for="total_attendance" class="label-material">Total Attendance</label>
                                </div>
                               </div>
                            <div class="col-lg-6 col-md-6  col-sm-4">
                                <div class="form-group-material">
                                    <input id="password" type="text" name="password" required class="form-control input-material" value="<?php echo set_value('password'); ?>">
                                    <label for="password" class="label-material">User Password</label>
                               </div>
                           </div>
                      </div>
                   <hr>
                     <div class="row justify-content-md-center">
                          <div class="col-lg-4 col-sm-4 col-mb-4">
                                <div class="form-group-material i-checks ">
                                    <input id="client_signup" type="submit" name="btn_event_submit" required class="input-material btn btn-info btn-lg active" role="button" aria-pressed="true" style="border-radius: 50px;" value="SUBMIT">
                                    
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




