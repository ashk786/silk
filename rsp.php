<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Application For Registration / Renewal As a Chawki SilkWorm Rearer</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="state.js"></script>
<script src="prod_state.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
      <link rel="stylesheet" href="style.css">

<style>
  .rad{
  width:30px !important;display:inline !important;
}


input[type=number]::-webkit-inner-spin-button{
  display:none;
}
table {
  width:100%;
}
table,th,td,tr{
  border:2px solid black;
  height:20px;

}
table th{
  font-weight:bold;color:red;padding:5px;
}
table td{
  color:purple;font-weight:bold;font-family:helvetica;font-size:14px;width:50%;text-align:left;padding:5px;
}
.review{
  color:black;font-weight:bold;font-family:helvetica;
}

input[type=number] {
    -moz-appearance:textfield;
}

input[type=number]::-webkit-outer-spin-button{
  display:none;
}
label{
  font-weight:550 !important;padding:10px;padding-left:0px;
}
.*:invalid{
  color:red;
}

  </style>
</head>

<body>


  <center><h1 class="mainhead">Application For Registration / Renewal As a SilkWorm Seed Cocoon Producer</h1></center>

<form class="steps" action="rspprocess.php" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
  <ul id="progressbar">
    <li class="active">Personal Details</li>
     <li>Mailing Details </li>
    <li>Cultivational Details</li>
    <li>Photo Upload</li>
    <li>Review</li>
    <li>Payment Details</li>
  </ul>



  <!-- USER INFORMATION FIELD SET -->
  <fieldset>
    <h2 class="fs-title">Personal Details</h2>
    <!-- Begin What's Your First Name Field -->
  सेवा में  To<br>
  अध्यक्ष  The Chairperson<br>
  रजिस्ट्रेशन समिति  Registration Committee<br>
  केंद्रीय रेशम बोर्ड  Central Silk Board<br>
  बेंगलुरु  Bengaluru<br>
    <br><br>
            <label>आवेदक का नाम<br>Name of the Applicant</label><br>
            <input type="text" name="first_name" placeholder="Enter full name" required>
            <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
              <label>पिता/ माता/ पति का नाम <br>Father / Mother / Husband Name</label>
              <input  type="text" name="father_husband_name" placeholder="Enter Father/Husband name " required>
              <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          <label>आधार संख्या<br>Aadhar No. of the Applicant</label><br>
          <input type="number"minlength=12 maxlength=12 name="aadhar" placeholder="Enter aadhar number" required>
          <span class="error1" style="display: none;">
            <i class="error-log fa fa-exclamation-triangle"></i>
        </span>
                <label>दूरभाषा संख्या लैंड लाइन (एसटीडी कोड के साथ) LandLine Number</label><input   type="number" name="land_line"  placeholder="Enter Landline number" minlength="10" maxlength="10">

                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          <label>क्षेत्र  Gender</label><br><br>
           <input  type="radio" name="gender" class="rad" value="Male">Male
            <input  type="radio" name="gender" class="rad" value="Femaler">Female

          <br><br>

        </div>



    <!-- End Total Number of Constituents in Your Database Field -->
    <input  type="button" data-page="1" name="next" class="next action-button" value="Next" />
  </fieldset>
  <fieldset>
    <h2 class="fs-title">डाक पता<br> Mailing Details</h2>
    <!-- Begin What's Your First Name Field -->

    <label >House Address</label><br>
<label>कमरा सं Door No</label>
<input  type="text" name="doorno" placeholder="Enter Door No">

<label>गली/गांव Street/Village</label>
<input  type="text" name="str_vil" placeholder="Enter Street /Village name" required>    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

<label>स्थान Area/Locality</label>
<input  type="text" name="are_loc" placeholder="Enter Area/Locality name" required>
<span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>


    <!-- <textarea  name="address" placeholder="Your Address" required></textarea> -->
          <label>राज्य Select State</label>
           <div id="selection">
              <select id="listBox"  onclick='selct_district(this.value)' name="state_value" required></select><br><br>
              <label>जिला Select District:</label>
              <select id='secondlist' name="district_value" required></select>    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
              <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

            <div id="dumdiv"  style=" font-size: 10px;color: #dadada;">
            <a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;"> </a>
            </div>
           </div>

