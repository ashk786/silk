<?php

include "connect.php";
ini_set('display_errors',1);

//echo "Hello";
           $first_name = mysqli_real_escape_string($db ,$_POST['first_name']); // Fetching all the vlues from first page
           $middle_name = mysqli_real_escape_string($db ,$_POST['father_husband_name']);
           $land_line = mysqli_real_escape_string($db, $_POST['land_line']);
           $gender = mysqli_real_escape_string($db, $_POST['gender']);
           $aadhar = mysqli_real_escape_string($db, $_POST['aadhar']);
           $caste = mysqli_real_escape_string($db, $_POST['caste']);
           $cas=$_POST['othercaste'];
           if(($cas)!=null)
           {
            $caste= mysqli_real_escape_string($db, $_POST['othercaste']);

           }
           $mobile=$_POST['mob'];
        

           $capacity = mysqli_real_escape_string($db, $_POST['capacity']);
           $year = mysqli_real_escape_string($db, $_POST['yr']);
           $state = mysqli_real_escape_string($db, $_POST['state_value']);
           $district = mysqli_real_escape_string($db,$_POST['district_value']);
           $taluk=mysqli_real_escape_string($db,$_POST['Taluk']);
           $strvil=mysqli_real_escape_string($db,$_POST['str_vil']);
           $doorno=mysqli_real_escape_string($db,$_POST['doorno']);
           $areloc=mysqli_real_escape_string($db,$_POST['are_loc']);
           $otherDetails = mysqli_real_escape_string($db, $_POST['text1']);
           $kind = mysqli_real_escape_string($db,$_POST['silkvariety']);
           $sector = mysqli_real_escape_string($db,$_POST['sector']);
           $type = mysqli_real_escape_string($db ,$_POST['govt']);
           $ownership =mysqli_real_escape_string($db ,$_POST['own']);
           $garden = mysqli_real_escape_string($db ,$_POST['ow']);
           $capacity = mysqli_real_escape_string($db ,$_POST['capacity']);
           $acerage = mysqli_real_escape_string($db,$_POST['acr']);
           $variety = mysqli_real_escape_string($db,$_POST['acrvar']);
           $house_sep = mysqli_real_escape_string($db,$_POST['house_sep']);
           $file1=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
           $file2=addslashes(file_get_contents($_FILES["sign"]["tmp_name"]));
           /*$stmt = "INSERT INTO pdetails(fname,mobile) VALUES ($firstname, $mobile)";
           if(mysqli_query($db,$stmt))
              echo "Successful";
          else {
            echo "Unsuccessful";
          }*/
          $stmt = "INSERT INTO `fresh_cp`(`mobile`, `fname`, `fhname`, `landline`, `gender`, `aadhar`, `caste`, `doorno`, `strvil`, `areloc`, `state`, `district`, `taluk`, `capacity`, `establishmentyear`, `otherdet`, `wormrace`, `sector`, `applicant_type`, `ownership`, `mg_hp`, `acreage`, `variety`, `house_sep`,`photo`, `sign`) VALUES ('$mobile','$first_name','$middle_name','$land_line','$gender','$aadhar','$caste','$doorno','$strvil','$areloc','$state','$district','$taluk','$capacity','$year','$otherDetails','$kind','$sector','$type','$ownership','$garden','$acerage','$variety','$house_sep','$file1','$file2')";
          if(mysqli_query($db,$stmt))
          {
              echo "Successful in updating details";
               header("Refresh:40;url=silk/payment.php");}
          else {
           echo "Error:<br>" . mysqli_error($db);
          }
        // $stmt1 = "INSERT INTO rcspplot(mobile,kind,sector,type,ownership,specify,mulberry_garden,capacity,acreage,variety)VALUES ('$mobile','$kind','$sector','$type','$ownership','$house_sep','$garden','$capacity','$acerage','$variety')";

    //       if(mysqli_query($db,$stmt1)){
    //           echo "Successfully Updated plot details";
    //           header("Refresh:40;url=silk/payment.php");}
    //       else {
    //      echo "Error: <br>" . mysqli_error($db);
    //  }

    //  $file1=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    //  $file2=addslashes(file_get_contents($_FILES["sign"]["tmp_name"]));
    //  $query = "UPDATE rcspplot SET photo = '$file1' , sign ='$file2'  WHERE mobile= '$mobile' ";
    //  if(mysqli_query($db,$query))
    //      echo "Successfully Updated plot details";
    //  else {
    // echo "Error: " . $sql . "<br>" . mysqli_error($db);
// }
           /*if($stmt-execute())
                echo "Database Updated";
          else {
/*INSERT INTO rcpplot(mobile,kind,sector,type,ownership,specify,mulberry_garden,capacity,acerage,variety)
                      VALUES (962097106,'kind','sector','type','ownership','house_sep','garden','capacity','acerage','variety')            echo "Failed to update";*/

//  mkdir('uploads/'.$first_name);

// $target= 'uploads/'.$first_name.'/';

// $target_file1 = $target . basename($_FILES['image']['name']);
// $target_file2 = $target . basename($_FILES['sign']['name']);

// $temp_name1=$_FILES['image']['tmp_name'];  
// $temp_name2=$_FILES['sign']['tmp_name']; 

// // $name = basename($_FILES["fileto"]["name"]);
// $r1=move_uploaded_file($temp_name1, "$target_file1");
// $r2=move_uploaded_file($temp_name2, "$target_file2");

// if ($r1 and $r2) {
//     echo "successfully uploaded ";
// } else {
// echo "\nfile ";
// header("Refresh:40;url=rcsp.php");
// }


// $query="INSERT INTO `img`(`imgmob`, `imgpath`) VALUES ('$mobile','$target_file1'),('$mobile','$target_file2')";
// $res=mysqli_query($db,$query);
// if($res)
// {
//     echo "jieje";
//     header("Refresh:40;url=ddede.php");
// }

?>
