
<?php
   foreach($role_edit_data->result_array() as $row){

         $create=$row["Ucreate"]==1 ? 'checked':'' ;
         $update=$row["Uupdate"]==1 ? 'checked':'' ;
         $delete=$row["Udelete"]==1 ? 'checked':'' ;
         $select=$row["Uselect"]==1 ? 'checked':'' ;
         $alter=$row["Ualter"]==1 ? 'checked':'' ;

         
         // echo $row["Ucreate"];
         // echo $row["Uupdate"];
         // echo $row["Udelete"];
         // echo $row["Uselect"];
         // echo $row["Ualter"];
  }
?>


<div class="row">
        <label class="col-sm-2 form-control-label"></label>
        <div class="col-12 col-lg-8  col-md-8  col-sm-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h4>Role Update</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo base_url();?>index.php/event/role/Role_controller/role_update" method="post">
                        <input type="hidden" name="role_update_id" value="<?php echo $row["id"]; ?>">
                        <div class="col-lg-11 col-md-11  col-sm-10">
                            <div class="form-group-material">
                                <input id="role-name" type="text" name="role_name" required class="input-material" value="<?php echo $row["name"]? $row["name"]:'' ; ?>">
                                <label for="role-name" class="label-material">Name</label>
                            </div>
                            <div class="form-group-material">
                                <input id="roll-user" type="password" name="user_password" required class="input-material">
                                <label for="roll-user" class="label-material">User Password</label>
                            </div>
                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" style="" id="check1" value="1" name="select" <?php echo $select ; ?>>
                                <label class="custom-control-label" for="check1">View</label>
                            </div>

                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="check2" value="1" name="create" <?php echo $create ; ?>>
                                <label class="custom-control-label" for="check2">Create</label>
                            </div>
                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="check3" value="1" name="update" <?php echo $update ; ?>>
                                <label class="custom-control-label" for="check3">Update</label>
                            </div>
                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="check4" value="1" name="delete" <?php echo $delete ; ?>>
                                <label class="custom-control-label" for="check4">Delete</label>
                            </div>
                            <div class="form-group-material custom-control custom-checkbox custom-control-inline">
                                <input type="checkbox" class="custom-control-input" id="check5" value="1" name="alter" <?php echo $alter ; ?>>
                                <label class="custom-control-label" for="check5">Alter</label>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" value="Update" class="btn btn-primary  btn-lg" name="role_submit">
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>