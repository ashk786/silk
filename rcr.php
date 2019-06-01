<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Registration/Renewal As A Silkworm Chawki Silkworm Rearer</title>
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

  
  <center><h1 class="mainhead">Registration/Renewal As A Chawki Silkworm Rearer</h1></center>

<form class="steps" action="rcrprocess.php" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
  <ul id="progressbar">
    <li class="active">Personal Details</li>

    <li>Mailing Details</li>
    
    <li>Cultivational Details</li>
    <li>Photo Upload</li>
    <li>Review</li>
    <li>Payment Details</li>
  </ul>



  <!-- USER INFORMATION FIELD SET --> 
  <fieldset>
    सेवा में To,<br>अध्यक्ष  The Chairperson,<br>रजिस्ट्रेशन समिति  Registration Committee,<br>केंद्रीय रेशम बोर्ड  Central Silk Board,<br>बेंगलूरु Bengaluru
    <h2 class="fs-title">Personal Details</h2>
    <!-- Begin What's Your First Name Field -->
        
            <label>आवेदक का नाम <br>Name of the applicant</label><br>
            <input type="text" name="first_name" placeholder="Enter full name" required>
            <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>


            <label>आवेदक का लिंग <br>Gender of the applicant</label><br>
            <input  type="radio" name="gender" value="male" class="rad" required>पुलिंग/Male<br>
            <input  type="radio" name="gender" value="female" class="rad" required>स्त्रीलिंग/Female<br>



              <label>पिता/माता/पति का नाम <br>Name of father/mother/husband</label> 
              <input  type="text" name="father_husband_name" placeholder="Enter Father/Mother/Husband name " required>
              <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
                <label>दूरभाष संख्या लैंड लाइन (एसटीडी कोड सहित)<br>LandLine Number(with STD code)</label><input   type="number" name="land_line"  placeholder="Enter Landline number along with STD code" min=10000 max=9999999999999 required="">
                
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          <label>आधार सं<br>Aadhar number</label> 
              <input  type="number" name="aadhar" placeholder="Enter 12 digit Aadhar number" min=111111111111 max=999999999999 required>
              <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
                  
               
        </div>
        
      

    <!-- End Total Number of Constituents in Your Database Field -->
    <input  type="button" data-page="1" name="next" class="next action-button" value="Next" />
  </fieldset>



  <!-- ACQUISITION FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">डाक पता  Mailing address:</h2>

<label>कमरा सं<br>Door No</label>
<input  type="text" name="doorno" placeholder="Enter Door No" required>

<label>गली/गांव<br>Street/Village</label>
<input  type="text" name="str_vil" placeholder="Enter Street /Village name" required>    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

<label>क्षेत्र/स्थान<br>Area/Locality</label>
<input  type="text" name="are_loc" placeholder="Enter Area/Locality name" required>
<span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

<label>तालूक<br>Taluk</label>
<input  type="text" name="Taluk" placeholder="Enter Taluk name" required>
<span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

<label>पिन<br>PINCODE</label>
<input  type="number" name="pincode" placeholder="Enter PINCODE" required>
<span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

          <label>राज्य<br>State</label>

           <div id="selection">
              <select id="listBox"  onclick='selct_district(this.value)' name="state_value" required></select><br><br>
              <label>जिला<br>District:</label>
              <select id='secondlist' name="district_value" required></select>    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
              <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

            <div id="dumdiv"  style=" font-size: 10px;color: #dadada;">
            <a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;"> </a>
            </div>
           </div>


  
    <input  type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input  type="button" data-page="2" name="next" class="next action-button" value="Next" />
  </fieldset>


  <!-- ACQUISITION FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">चॉकी कीटपालन केंद्र का पता <br>Chawki Rearing Centre address:</h2>

<label>कमरा सं<br>Door No</label>
<input  type="text" name="doorno1" placeholder="Enter Door No" required>

<label>गली/गांव<br>Street/Village</label>
<input  type="text" name="str_vil1" placeholder="Enter Street /Village name" required>    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

<label>क्षेत्र/स्थान<br>Area/Locality</label>
<input  type="text" name="are_loc1" placeholder="Enter Area/Locality name" required>
<span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

<label>तालूक<br>Taluk</label>
<input  type="text" name="Taluk1" placeholder="Enter Taluk name" required>
<span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

