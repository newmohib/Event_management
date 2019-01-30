 <?php //echo base_url() index.php/event/client/Client_controller ;?>
 <?php 
 // foreach($event_create['category']->result_array() as $row){   
    
        // echo $row["name"]."<br/>";

     
 //      }


 ?>

 <div class="container">
  <h2>Event</h2><br>
  <?php echo validation_errors(); ?>
  <br>
  <div id="accordion">
    <div class="row">
   
  <!--Show event tables -->

      <div class="col-8 col-lg-8 col-md-8 col-sm-8">
           <div class="col-lg-12">
                <div class="card my_apply_myform">
                  <div class="card-header">
                    <h4>Total Payment Amount</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                            <?php

                             foreach($event_create['event']->result_array() as $event_row){
                                  echo '<tbody> <tr class="table-info">';
                                  echo  '<th colspan="3">Event Name</th>';
                                  echo  '<th colspan="7">'.$event_row["e_name"].'</th>';
                                  echo '</tr></tbody>';
                                 }

                                  echo '<tbody> <tr class="table-light">';
                                  echo  '<th colspan="2">Name</th>';
                                  echo  '<th colspan="2">Uninte Price</th>';
                                  echo    '<th colspan="2">UOM</th>';
                                  echo    '<th colspan="2">Item</th>';
                                  echo    '<th colspan="2">Sub Total</th>';

                                  echo '</tr></tbody>';

                                  //empty 

                                  echo '<tbody> <tr class="table-light">';
                                  echo  '<th colspan="2"></th>';
                                  echo  '<th colspan="2"></th>';
                                  echo    '<th colspan="2"></th>';
                                  echo    '<th colspan="2"></th>';
                                  echo    '<th colspan="2"></th>';

                                  echo '</tr></tbody>';
                                  //empty
                                 

                                  $ind_evint_id =$event_row["id"];
                                  //echo $ind_evint_id;
  //id, e_name, start_date_time, end_date_time, vanue_id, decorator_id, client_id, user_id, e_type, employee_id, c_date, up_date, price_type_id, e_title, e_category, location, total_attendance



                                 //date
                                      foreach($event_create['event']->result_array() as $event_row_1){
                                        
                                        if ($event_row_1["id"]==$ind_evint_id) {
                                            $start_date_time= $event_row_1["start_date_time"];
                                            $end_date_time= $event_row_1["end_date_time"];

                                            $datetime1 = date_create($start_date_time);
                                            $datetime2 = date_create($end_date_time);
                                            $interval = date_diff($datetime1, $datetime2);
                                                
                                                 
                                                     $year=0;
                                                     if ($interval->format("%Y") >'0') {
                                                               
                                                        $year=$interval->format("%Y") * '365' * '24' ;
                                                     }



                                                     $month=0;
                                                     if ($interval->format("%m") >'0') {
                                                               
                                                        $month=$interval->format("%m") * '30' * '24' ;
                                                     }



                                                      $day=0;
                                                     if ($interval->format("%d") >'0') {
                                                               
                                                        $day=$interval->format("%d") * '24' ;
                                                     }

                                                      

                                                      $hour=0;
                                                     if ($interval->format("%H") >'0') {
                                                               
                                                        $hour=$interval->format("%H") ;
                                                     }
                                                    
                                                    
                                                     if ($interval->format("%I") >'0') {
                                                               
                                                        $hour +=1 ;
                                                     }


                                                      $total_hours= $year + $month + $day + $hour;

                                               //echo $total_hours;

                                         
                                         }
                                       //if closs  
                                  } // foreach

                                  // echo $total_hours * $event_row["price"];
                                    //echo  '<td colspan="3">'. $total_hours * $event_row["price"].'</td>';
                                  //date


                                   $person='1';

                                  foreach($event_create['payment_det']->result_array() as $event_row){
                                  echo '<tbody> <tr class="table-light">';
                                  echo  '<th colspan="2">'.$event_row["name"].'</th>';
                                  echo  '<td colspan="2">'.$event_row["price"].'</td>';
                                  echo  '<td colspan="2">'.$event_row["uom"].'</td>';
                                  
                                  if ($event_row["id"]==2 || $event_row["id"]==3 || $event_row["id"]==4 || $event_row["id"]==7 || $event_row["id"]==9) {
                                      echo  '<td colspan="2">'.$person.'</td>';
                                       echo  '<td colspan="2">'.$event_row["price"].'</td>';

                                       $total_1 += $event_row["price"];
                                    }
                                       $total_1=0;
                                    if ($event_row["id"]==1) {
                                       echo  '<td colspan="2">'.$total_hours.'</td>';
                                       echo  '<td colspan="2">'. $total_hours * $event_row["price"].'</td>';

                                       $total_1 += $total_hours * $event_row["price"];
                                    }

                                    if ($event_row["id"]==5) {
                                      echo  '<td colspan="2">'.$total_hours.'</td>';
                                       echo  '<td colspan="2">'. $total_hours * $event_row["price"].'</td>';

                                       $total_1 += $total_hours * $event_row["price"];
                                    }

                                    if ($event_row["id"]==6) {
                                      echo  '<td colspan="2">'.$total_hours.'</td>';
                                       echo  '<td colspan="2">'. $total_hours * $event_row["price"].'</td>';
                                       $total_1 += $total_hours * $event_row["price"];
                                    }

                                    if ($event_row["id"]==8) {
                                      echo  '<td colspan="2"></td>';
                                       echo  '<td colspan="2">'.$event_row["price"].'</td>';

                                       $total_1 += $total_hours * $event_row["price"];
                                    }

                                    if ($event_row["id"]==10) {
                                      echo  '<td colspan="2"></td>';
                                       echo  '<td colspan="2">'.$event_row["price"].'</td>';

                                       $total_1 += $total_hours * $event_row["price"];
                                    }
                                  echo '</tr></tbody>'; //1st foreach
                                 }



                                 //empty 

                                  echo '<tbody> <tr class="table-light">';
                                  echo  '<th colspan="2"></th>';
                                  echo  '<th colspan="2"></th>';
                                  echo    '<th colspan="2"></th>';
                                  echo    '<th colspan="2"></th>';
                                  echo    '<th colspan="2"></th>';

                                  echo '</tr></tbody>';
                                  //empty
                                 



                            ?>
                        <tbody>
                          <tr class="table-info">
                            <th colspan="6">TOTAL</th>
                            <th colspan="4"><?php echo  $total_1; ?></th>

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









     <div class="col-4 col-lg-4 col-md-4  col-sm-4">

    <div class="card my_apply_myform">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">
          Event Payment
        </a>
      </div>
           <div class="col-12 col-lg-12  col-md-12  col-sm-12">
                <div class="card-body">
                    <?php echo form_open("event/new_event/Event_controller/event_payment_create_form"); ?>
                    
                      <div class="col-lg-12 col-md-12  col-sm-12">
                            <!--student name start -->
                          <input type="hidden" name="total_event_payment" value="<?php echo $total_1;  ?>">

                           <div class="row">
                            <div class="col-lg-12 col-md-12  col-sm-12">
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                                <label class="label-material">Event</label>
                              </div>
                              <div class="col-lg-12 col-sm-12 col-mb-12">
                               <select name="event" class="form-control">

                                   <?php
                                    foreach($event_create['event']->result_array() as $row){   
    
                                    echo "<option value=".$row["id"].">".$row["e_name"]."</option>";
                                   }
                                 ?>
                               </select>
                               </div>
                            </div>
                         </div>
                         <hr>
                     <div class="row justify-content-md-center">
                          <div class="col-lg-8 col-sm-8 col-mb-8">
                                <div class="form-group-material i-checks ">
                                    <input id="client_signup" type="submit" name="btn_submit" class="input-material btn btn-info btn-lg active" role="button" aria-pressed="true" style="border-radius: 50px;" value="SUBMIT">
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


        
  </div> <!--row closs-->
 </div><!--according closs-->
</div>













