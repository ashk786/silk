<?php

include "connect.php";
ini_set('display_errors',1);


           $first_name = mysqli_real_escape_string($db ,$_POST['first_name']); 
           $gender = mysqli_real_escape_string($db ,$_POST['gender']); 
           
           $father_husband_name = mysqli_real_escape_string($db ,$_POST['father_husband_name']);
           $aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);
           $land_line = mysqli_real_escape_string($db, $_POST['land_line']);
           $doorno = mysqli_real_escape_string($db, $_POST['doorno']);
           $str_vil = mysqli_real_escape_string($db, $_POST['str_vil']);
           $are_loc = mysqli_real_escape_string($db, $_POST['are_loc']);
           $Taluk = mysqli_real_escape_string($db, $_POST['Taluk']);
           $state_value = mysqli_real_escape_string($db,$_POST['state_value']);
           $district_value = mysqli_real_escape_string($db,$_POST['district_value']);
           $pincode = mysqli_real_escape_string($db,$_POST['pincode']);
           
           $doorno1 = mysqli_real_escape_string($db, $_POST['doorno1']);
           $str_vil1 = mysqli_real_escape_string($db, $_POST['str_vil1']);
           $are_loc1 = mysqli_real_escape_string($db, $_POST['are_loc1']);
           $Taluk1 = mysqli_real_escape_string($db, $_POST['Taluk1']);
           $state_value1 = mysqli_real_escape_string($db,$_POST['state_value1']);
           $district_value1 = mysqli_real_escape_string($db,$_POST['district_value1']);
           $pincode1 = mysqli_real_escape_string($db,$_POST['pincode1']);
           
           $pot = mysqli_real_escape_string($db,$_POST['pot']);
           $peot = mysqli_real_escape_string($db,$_POST['peot']);
           
           $sector = mysqli_real_escape_string($db,$_POST['sector']);
           $govt = mysqli_real_escape_string($db,$_POST['govt']);
           $silkvariety = mysqli_real_escape_string($db,$_POST['silkvariety']);
           $capacity = mysqli_real_escape_string($db ,$_POST['capacity']);
           $quantity = mysqli_real_escape_string($db ,$_POST['quantity']);
           $acerage = mysqli_real_escape_string($db,$_POST['acr']);
           $variety = mysqli_real_escape_string($db,$_POST['acrvar']);
           $yr = mysqli_real_escape_string($db ,$_POST['yr']);
           $ownership =mysqli_real_escape_string($db ,$_POST['own']);
           $facility =mysqli_real_escape_string($db ,$_POST['facility']);
           $noofemp =mysqli_real_escape_string($db ,$_POST['noofemp']);
           $other =mysqli_real_escape_string($db ,$_POST['other']);
           
           
     $file1=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
     $file2=addslashes(file_get_contents($_FILES["sign"]["tmp_name"]));
     $file3=addslashes(file_get_contents($_FILES["train"]["tmp_name"]));
          
        


           
          $mobile = 6620000000;
          $stmt = "INSERT INTO pdetails(fname,gender,father,mobile,landline,mail_door_no,mail_area,mail_village,mail_taluk,mail_district,mail_state,mail_pin,aadhar) VALUES ('$first_name','$gender','$father_husband_name','$mobile','$land_line','$doorno','$are_loc','$str_vil','$Taluk','$district_value','state_value','$pincode','$aadhar')";
          if(mysqli_query($db,$stmt))
              echo "Successful in updating pdetails";
          else {
           echo "Error: " . $sql . "<br>" . mysqli_error($db);
          }
         
     
     $query = "UPDATE rcrplot SET photo = '$file1' , sign ='$file2' , training_proof='$train' WHERE mobile= '$mobile' ";
     if(mysqli_query($db,$query))
         echo "Successfully Updated photo details";
     else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
}
           


?>