<label>जिला Taluk</label>
<input  type="text" name="prod_Taluk" placeholder="Enter Taluk name" required>
<label>पिन Pin</label>
<input  type="number" name="prod_pin" maxlength=6 placeholder="Enter PIN">
<span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>


    <!-- End Total Number of Constituents in Your Database Field -->
    <input  type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input  type="button" data-page="2" name="next" class="next action-button" value="Next" />
  </fieldset>



  <!-- ACQUISITION FIELD SET -->
  <fieldset>
    <h2 class="fs-title">Cultivational Details</h2>


    <label>स्थापना वर्ष Year Of Establishment</label>
    <input  type="number" name="yr" id="yr" placeholder="Enter Year" max="2020" min="1900" pattern="^(19|20)\d{2}$" required>
    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
    <label >उत्पादन केंद्र का पता  Address of Production Cenre</label><br>
<label>कमरा सं Door No</label>
<input  type="text" name="prod_doorno" placeholder="Enter Door No">

<label>गली/गांव Street/Village</label>
<input  type="text" name="prod_str_vil" placeholder="Enter Street /Village name" required>    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>


<label>स्थान Area/Locality</label>
<input  type="text" name="prod_are_loc" placeholder="Enter Area/Locality name" required>
<span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>


    <!-- <textarea  name="address" placeholder="Your Address" required></textarea> -->
          <label>राज्य Select State</label>
           <div id="prod_selection">
              <select id="prod_listBox"  onclick='selct_prod_district(this.value)' name="prod_state_value" required></select><br><br>
              <label>Select District:</label>
              <select id='prod_secondlist' name="prod_district_value" required></select>    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
              <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

            <div id="prod_dumdiv"  style=" font-size: 10px;color: #dadada;">
            <a id="prod_dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;"> </a>
            </div>
           </div>

<label>जिल Taluk</label>
<input  type="text" name="Taluk" placeholder="Enter Taluk name" required>
<span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
<label>स्थान Area/Locality</label>
<input  type="text" name="prod_are_loc" placeholder="Enter Area/Locality name" required>
<label>परिक्षण का स्थान  Place of Training</label>
<input  type="text" name="train_place" placeholder="Enter Place of Training" required>
<label>प्रशिक्षण अवधि  Period of Training</label>
<input  type="text" name="train_period" placeholder="Enter Period of Training" required>

<br><br>
<label>क्षेत्र  Select sector</label><br><br>
 <input  type="radio" name="sector" class="rad" value="Mulberry">Mullberry
  <input  type="radio" name="sector" class="rad" value="Tasar"> Tasar
  <input  type="radio" name="sector" class="rad" value="Oak Tasar"> Oak Tasar
  <input  type="radio" name="sector" class="rad" value="Eri"> Eri
  <input  type="radio" name="sector"  class="rad" value="Muga">Muga </span>

