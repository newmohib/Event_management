

     $(function() {



    $("#division").change(function() {
        $.ajax({
           var division_id=$("#district").val();
            url: "http://localhost/complete_all_project/event/event_management/index.php/event/new_event/event_controller/district/division_id",
            type: "post",
            data: { "division": $(this).val() },
            success: function(data) {
                $("#district").html(data);
            }
        });
    });


    $("#district").change(function() {
        $.ajax({
            url: "pages/students/address_lib.php",
            type: "post",
            data: { "district": $(this).val() },
            success: function(data) {
                $("#police_station").html(data);
            }
        });
    });


    $("#police_station").change(function() {
        $.ajax({
            url: "pages/students/address_lib.php",
            type: "post",
            data: { "police_station": $(this).val() },
            success: function(data) {
                $("#post_office").html(data);
            }
        });
    });

   
/*

    //for present address

    $("#pre_division").change(function() {
        $.ajax({
            url: "pages/students/address_lib.php",
            type: "post",
            data: { "division": $(this).val() },
            success: function(data) {
                $("#pre_district").html(data);
            }
        });
    });


    $("#pre_district").change(function() {
        $.ajax({
            url: "pages/students/address_lib.php",
            type: "post",
            data: { "district": $(this).val() },
            success: function(data) {
                $("#pre_police_station").html(data);
            }
        });
    });


    $("#pre_police_station").change(function() {
        $.ajax({
            url: "pages/students/address_lib.php",
            type: "post",
            data: { "police_station": $(this).val() },
            success: function(data) {
                $("#pre_post_office").html(data);
            }
        });
    });

});


*/











//for ajax 
/*

     var value1 = 1;
 var value2 = 2;
 var value3 = 3;   
 $.ajax({
      type: "POST",
      contentType: "application/json; charset=utf-8",
      url: "yoururlhere",
      data: "{'data1':'" + value1+ "', 'data2':'" + value2+ "', 'data3':'" + value3+ "'}",
      success: function (result) {
           //do somthing here
      }
 });

   */


/*
   $('#c_select').change(function(){
    $.ajax({
        type:'post',
        url:'get_course_info_db.php',
        data: 'c_id='+ $(this).val(),                 
        success: function(reply_data1,reply_data2){
            $('#course_name').val(reply_data1);
            $('#course_credit').val(reply_data2);
        }
    }); 
}); 



<?php 
       include('db_connection.php'); 
       $c_id = $_POST['c_id'];
       $result = mysql_query("SELECT * FROM course WHERE c_id = '$c_id'"); 
       $all_course_data = mysql_fetch_array($result);
       $c_name = $all_course_data['c_name'];
       $c_credit = $all_course_data['c_credit']; 
       echo $c_name,$c_credit;
       exit();  
 ?>



*/