<label>पिन<br>PINCODE</label>
<input  type="number" name="pincode1" placeholder="Enter PINCODE" required>
<span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>


 <!-- <textarea  name="address" placeholder="Your Address" required></textarea> -->
          <label>राज्य<br>State</label>
           <div id="prod_selection">
              <select id="prod_listBox"  onclick='selct_prod_district(this.value)' name="state_value1" required></select><br><br>
              <label>जिला<br>District</label>
              <select id='prod_secondlist' name="district_value1" required></select>    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
              <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

            <div id="prod_dumdiv"  style=" font-size: 10px;color: #dadada;">
            <a id="prod_dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;"> </a>
            </div>
           </div>
  

<label>प्रशिक्षण का स्थान <br>Place of Training</label>
<input  type="text" name="pot" placeholder="Enter place of training" required>
<span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>


<label>प्रशिक्षण अवधि <br>Period of training</label>
<input  type="text" name="peot" placeholder="Enter period of training" required>
<span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

  
     <!-- <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span> -->

  <label>क्षेत्र <br>Sector</label><br><br>
   <input  type="radio" name="sector" class="rad" value="Mulberry" required>शहतूत/Mulberry<br>
    <input  type="radio" name="sector" class="rad" value="Tasar" required>तसर/Tasar<br>

    <input  type="radio" name="sector" class="rad" value="Eri" required>एरी/Eri<br> 
    <input  type="radio" name="sector"  class="rad" value="Muga" required>मूगा/Muga<br> </span>

  <br><br>
  <label>आवेदक का प्रकार<br>Applicant</label><br>
  <br><input  type="radio" name="govt" value="Government" class="rad" required>सरकारी/Government<br> 
  <input  type="radio" name="govt" value="Private" class="rad" required>निजी/Private<br>
  <input  type="radio" name="govt" value="NGO" class="rad" required>गैसंस/NGOs<br>
  <input  type="radio" name="govt" value="CSB" class="rad" required>सी.ऐस.बी/CSB<br>
  
  <br><br>


  
  <label>विक्रय करने के लिए चॉकी कीटपालन करने हेतु प्रस्तावित रेशमकीट बीज की किस्म/उपजाति (संयोजन बताएं)<br>Kind/Variety of silkworm seed proposed to be chawki-reared for selling(mention combinations)</label>
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

    <label>चॉकी कीटपालन केन्द्र की क्षमता<br>Capacity of chawki rearing centre</label>
  <input type="text" name="ccapacity" >

<label>चॉकी कीटपालन करने हेतु प्रस्तावित मात्रा<br>Quantity of Chawki Rearing proposed</label>
  <input type="number" name="cquantity"  >

    <label>क्षेत्रफल<br>Acreage</label>    
    <input  type="text" name="acr" placeholder="Enter Acreage" >
    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

    <label>उप-जाति<br>Variety</label>
    <input  type="text" name="acrvar" placeholder="Enter Variety" >
    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

  <label> स्थापना वर्ष<br>Year Of Establishment</label>
  <input type="number" name="yr" id="yr" placeholder="Enter Year" max="2020" min="1900" pattern="^(19|20)\d{2}$" >



  <label>चॉकी कीटपालन भवन स्वामित्व का प्रकार<br>Chawki Rearing House Ownership</label>
  <br><br>
  <input  type="radio" name="own" value="Own" class="rad"> Own  
  <input  type="radio" name="own" value="Leased" class="rad"> Leased
  <input  type="radio" name="own" value="Rented" class="rad"> Rented
  
 <label>चॉकी कीटपालन केन्द्र में उपलब्ध सुविधाएं<br>Facilities availaible in the Chawki Rearing Centre</label>
  <input type="text" name="facility">


