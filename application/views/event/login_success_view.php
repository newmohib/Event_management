<h1>Login successfull</h1>


<?php  

                   $username = $this->session->userdata('username');
		           $password = $this->session->userdata('password');
		           $id = $this->session->userdata('id');
		           $role_id = $this->session->userdata('role_id');

		           echo "$username $password $id $role_id ";

?>