<br><br>
<label>आवेदक का प्रकार  Select Applicant Type</label><br>
<br><input  type="radio" name="govt" value="Government" class="rad">State Government
<input  type="radio" name="govt" value="Private" class="rad"> Private
<input  type="radio" name="govt" value="NGO" class="rad"> NGOs
<input  type="radio" name="govt" value="CSB" class="rad"> CSB
<br><br>
<label>विक्रय करने के लिए चौकी कीटपालन करने हेतु प्रस्तावित रेशमकीट बीक की किस्म/उपजाति (संयोजन बताये ) Kind or Variety of pure silkworm race</label>
<select  name="silkvariety">
  <?php
  include "connect.php";
  $query="SELECT name from silkvariety where 1";
  $res=mysqli_query($db,$query);

  while($varres=mysqli_fetch_array($res))
  {
    echo "<option>".$varres['name']."</option>";
  }
  ?>
  </select>
   <!-- <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span> -->
   <br><br>
   <label>रेशाम्बीज़ उत्पादन केंद्र की क्षमता Capacity of the silkworm seed production unit House</label>
   <input  type="number" name="capacity" placeholder="Enter Capacity" pattern="[0-9]*" required>
   <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

  <br><br>
  <label>कोई अन्य विवरण Other Details</label>
  <textarea   name="text1" placeholder="Details"></textarea>


    <label>वर्त्तमान उत्पादन स्तर (लाखों में ) Present Production Level (in lakhs)</label>
    <input  type="number" name="prod_level" placeholder="Production Level" required>
    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
    <label>भवन स्वामित्व का प्रकार Building Ownership Type</label>
    <br><br>
    <input  type="radio" name="own" value="Own" class="rad"> Own
    <input  type="radio" name="own" value="Leased" class="rad"> Leased
    <input  type="radio" name="own" value="Rented" class="rad"> Rented

    <label>उत्पादित किये जाने हेतु प्रस्तावित रेशमकीट बीज की किस्म / उपजाति   Quantity of silkworm proposed to be produced</label>
    <input  type="text" name="quantity_proposed" placeholder="Enter Proposed Quanyyy" required>

    <label>उत्पादित इकाई में उपलब्ध सुविधाएं <br> Facilities availible at the Production Unit</label>
    <input  type="textarea" name="prod_facilities" placeholder="Facilities" required>
    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

    <label>इस आवेदन की तारीख को कार्यरत  कर्मचारी / कामगारों की संख्या <br>Number of Employees/workers working as on the date of this application</label>
    <input  type="text" name="number_employees" placeholder="No. of Employees Working" required>
    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

    <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
    <input  type="button" data-page="3" name="previous" class="previous action-button" value="Previous" />
    <input  type="button" data-page="3" name="next" class="next action-button" value="Next" />
  </fieldset>



  <!-- Cultivation FIELD SET -->
  <fieldset>
    <h2 class="fs-title">Photo Upload</h2>
      <!-- Begin Average Gift Size in Year 1 Field -->
        <div class="form-item webform-component webform-component-textfield hs_average_gift_size_in_year_1 field hs-form-field" id="edit-submitted-cultivation-amount-1 average_gift_size_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">

         <tr><td>
	<br><font size="05px">Upload Your Photo:<br></span>
                </font>
                  <input  type="file" name="image" class="filein" id="files" accept=".jpeg , .jpg"  data-msg-required="upload your photo please" required><span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span></td><td>

                  <img id="image"  width="200" height="200"><br><br></td></tr>

                  <script>
                  document.getElementById("files").onchange = function () {
                var fileInput= document.getElementById("files");
               var filePath = fileInput.value;
               var allowedExtensions = /(\.jpg|\.jpeg|\.gif)$/i;
                  if(!allowedExtensions.exec(filePath)){
                      alert("Please upload file having extensions .jpeg/.jpg/.png/.gif only.");
              fileInput.value = "";
                   };
                  var reader = new FileReader();
                  reader.onload = function (e) {
                      // get loaded data and render thumbnail.
                      document.getElementById("image").src = e.target.result;

                  };
                  // read the image file as a data URL.
                  reader.readAsDataURL(this.files[0]);
              };

              </script>

              <script>
                  function fileValidation(){
          var fileinput= document.getElementById("files");
          var filePath = fileInput.value;
          var allowedExtensions = /(\.jpg|\.jpeg|\.gif)$/i;
          if(!allowedExtensions.exec(filePath)){
              alert("Please upload file having extensions .jpeg/.jpg/.png/.gif only.");
              fileInput.value = "";
              return false;
          };
        };
              </script>
              <tr><td>
              <br><font size="05px">Upload Your Sign:<br></span>
                  </font>
                  <input type="file"  class="filein" name="sign" id="sign" accept=".jpeg , .jpg" data-msg-required="Please Upload Your Signature" required><span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span></td><td>
                  <img id="sig"  width="200" height="100"><br><br></td></tr>
                  <script>
                 document.getElementById("sign").onchange = function () {


                      var reader = new FileReader();

                      reader.onload = function (e) {
                          // get loaded data and render thumbnail.
                          document.getElementById("sig").src = e.target.result;
                      };

                      // read the image file as a data URL.
                      reader.readAsDataURL(this.files[0]);
                  };
             </script>
             <tr><td>
             <br><font size="05px">Upload Your Training Details:<br></span>
                 </font>
                 <input type="file"  class="filein" name="train" id="train" accept=".jpeg , .jpg , .pdf" data-msg-required="Please Upload Your Training Details" required><span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span></td><td>
                 <br><br></td></tr>
             <tr><td>


