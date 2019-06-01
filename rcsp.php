<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Application For Registration / Renewal As a Chawki SilkWorm Rearer</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="state.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
      <link rel="stylesheet" href="css/in.css">

<style>
  .rad{
  width:30px !important;display:inline !important;
} 
.asterisk{
  color:red;
}
.declare{
  font-size:14px;
}
.dec{
  font-weight:800;
}
@media print{@page {size: landscape}}
input[type=number]::-webkit-inner-spin-button{
  display:none;
}
table {
  width:100%;
  height:600px; 
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

<body >

  
  <center><h1 class="mainhead" id="nodisp">Application For Registration / Renewal As a SilkWorm Seed Cocoon Producer</h1></center>

<form  class="steps" autocomplete="off" action="rcspprocess.php" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
  <ul id="progressbar" style="margin-left:10%">
    <li class="active">Personal Details</li>
    <li>Cultivational Details</li>
    <li>Photo Upload</li>
    <li>Review</li>
    <li>Payment Details</li>
  </ul>



  <!-- USER INFORMATION FIELD SET --> 
  <fieldset >
    <h2 class="fs-title">Personal Details</h2>
    <!-- Begin What's Your First Name Field -->
              <input type="text" name="mob" placeholder="Enter Phone No">
            <label>Full name <span class="asterisk">*</span></label><br>
            <input type="text" name="first_name" placeholder="Enter full name" required>
            <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
              <label>Father / Husband Name <span class="asterisk">*</span></label> 
              <input  type="text" name="father_husband_name" placeholder="Enter Father/Husband name " required>
              <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
                <label>LandLine Number</label><input   type="number" name="land_line"  placeholder="Enter Landline number" minlength="10" maxlength="10">
                
                <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          <label>Gender <span class="asterisk">*</span></label> 
              <select  name="gender" required>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="other">other</option>
</select>
              <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>   
          
          <label>Enter Aadhaar No<span class="asterisk">*</span></label> 
          <input  type="text" id="aadhar" name="aadhar" placeholder="Enter Aadhar No " onkeyup="addHyphen(this)" required>
          <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
          <label>Select Caste<span class="asterisk">*</span></label> 
          <select  name="caste" id="caste" onchange="castesel(this);" required>
          <option value="" selected="selected">Select Caste</option>
                <option value="general">GENERAL</option>
                <option value="scst">SC/ST</option>
                <option value="obc">OBC</option>
                <option value="other">OTHER</option>

</select>
<div id="othcas" style="display:none">
  <label for="othercaste">caste name</label>
<input type="text" name="othercaste" id="othercaste" placeholder="enter caste name">
</div>


              <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>  
          <label >House Address<span class="asterisk">*</span></label><br>
<label>Door No</label>
<input  type="text" name="doorno" placeholder="Enter Door No">       
<label>Street/Village</label>
<input  type="text" name="str_vil" placeholder="Enter Street /Village name" required>    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

<label>Area/Locality</label>
<input  type="text" name="are_loc" placeholder="Enter Area/Locality name" required>
<span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>


    <!-- <textarea  name="address" placeholder="Your Address" required></textarea> -->
          <label>Select State<span class="asterisk">*</span></label>
           <div id="selection">
              <select id="listBox"  onclick='selct_district(this.value)' name="state_value" required></select><br><br>
              <label>Select District<span class="asterisk">*</span></label>
              <select id='secondlist' name="district_value" required></select>    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
              <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

            <div id="dumdiv"  style=" font-size: 10px;color: #dadada;">
            <a id="dum" style="padding-right:0px; text-decoration:none;color: green;text-align:center;"> </a>
            </div>
           </div>
  
<label>Taluk<span class="asterisk">*</span></label>
<input  type="text" name="Taluk" placeholder="Enter Taluk name" required>
<span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
 
        </div>
        
      

    <!-- End Total Number of Constituents in Your Database Field -->
    <input  type="button" data-page="1" name="next" class="next action-button" value="Next" />
  </fieldset>
  



  <!-- ACQUISITION FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Cultivational Details</h2>

    <label>Capacity of Rearing House</label>
    <input  type="number" name="capacity" placeholder="Enter Capacity" pattern="[0-9]*">
    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
    <label>Year Of Establishment</label>
    <input  type="number" name="yr" id="yr" placeholder="Enter Year" max="2020" min="1900" pattern="^(19|20)\d{2}$">
    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
   

  <label>Other Details</label>
  <textarea   name="text1" placeholder="Details"></textarea>
  <label>Variety of pure silkworm race<span class="asterisk">*</span></label>
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

  <label>Select sector<span class="asterisk">*</span></label><br><br>
   <input  type="radio" name="sector" class="rad" value="Mulberry">Mullberry
    <input  type="radio" name="sector" class="rad" value="Tasar"> Tasar
    <input  type="radio" name="sector" class="rad" value="Eri"> Eri 
    <input  type="radio" name="sector"  class="rad" value="Muga">Muga </span>

  <br><br>
  <label>Select Applicant Type<span class="asterisk">*</span></label><br>
  <br><input  type="radio" name="govt" value="Government" class="rad"> Government 
  <input  type="radio" name="govt" value="Private" class="rad"> Private
  <input  type="radio" name="govt" value="NGO" class="rad"> NGOs
  <input  type="radio" name="govt" value="CSB" class="rad"> CSB

  <br><br>
  <label>Rearing House Ownership</label>
  <br><br>
  <input  type="radio" name="own" value="Own" class="rad"> Own  
  <input  type="radio" name="own" value="Leased" class="rad"> Leased
  <input  type="radio" name="own" value="Rented" class="rad"> Rented
  
  <br><br>
  <label>Mulbery garden/host plant</label>
  <br><br>
  <input  type="radio" name="ow" value="Own" class="rad"> Own  
  <input  type="radio" name="ow" value="Leased" class="rad"> Leased
   <br><br> <label>Acreage</label>		
    <input  type="text" name="acr" placeholder="Enter Acreage" style="width:30%;display:inline" required>
    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>

    &emsp;<label>Variety</label>
    <input  type="text" name="acrvar" style="width:30%;display:inline" placeholder="Enter Variety" required>
    <span class="error1" style="display: none;"><i class="error-log fa fa-exclamation-triangle"></i></span>
  
  <br><br>
  
  <label>Specify whether Rearing is done in separate rearing house<span class="asterisk">*</span></label>
  <br><br>
  <input  type="radio" name="house_sep" class="rad" value="Yes"> Yes  
  <input  type="radio" name="house_sep" class="rad" value="No"> No
    <br><br>
    <!-- <label>Mulberry Garden/Host Plant</label>
    <br><br>
    


    <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span> -->
    <input  type="button" data-page="2" name="previous" class="previous action-button" value="Previous" />
    <input  type="button" data-page="2" name="next" class="next action-button" value="Next" />
  </fieldset>



  <!-- Cultivation FIELD SET -->  
  <fieldset>
    <h2 class="fs-title">Photo Upload</h2>
      <!-- Begin Average Gift Size in Year 1 Field -->
        <div class="form-item webform-component webform-component-textfield hs_average_gift_size_in_year_1 field hs-form-field" id="edit-submitted-cultivation-amount-1 average_gift_size_in_year_1-99a6d115-5e68-4355-a7d0-529207feb0b3_3256">
        
         <tr><td>
	<br><font size="05px">Upload Your Photo<span class="asterisk">*</span><br></span>
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
              <br><font size="05px">Upload Your Sign<span class="asterisk">*</span><br></span>
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


<br><b><h2><center>Declaration<span class="asterisk">*</span><hr></center></h2></b></center>
<p class="declare">I declare that the information given above is true to the best of my knowledge and belief and no part thereof is false</p><br>
<center> 
  <input type="checkbox" name="terms" id="terms" class="rad dec" data-msg-required="Agree To The Terms And Conditions" onchange="activateButton(this)" required>  I Agree Terms & Coditions </input>
  <span class="error1" style="display: none;">
              <i class="error-log fa fa-exclamation-triangle"></i>
          </span>
        
        </div>
        <input type="button" data-page="4" name="previous" class="previous action-button" value="Previous" />
    <input  type="button" data-page="4" name="next" class="next action-button" value="Next" />
                </fieldset>
        <!-- End Average Gift Size in Year 1 Field -->

  <!-- Cultivation2 FIELD SET --> 
  <fieldset id="printarea">
    <div >
  <p id="printable">Print</p>
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

     
              <div id="images" style="float:left;"><table><tr><td><img id="photo" src="#" width="150" height="150"/><center><p>Photo</p></center></td><td>
              <img id="signature" src="#" width="150" height="150"/><center><p>Signature</p></center></td></tr></table>
            </div>
        <div  id="review" class="review"></div>      
        <div id="ret"></div>
        <!-- End Total Giving In Year 1 Field -->
</div>


<br><br>

    </div>
    <input  type="button" id="prev" data-page="4" name="previous" class="previous action-button" value="Previous" />

    <input  type="submit" id="sub" style="width:100%" data-page="4" name="next" class="next action-button" value="Proceed To Payment" />

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

  

    <script  src="js/in.js"></script>
    

    <script>
      
      document.onchange=function(){
       var uname= document.querySelector('input[name="first_name"]').value;
        var fhname=document.querySelector('input[name="father_husband_name"]').value;
        var landline=document.querySelector('input[name="land_line"]').value;
        var capacity=document.querySelector('input[name="capacity"]').value;
        var yr=document.querySelector('input[name="yr"]').value;
        var doorno=document.querySelector('input[name="doorno"]').value;
        var strvil=document.querySelector('input[name="str_vil"]').value;
        var areloc=document.querySelector('input[name="are_loc"]').value;
       var state= document.querySelector('select[name="state_value"]').value;

       var district= document.querySelector('select[name="district_value"]').value;
       var taluk= document.querySelector('input[name="Taluk"]').value;
       var otherdet= document.querySelector('textarea[name="text1"]').value;
       var sv= document.querySelector('select[name="silkvariety"]').value;

       document.getElementById("review").innerHTML="<table><thead><th colspan='2' rowspan='2'>REVIEW OF THE APPLICATION FORM</th></thead><tbody><tr><td>name</td><td>"+uname+"</td></tr><tr><td>father/husband name</td><td>"+fhname+"</td></tr><tr><td>landline no</td><td>"+landline+"</td></tr><tr><td>capacity of the rearing house</td><td>"+capacity+"</td></tr><tr><td>year of establishment</td><td>"+yr+"</td></tr><tr><td>House address</td></tr><tr><td>Door No.</td><td>"+doorno+"</td></tr><tr><td>Street/Village</td><td>"+strvil+"</td></tr><tr><td>Area/Locality</td><td>"+areloc+"</td></tr><tr><td>State</td><td>"+state+"</td></tr><tr><td>District</td><td>"+district+"</td></tr><tr><td>Taluk</td><td>"+taluk+"</td></tr><tr><td>Other Details</td><td>"+otherdet+"</td></tr><tr><td>Silk Variety</td><td>"+sv+"</td></tr></tbody></table>";

        var sector=document.querySelector('input[name="sector"]:checked').value;

        var govt=document.querySelector('input[name="govt"]:checked').value; 

        var own=document.querySelector('input[name="own"]:checked').value;

        var ow=document.querySelector('input[name="ow"]:checked').value;
        var house_sep=document.querySelector('input[name="house_sep"]:checked').value;
        var acr=document.querySelector('input[name="acr"]').value;
        var acrvar=document.querySelector('input[name="acrvar"]').value;

        document.getElementById("ret").innerHTML="<table><thead></thead><tbody><tr><td>Sector</td><td>"+sector+"</td></tr><tr><td>Applicant Type</td><td>"+govt+"</td></tr><tr><td>Rearing House Ownership</td><td>"+own+"</td></tr><tr><td>Mulberry Garden/host Plant</td><td>"+ow+"</td></tr><tr><td>Rearing Done In Seperate House</td><td>"+house_sep+"</td></tr><tr><td>Acreage</td><td>"+acr+"</td></tr><tr><td>Variety</td><td>"+acrvar+"</td></tr></tbody></table>";        }
        
</script>
<script>

$(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});

