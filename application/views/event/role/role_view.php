<?php

if (isset($role_view)) {



   foreach($role_view->result_array() as $row){   

      //  $row["id"];
     //  $row["name"];
     //   $row["email"];
     //   $row["phone"];
     //   $row["address"];
    //    $row["username"];
      //  $row["password"];
     //   $row["create_date"];
    }

//echo $employee_show_all->num_rows();
?>

<div class="row justify-content-md-center">
  <header> 
  <h1 class="h3 display">Show All Role</h1>
  </header>

  <div class="col-lg-12">
                <div class="card my_apply_myform">
                  <div class="card-header">
                    <h4>Role</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table   table-hover ">
                         <caption><?php echo 'Number of Employ == '.$role_view->num_rows(); ?> </caption>
                        <thead>
                          <tr class="table-primary ">
                          <th>ID</th>
                          <th>Name</th>
                          <th>Create date</th>
                          <th>Creator ID</th>
                          <th>Create</th>
                          <th>Update</th>
                          <th>Delete</th>
                          <th>Select</th>
                          <th>Alter</th>

                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                        </thead>
<?php
   foreach($role_view->result_array() as $row){

         $create=$row["Ucreate"]==1 ? 'checked':'' ;
         $update=$row["Uupdate"]==1 ? 'checked':'' ;
         $delete=$row["Udelete"]==1 ? 'checked':'' ;
         $select=$row["Uselect"]==1 ? 'checked':'' ;
         $alter=$row["Ualter"]==1 ? 'checked':'' ;
?>



        
          <tbody>
           <tr>
                          <th scope='row'><?php echo $row["id"]; ?></th>
                          <td><?php echo  $row["name"];  ?> </td>
                          <td><?php echo  $row["date"]; ?></td>
                          <td><?php echo  $row["user_id"]; ?> </td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='view' <?php echo $create; ?>>
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='view' <?php echo $update; ?>>
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='view' <?php echo $delete; ?>>
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='view' <?php echo $select; ?>>
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                          <td>
                          <div class='form-group-material custom-control custom-checkbox custom-control-inline'>
                                <input type='checkbox' class='custom-control-input' id='check1' value='1' name='view' <?php echo $alter; ?>>
                                <label class='custom-control-label' for='check1'></label>
                            </div>
                          </td>
                          <td>
                            <?php
                              echo '<a class="btn btn-info" href='.base_url().'index.php/event/role/Role_controller/role_edit/'.$row["id"].'>Edit</a>';
                            ?>
                          </td>
                          <td>
                            <?php
                              echo '<a class="btn btn-info" href='.base_url().'index.php/event/role/Role_controller/role_delete/'.$row["id"].'>Delete</a>';
                            ?>
                         </td>
            </tr>
            

<?php   

    }

?>
                      </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
</div>



<?php

}
// if closs  $employee_show_all
  


if (isset($employee_show_indivitual)) {
?>


<div class="row">
  <header> 
  <h1 class="h3 display">Employ Information</h1>
  </header>
<div class="row">
  <div class="col-lg-6">
                <div class="card my_apply_myform">
                  <div class="card-header">
                    <h4>Employ Basic Informaton</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-sm table-hover ">
                         <caption><?php echo 'Number of Employ == '.$employee_show_indivitual->num_rows(); ?> </caption>
                        <thead>
                          <tr class="table-primary ">
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                          </tr>
                        </thead>
<?php
   foreach($employee_show_indivitual->result_array() as $row){   

        echo '<tbody><tr class="table-light">';

        echo '<td>'.$row["id"].'</td>';
        echo '<td>'.$row["name"].'</td>';
        echo '<td>'.$row["email"].'</td>';
        echo '<td>'.$row["phone"].'</td>';
        echo '<td>'.$row["address"].'</td>';
        echo '</tbody></tr>';

    }

?>
                      </table>
                    </div>
                  </div>
            </div>
        </div>
<!-- new table-->
  <div class="col-lg-6">
                <div class="card my_apply_myform">
                  <div class="card-header">
                    <h4>User Information</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered table-sm table-hover ">
                         <caption><?php echo 'Number of Employ == '.$employee_show_indivitual->num_rows(); ?> </caption>
                        <thead>
                          <tr class="table-primary ">
                            <th>Username</th>
                            <th>Password</th>
                            <th>Date</th>
                            <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                        </thead>
<?php
   foreach($employee_show_indivitual->result_array() as $row){   

        echo '<tbody><tr class="table-light">';

         echo '<td>'.$row["username"].'</td>';
        echo '<td>'.$row["password"].'</td>';
        echo '<td>'.$row["create_date"].'</td>';
        echo '<td><a href='.base_url().'index.php/event/employee/Employee_controller/employee_show_indivitual_controller/'.$row["id"].'>View</a></td>';
        echo '<td><a href='.base_url().'index.php/event/employee/Employee_controller/employee_edit_controller'.$row["id"].'>Edit</a></td>';
        echo '<td><a href='.base_url().'index.php/event/employee/Employee_controller/employee_delete_controller/'.$row["id"].'>Delete</a></td>';
        echo '</tbody></tr>';

    }

?>
                      </table>
                    </div>
                  </div>
            </div>
        </div>

</div>
</div>









<?php

}
// if closs  $employee_show_indivitual

?>