<label>इस आवेदन की तारीख को कार्यरत कर्मचारी/कामगारों की संख्या <br>No of employees/workers working as on the date of this application</label>
  <input type="number" name="noofemp">

 <label>कोई अन्य विवरण <br>Any other details</label>
  <input type="text" name="other">


    <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
    <input  type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input  type="button" data-page="2" name="next" class="next action-button" value="Next" />
  </fieldset>


  <!-- Cultivation FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Photo Upload</h2>
      <!-- Begin Average Gift Size in Year 1 Field -->
        <div class="form-item webform-component webform-component-textfield hs_average_gift_size_in_year_1 field hs-form-field" id="edit-submitted-cultivation-amount-1 average_gift_size_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">
        
         <tr><td>
  <br><font size="05px">Upload Your Photo:<br>Formats allowed: JPG/JPEG/PNG/GIF</span>
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
          var allowedExtensions = /(\.jpg|\.jpeg|\.gif|\.png)$/i;
          if(!allowedExtensions.exec(filePath)){
              alert("Please upload file having extensions .jpeg/.jpg/.png/.gif only.");
              fileInput.value = "";
              return false;
          };
        };
              </script>
              <tr><td>
              <br><font size="05px">Upload Your Sign:<br>Formats allowed: JPG/JPEG/PNG/GIF</span>
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
  <br><font size="05px">Upload Your Training Certificate:<br>Formats allowed: PDF/DOC</span>
                </font>
                  <input  type="file" name="train" class="filein" id="files1" accept=".pdf,.doc"  data-msg-required="upload your training certificate" required><span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span></td><td>    

                  
             
                  <script>
                  document.getElementById("files1").onchange = function () {
                var fileInput= document.getElementById("files1");
               var filePath = fileInput.value;
               var allowedExtensions = /(\.pdf|\.doc)$/i;
                  if(!allowedExtensions.exec(filePath)){
                      alert("Please upload file having extensions .pdf/.doc only.");
              fileInput.value = "";
                   };
                  var reader = new FileReader();
                  reader.onload = function (e) {
                      // get loaded data and render thumbnail.
                     

                  };
                  // read the image file as a data URL.
                  reader.readAsDataURL(this.files1[0]);
              };
              
              </script>

              <script>
                  function fileValidation(){
          var fileinput= document.getElementById("files1");
          var filePath = fileInput.value;
          var allowedExtensions = /(\.pdf|\.doc)$/i;
          if(!allowedExtensions.exec(filePath)){
              alert("Please upload file having extensions .pdf/.doc only.");
              fileInput.value = "";
              return false;
          };
        };
              </script>



             <tr><td>


<br><b><h2><center>घोषणा<br>Declaration<hr></center></h2></b></center>
मैं/हम घोषणा करता/करती हूँ/करते हैं कि उपर्युक्त विवरण मेरी/हमारी पूरी जानकारी एवं विश्वास के अनुसार सत्य और सही है और तत्संभंधी कोई भाग गलत नहीं है <br>
I/We declare that the information given above is true to the best of my/our knowledge and belief and no part thereof is false<br><br>
<center> 
  <input type="checkbox" name="terms" id="terms" class="rad" data-msg-required="Agree To The Terms And Conditions" onchange="activateButton(this)" required> I Agree to the Terms & Conditions </input>
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

     
    <input  type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />

    <input  type="submit" style="width:100%" data-page="4" name="next" class="next action-button" value="Proceed To Payment" />
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
       var gender= document.querySelector('input[name="gender"]').value;
       
        var fhname=document.querySelector('input[name="father_husband_name"]').value;
        var landline=document.querySelector('input[name="land_line"]').value;
        var aadhar=document.querySelector('input[name="aadhar"]').value;
        
        var capacity=document.querySelector('input[name="ccapacity"]').value;
        var quantity=document.querySelector('input[name="cquantity"]').value;
        
        var yr=document.querySelector('input[name="yr"]').value;
        var doorno=document.querySelector('input[name="doorno"]').value;
        var strvil=document.querySelector('input[name="str_vil"]').value;
        var areloc=document.querySelector('input[name="are_loc"]').value;
       var state= document.querySelector('select[name="state_value"]').value;
       var district= document.querySelector('select[name="district_value"]').value;
       var taluk= document.querySelector('input[name="Taluk"]').value;
       var pin= document.querySelector('input[name="pincode"]').value;

       var doorno1=document.querySelector('input[name="doorno1"]').value;
        var strvil1=document.querySelector('input[name="str_vil1"]').value;
        var areloc1=document.querySelector('input[name="are_loc1"]').value;
         var state1= document.querySelector('select[name="state_value1"]').value;
       var district1= document.querySelector('select[name="district_value1"]').value;
       var taluk1= document.querySelector('input[name="Taluk1"]').value;
      var pin1= document.querySelector('input[name="pincode1"]').value;