</script>
<script>
document.getElementById("printable").onclick=function(){
  
// document.head.parentNode.removeChild(document.head);

document.getElementById("progressbar").style.display="none";
document.getElementById("printable").style.display="none";

document.getElementById("nodisp").style.display="none";
document.getElementById("sub").style.display="none";

document.getElementById("prev").style.position="relative";
document.getElementById("prev").style.top="400";
document.getElementById("prev").style.right="400";


// // document.getElementsByTagName("div").style.margin="0px";
// document.body.style.margin="0px";
// document.body.style.padding="0px";
// document.fieldset.style.width = "100%";
// document.div.style.width = "100%";
// document.body.style.zoom="67%";
document.getElementById("printarea").style.position="relative";
document.getElementById("printarea").style.bottom="350px";

document.getElementById("printarea").style.WebkitTransform = "rotate(-90deg)"; 
document.getElementById("printarea").style.msTransform = "rotate(-90deg)"; 
document.getElementById("printarea").style.transform = "rotate(-90deg)"; 


// document.getElementById("printarea").style.position="absolute";
// document.getElementById("printarea").style.bottom="0px";
// document.getElementById("printarea").style.right="150px";

window.print();








}










</script>
<script>
	function addHyphen (element) {
    	var e= document.getElementById(element.id);
        e = e.value.split('-').join('');    // Remove dash (-) if mistakenly entered.

        let finalVal = e.match(/.{1,4}/g).join('-');
        document.getElementById(element.id).value = finalVal;
    }
</script>
<script>
function castesel(that){
    if (that.value == "other") {

        document.getElementById("othcas").style.display = "block";
    } else {
        document.getElementById("othcas").style.display = "none";
    }

}
</script>
</body>

</html>