<br><b><h2><center>Declaration<hr></center></h2></b></center>
I declare that the information given above is true to the best of my knowledge and belief and no part thereof is false<br>
<center>
  <input type="checkbox" name="terms" id="terms" class="rad" data-msg-required="Agree To The Terms And Conditions" onchange="activateButton(this)" required>  I Agree Terms & Coditions </input>
  <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>

        </div>
        <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
    <input  type="button" data-page="4" name="next" class="next action-button" value="Next" />
                </fieldset>
        <!-- End Average Gift Size in Year 1 Field -->

  <!-- Cultivation2 FIELD SET -->
  <fieldset>
    <script>
          function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
        reader.onload = function(e) {
          $('#photo').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);}
        }
      $("#files").change(function() {
      readURL(this);
      });
    </script>
     <script>
          function readUR(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();
        reader.onload = function(e) {
          $('#signature').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);}
        }
      $("#sign").change(function() {
      readUR(this);
      });
    </script>
    <h2 class="fs-title" id="review">Review</h2>



              <!-- Begin Total Giving In Year 1 Field -->
              <div id="images" style="float:left;"><table><tr><td><img id="photo" src="#" width="150" height="150"/><center><p>Photo</p></center></td><td>
              <img id="signature" src="#" width="150" height="150"/><center><p>Signature</p></center></td></tr></table>
            </div>
        <div  id="review" class="review"></div>
        <div id="ret"></div>
        <!-- End Total Giving In Year 1 Field -->
</div>


<br><br>


    <input  type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />

    <input  type="submit" style="width:100%" data-page="5" name="next" class="next action-button" value="Proceed To Payment" />
  </fieldset>

</form>

  <!-- RETENTION FIELD SET -->
  <!-- <fieldset>
    <h2 class="fs-title">Payment Details</h2>

          <div class="form-item webform-component webform-component-textfield hs_number_of_donors_in_year_1 field hs-form-field" id="webform-component-retention--amount-1">


          </div>
    <input  type="button" data-page="5" name="previous" class="previous action-button" value="Previous" />
    <input  id="submit" class="hs-button primary large action-button next" type="submit" value="Submit">
