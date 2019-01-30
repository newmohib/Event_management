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
    <div class="row">
      <div class="col-12 col-lg-6  col-md-12  col-sm-12">

    <div class="card my_apply_myform">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Event Transportation Form
        </a>
      </div>
      
          
           <div class="col-12 col-lg-12  col-md-12  col-sm-12">
                <div class="card-body">
                    <?php echo form_open("event/new_event/Event_controller/event_transpor_save_controller"); ?>
                    
                      <div class="col-lg-12 col-md-12  col-sm-12">
                            <!--student name start -->


                           <div class="row">
                               <div class="col-lg-6 col-md-6  col-sm-6">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Transport Name</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="t_name" class="form-control">
                                      <option>Select</option>

                                   <?php
                                    foreach($event_create['transport_name']->result_array() as $row){   

            								        echo "<option value=".$row["id"].">".$row["t_name"]."</option>";
            								       }
                                 ?>
                               </select>
                               </div>
                            </div>
                            <div class="col-lg-6 col-md-6  col-sm-6">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Event</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="event" class="form-control">
                                      <option>Select</option>

                                   <?php
                                    foreach($event_create['event_trans']->result_array() as $row){   
    
            								        echo "<option value=".$row["id"].">".$row["e_name"]."</option>";
            								       }
                                 ?>
                               </select>
                               </div>
                            </div>
                         </div>
                         <hr>

                      <div class="row">
                               <div class="col-lg-6 col-md-6  col-sm-6">
                                <div class="form-group-material">
                                  <input id="seat_capacity" type="text" name="seat_capacity" class="form-control input-material" value="<?php echo set_value('total_attendance'); ?>">
                                  <label for="seat_capacity" class="label-material">Capacity</label>
                                </div>
                               </div>
                            <div class="col-lg-6 col-md-6  col-sm-6">
                                <div class="form-group-material">
                                    <input id="password" type="text" name="password" class="form-control input-material" value="<?php echo set_value('password'); ?>" required>
                                    <label for="password" class="label-material">User Password</label>
                               </div>
                           </div>
                      </div>
                   <hr>
                     <div class="row justify-content-md-center">
                          <div class="col-lg-6 col-sm-6 col-mb-6">
                                <div class="form-group-material i-checks ">
                                    <input id="client_signup" type="submit" name="btn_tranport_submit" class="input-material btn btn-info btn-lg active" role="button" aria-pressed="true" style="border-radius: 50px;" value="SUBMIT">
                                    
                                </div>

                          </div>
                          <div class="col-lg-6 col-sm-6 col-mb-6">
                                <div class="form-group-material i-checks ">
                                    <input id="client_signup" type="submit" name="btn_tranport_no" class="input-material btn btn-danger btn-lg active" role="button" aria-pressed="true" style="border-radius: 30px;" value="No Thanks">
                                    
                                </div>
                                
                          </div>
                    </div>  
                  </div>
             </form>
            </div>
       </div>
    <!--card body closs-->  
   </div>
   </div>
  <!--2nd card -->




  <!--Show event tables -->

      <div class="col-12 col-lg-6  col-md-12  col-sm-12">
  <div class="col-lg-12">
                <div class="card my_apply_myform">
                  <div class="card-header">
                    <h4>Show All Event</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <tr class="table-primary">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Venue</th>
                            <th>Client</th>
                          </tr>
                        </thead>
                            <?php

                                  foreach($event_create['event_trans']->result_array() as $event_row){
                                  echo '<tbody> <tr class="table-light">';
                                  echo  '<td>'.$event_row["id"].'</td>';
                                  echo  '<td>'.$event_row["e_name"].'</td>';

                                  foreach($event_create['venue']->result_array() as $vanue_row){
                                    if ($event_row["vanue_id"]==$vanue_row["id"]) {
                                      echo  '<td>'.$vanue_row["v_name"].'</td>';
                                    }
                                  }

                                  echo  '<td>'.$event_row["client_id"].'</td>';
                                  echo '</tr></tbody>'; 
                                 }


                            ?>
                        <tbody>
                          <tr>
                            <th>1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
  </div>
        <!-- card class closs -->
     </div>
    <!--2nd card  closs-->


        
  </div> <!--row closs-->
 </div><!--according closs-->
</div>