var place= document.querySelector('input[name="pot"]').value;
      var periodof= document.querySelector('input[name="peot"]').value;
      var sector= document.querySelector('input[name="sector"]').value;
      var govt= document.querySelector('input[name="govt"]').value;

      var acr= document.querySelector('input[name="acr"]').value;
      
      var acrvar= document.querySelector('input[name="acrvar"]').value;


      var own= document.querySelector('input[name="own"]').value;


      var facility= document.querySelector('input[name="facility"]').value;
      
      var noofemp= document.querySelector('input[name="noofemp"]').value;
      var other= document.querySelector('input[name="other"]').value;
      
      
      


         var variety= document.querySelector('select[name="silkvariety"]').value;
      
      
     
       document.getElementById("review").innerHTML="<table><thead><th colspan='2' rowspan='2'>REVIEW OF THE APPLICATION FORM</th></thead><tbody><tr><td>name</td><td>"+uname+"</td></tr><tr><td>Gender</td><td>"+gender+"</td></tr><tr><td>father/husband name</td><td>"+fhname+"</td></tr><tr><td>landline no</td><td>"+landline+"</td></tr><tr><td>Aadhar number</td><td>"+aadhar+"</td></tr><tr><td>Mailing address</td></tr><tr><td>Door No.</td><td>"+doorno+"</td></tr><tr><td>Street/Village</td><td>"+strvil+"</td></tr><tr><td>Area/Locality</td><td>"+areloc+"</td></tr><tr><td>State</td><td>"+state+"</td></tr><tr><td>District</td><td>"+district+"</td></tr><tr><td>Taluk</td><td>"+taluk+"</td></tr><tr><td>pincode</td><td>"+pin+"</td></tr><tr><td>Chawki Rearing Centre address</td></tr><tr><td>Door No.</td><td>"+doorno1+"</td></tr><tr><td>Strrrt/Village</td><td>"+strvil1+"</td></tr><tr><td>Area/Locality</td><td>"+areloc1+"</td></tr><tr><td>Taluk</td><td>"+taluk1+"</td></tr><tr><td>PINCODE</td><td>"+pin1+"</td></tr><tr><td>STATE</td><td>"+state1+"</td></tr><tr><td>DISTRICT</td><td>"+district1+"</td></tr><tr><td>Place of Training</td><td>"+place+"</td></tr><tr><td>Period of Training</td><td>"+periodof+"</td></tr><tr><td>Select Sector</td><td>"+sector+"</td></tr><tr><td>Select Applicant</td><td>"+govt+"</td></tr><tr><td>Kind/Variety</td><td>"+variety+"</td></tr><tr><td>Capacity of chawki rearing centre</td><td>"+capacity+"</td></tr><tr><td>Quantity of Chawki Rearing proposed</td><td>"+quantity+"</td></tr><tr><td>Acreage</td><td>"+acr+"</td></tr><tr><td>Variety</td><td>"+acrvar+"</td></tr><tr><td>Year of Establishment</td><td>"+yr+"</td></tr><tr><td>Chawki Rearing House Ownership</td><td>"+own+"</td></tr><tr><td>Facilities availaible</td><td>"+facility+"</td></tr><tr><td>No of employees</td><td>"+noofemp+"</td></tr><tr><td>Other Details</td><td>"+other+"</td></tr></tbody></table>";

        var sector=document.querySelector('input[name="sector"]:checked').value;

        var govt=document.querySelector('input[name="govt"]:checked').value; 

        var own=document.querySelector('input[name="own"]:checked').value;

        var ow=document.querySelector('input[name="ow"]:checked').value;
        var house_sep=document.querySelector('input[name="house_sep"]:checked').value;
        var acr=document.querySelector('input[name="acr"]').value;
        var acrvar=document.querySelector('input[name="acrvar"]').value;

        document.getElementById("ret").innerHTML="<table><thead></thead><tbody><tr><td>Sector</td><td>"+sector+"</td></tr><tr><td>Applicant Type</td><td>"+govt+"</td></tr><tr><td>Rearing House Ownership</td><td>"+own+"</td></tr><tr><td>Mulberry Garden/host Plant</td><td>"+ow+"</td></tr><tr><td>Rearing Done In Seperate House</td><td>"+house_sep+"</td></tr><tr><td>Acreage</td><td>"+acr+"</td></tr><tr><td>Variety</td><td>"+acrvar+"</td></tr></tbody></table>";        }
        
</script>

</body>

</html>