</fieldset> -->


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
<script src='https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.js'></script>



    <script  src="index.js"></script>


    <script>

      document.onchange=function(){
       var uname= document.querySelector('input[name="first_name"]').value;
        var fhname=document.querySelector('input[name="father_husband_name"]').value;
        var landline=document.querySelector('input[name="land_line"]').value;
        var capacity=document.querySelector('input[name="capacity"]').value;
        var yr=document.querySelector('input[name="yr"]').value;
        var doorno=document.querySelector('input[name="doorno"]').value;
        var prod_doorno = document.querySelector('input[name="prod_doorno"]').value;
        var strvil=document.querySelector('input[name="str_vil"]').value;
        var prod_strvil=document.querySelector('input[name="prod_str_vil"]').value;
        var areloc=document.querySelector('input[name="are_loc"]').value;
        var prod_areloc=document.querySelector('input[name="prod_are_loc"]').value;
       var state= document.querySelector('select[name="state_value"]').value;
       var prod_state= document.querySelector('select[name="prod_state_value"]').value;
       var district= document.querySelector('select[name="district_value"]').value;
       var prod_district= document.querySelector('select[name="prod_district_value"]').value;
       var taluk= document.querySelector('input[name="Taluk"]').value;
       var prod_taluk= document.querySelector('input[name="prod_Taluk"]').value;
       var otherdet= document.querySelector('textarea[name="text1"]').value;
      // var otherdet= document.querySelector('textarea[name="text1"]').value;
       var prod_level= document.querySelector('input[name="prod_level"]').value;
       var prod_facilities= document.querySelector('input[name="prod_facilities"]').value;
       var number_employees= document.querySelector('input[name="number_employees"]').value;
       var train_place= document.querySelector('input[name="train_place"]').value;
       var train_period= document.querySelector('input[name="train_period"]').value;
       var aadhar= document.querySelector('input[name="aadhar"]').value;



       document.getElementById("review").innerHTML="<table><thead><th colspan='2' rowspan='2'>REVIEW OF THE APPLICATION FORM</th></thead><tbody><tr><td>name</td><td>"+uname+"</td></tr><tr><td>father/husband name</td><td>"+fhname+"</td></tr><tr><td>landline no</td><td>"+landline+"</td></tr><tr><td>Aadhar No.</td><td>"+aadhar+"</td></tr><tr><td>capacity of the rearing house</td><td>"+capacity+"</td></tr><tr><td>year of establishment</td><td>"+yr+"</td></tr><tr><td>Mailing Address</td></tr><tr><td>Door No.</td><td>"+doorno+"</td></tr><tr><td>Street/Village</td><td>"+strvil+"</td></tr><tr><td>Area/Locality</td><td>"+areloc+"</td></tr><tr><td>State</td><td>"+state+"</td></tr><tr><td>District</td><td>"+district+"</td></tr><tr><td>Taluk</td><td>"+taluk+"</td></tr><tr><td>Production Details</td></td><tr><td>Door No</td><td>"+prod_doorno+"</td></tr><tr><td>Street/Village</td><td>"+prod_strvil+"</td></tr><tr><td>Area/Locality</td><td>"+prod_areloc+"</td></tr><tr><td>State</td><td>"+prod_state+"</td></tr><tr><td>District</td><td>"+prod_district+"</td></tr><tr><td>Taluk</td><td>"+prod_taluk+"</td></tr><tr><td>Period of Training</td><td>"+train_period+"</td></tr><tr><td>Place of Training</td><td>"+train_place+"</td></tr><tr><td>Other Details</td><td>"+otherdet+"</td></tr><tr><td>Other Details</td><td>"+otherdet+"</td></tr><tr><td>Production Levels</td><td>"+prod_level+"</td></tr><tr><td>Production Facilities</td><td>"+prod_facilities+"</td></tr><tr><td>Number of Employees</td><td>"+number_employees+"</td></tr></tbody></table>";

        var sector=document.querySelector('input[name="sector"]:checked').value;
        var gender=document.querySelector('input[name="gender"]:checked').value;

        var govt=document.querySelector('input[name="govt"]:checked').value;

        var own=document.querySelector('input[name="own"]:checked').value;

        var ow=document.querySelector('input[name="ow"]:checked').value;
      //  var house_sep=document.querySelector('input[name="house_sep"]:checked').value;
        var acr=document.querySelector('input[name="acr"]').value;
        var acrvar=document.querySelector('input[name="acrvar"]').value;


        document.getElementById("ret").innerHTML="<table><thead></thead><tbody><tr><td>Sector</td><td>"+sector+"</td></tr><tr><td>Gender</td><td>"+gender+"</td></tr><tr><td>Applicant Type</td><td>"+govt+"</td></tr><tr><td>Rearing House Ownership</td><td>"+own+"</td></tr><tr><td>Mulberry Garden/host Plant</td><td>"+ow+"</td></tr><tr><td>Acreage</td><td>"+acr+"</td></tr><tr><td>Variety</td><td>"+acrvar+"</td></tr></tbody></table>";        }

</script>

</body>

</html>
