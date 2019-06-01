<?php

include "connect.php";
ini_set('display_errors',1);

echo "Hello";
           $first_name = mysqli_real_escape_string($db ,$_POST['first_name']); // Fetching all the vlues from first page
           $middle_name = mysqli_real_escape_string($db ,$_POST['father_husband_name']);
          $land_line = mysqli_real_escape_string($db, $_POST['land_line']);
           $capacity = mysqli_real_escape_string($db, $_POST['capacity']);
           $year = mysqli_real_escape_string($db, $_POST['yr']);
           $door_no = mysqli_real_escape_string($db,$_POST['doorno']);
           $prod_door_no = mysqli_real_escape_string($db,$_POST['prod_doorno']);
           $street_vil = mysqli_real_escape_string($db,$_POST['str_vil']);
           $prod_street_vil = mysqli_real_escape_string($db,$_POST['prod_str_vil']);
           $prod_district = mysqli_real_escape_string($db,$_POST['prod_district_value']);
           $state = mysqli_real_escape_string($db, $_POST['state_value']);
           $prod_state = mysqli_real_escape_string($db,$_POST['prod_state_value']);
           $taluk = mysqli_real_escape_string($db, $_POST['Taluk']);
           $prod_taluk = mysqli_real_escape_string($db,$_POST['prod_Taluk']);
           $train_place = mysqli_real_escape_string($db,$_POST['train_place']);
           $train_period = mysqli_real_escape_string($db,$_POST['train_period']);
          // $prod_district = mysqli_real_escape_string($db,$_POST[''])
           $area = mysqli_real_escape_string($db, $_POST['are_loc']);
           $prod_area = mysqli_real_escape_string($db, $_POST['are_loc']);
           $otherDetails = mysqli_real_escape_string($db,$_POST['text1']);

            //$sql = "INSERT INTO "
           $district = mysqli_real_escape_string($db,$_POST['district_value']);
           $taluk = mysqli_real_escape_string($db,$_POST['Taluk']);
           $otherDetails = mysqli_real_escape_string($db, $_POST['text1']);
           $kind = mysqli_real_escape_string($db,$_POST['silkvariety']);
           $sector = mysqli_real_escape_string($db,$_POST['sector']);
           $type = mysqli_real_escape_string($db ,$_POST['govt']);
           $ownership =mysqli_real_escape_string($db ,$_POST['own']);
           //$garden = mysqli_real_escape_string($db ,$_POST['ow']);
           //$capacity = mysqli_real_escape_string($db ,$_POST['capacity']);
           //$house_sep = mysqli_real_escape_string($db,$_POST['house_sep']);
          $prod_pin = mysqli_real_escape_string($db,$_POST['prod_pin']);
          $prod_level = mysqli_real_escape_string($db,$_POST['prod_level']);
           $prod_facilities = mysqli_real_escape_string($db,$_POST['prod_facilities']);
           $number_employees = mysqli_real_escape_string($db,$_POST['number_employees']);
           $quantity = mysqli_real_escape_string($db,$_POST['quantity_proposed']);
           $aadhar = mysqli_real_escape_string($db,$_POST['aadhar']);

           /*$stmt = "INSERT INTO pdetails(fname,mobile) VALUES ($first_name, $mobile)";
           if(mysqli_query($db,$stmt))
              echo "Successful";
          else {
            echo "Unsuccessful";
          }*/
          $mobile = 97620809;
          $stmt = "INSERT INTO pdetails(fname,mobile,aadhar,father,mail_door_no,mail_area,mail_taluk,mail_district,mail_state) VALUES ('$first_name','$mobile','$aadhar','$middle_name','$door_no','$area','$taluk','$district','$state')";
          if(mysqli_query($db,$stmt))
              echo "Successful in updating pdetails";
          else {
           echo "Error: " . $sql . "<br>" . mysqli_error($db);
         }
          $stmt1 = "INSERT INTO rspplot(plot_door_no,plot_street,plot_area,plot_taluk,plot_district,plot_state,plot_pin,place_of_training,period_of_training,sector,type,kind,capacity,quantity,year,present,building,facilities,no_of_employees,any_other_details,mobile)
                      VALUES
      ('$prod_door_no','$prod_street_vil','$prod_area','$prod_taluk','$prod_district','$prod_state','$prod_pin','$train_place','$train_period','$sector','$type','$kind','$capacity','$quantity','$year','$prod_level','$ownership','$prod_facilities','$number_employees',
        '$otherDetails','$mobile')";

          if(mysqli_query($db,$stmt1))
              echo "Successfully Updated plot details";
          else {
         echo "Error: " . $sql . "<br>" . mysqli_error($db);


     }

     mkdir('uploads/'.$first_name);

    $target= 'uploads/'.$first_name.'/';

    $target_file1 = $target . basename($_FILES['image']['name']);
    $target_file2 = $target . basename($_FILES['sign']['name']);

    $temp_name1=$_FILES['image']['tmp_name'];
    $temp_name2=$_FILES['sign']['tmp_name'];

    // $name = basename($_FILES["fileto"]["name"]);
    $r1=move_uploaded_file($temp_name1, "$target_file1");
    $r2=move_uploaded_file($temp_name2, "$target_file2");

    if ($r1 and $r2) {
        echo "successfully uploaded ";
    } else {
    echo "\nfile ";
    header("Refresh:40;url=rcsp.php");
    }
    $query="UPDATE rspplot set imgpath='$target_file1',signpath='$target_file2')";
    $res=mysqli_query($db,$query);
    if($res)
    {
        echo "jieje";
        header("Refresh:40;url=ddede.php");
    }

?>
