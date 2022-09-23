<!doctype html>
<html lang="en">
  <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   <title>Online Lumber Dealer Permitting and Monitoring System</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../fonts/css/all.css">
    <script src="../js/script.js" defer></script>
  </head>
  
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <input type="file" id="real-file"  hidden="hidden" accept="Application/pdf" value=""/>
    <input type="file" id="real-file2" hidden="hidden" accept="Application/pdf" value=""/>
    <input type="file" id="real-file3" hidden="hidden" accept="Application/pdf" value=""/>
    <input type="file" id="real-file4" hidden="hidden" accept="Application/pdf" value=""/>
    <input type="file" id="real-file5" hidden="hidden" accept="Application/pdf" value=""/>
    <input type="file" id="real-file6" hidden="hidden" accept="Application/pdf" value=""/>

    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
      
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container-fluid">
     <a href="index.php"><img src="../images/oldpmslogo.png" alt="oldpms" height="40"></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <a class="navbar-brand" href="index.php"><strong>ONLINE LUMBER DEALER PERMITTING & MONITORING SYSTEM</strong></a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           <li class="nav-item">
           <a class="nav-link active" aria-current="page" href="#"></a>
           </li>
        </ul>
          <form class="d-flex">
          
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
      <ul class="navbar-nav">
        <li class="nav-item dropdown" style="margin-right: 10px;">
          <a href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa-solid fa-circle-user text-white style"></i>
          </a>
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li>
              <a class="dropdown-item" href="#">Profile</a>
               <a class="dropdown-item" href="#">Logout</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
           <a class="navbar-brand" style="font-family:Trebuchet MS; color:#312f31; font-size:20px; color: #fff; font-weight: bold;"><b>Juan, Client</b></a>
         </form>
      </div>
    </div>
  </nav>

    <form action="#" class="form">
      <!-- Progress bar -->
      <div class="progressbar">
        <div class="progress" id="progress"></div>
        <div
          class="progress-step progress-step-active"
          data-title="Requirements"
        ></div>
        <div class="progress-step" data-title="Basic Information"></div>
        <div class="progress-step" data-title="Attachment"></div>
      </div>

      <!-- Requirements -->
      <div class="form-step form-step-active">
        <div class="input-group">
         <div class="container mt-3">
          <h2 class="text-center" style="font-family: system-ui; font-weight: 600"><i class="fa-regular fa-rectangle-list" style="margin-right: 15px;"></i>Requirements</h2><br>
            <center><p style="font-family: system-ui; background: #d1e7dd; word-wrap: normal;  width:100%; word-wrap:break-word; font-size: 15px; font-weight: 550;"><i>Please download and fill up the forms below. Print the completed forms for notarial purposes. Once<br>notarized, return to the system and locate the REQUIREMENTS FORM Browse to upload the scan copy.<br>you need to have pdf reader installed to open these files.</p></i><br>
            <p style="font-family: system-ui; font-weight: 400; text-align: justify; text-justify: inter-word; font-size: 17px;">
              1. Application form or duly accomplished & sworn/notarized. <a style="color: #0645AD;" href="#"><u>Download Fillable Form</u></a><br>
              2. Lumber Supply Contract/Agreement from legitimate suppliers/subsisting lumber dealer.<br>
              3. Mayor's Permit/Business Plan<br>
              4. Annual Business Plan<br>
              5. Latest Income Tax Return<br>
              6. Proof of ownership of the lumberyard or consent/agreement with the owner<br><br>
              <strong>Provided after DENR CENRO Personnel site inspection.</strong><br>
              1. Forestry Administrative Fees<br>
              2. Pictures of lumberyard/establishment</p><br></center>
               <center><h4 style="font-family: system-ui; font-weight: 500; font-size: 15px;">Click proceed if all requirements are completed and ready to upload.</h4></center>
            </div>
          </div>
        <div class="">
          <center><a href="#" class="custom_btn btn-next width-50" style="font-family: system-ui; font-weight: 500; font-size: 16px;">Proceed<i class="fa-solid fa-circle-arrow-right" style="margin-left: 10px;"></i></a></center>
        </div>
      </div>

      <!-- Basic Information -->
      <div class="form-step">
        <div class="input-group">
            <h3 class="text-center" style="font-family: system-ui; font-weight: 600;"><i class="fa-regular fa-user" style="margin-right: 15px; margin-left: 12px;"></i>Permittee's Basic Information</h3>
         <div class="row">
          <div class="col"><br>
          <input style="width: 330px;" type="text" class="form-control" placeholder="First Name*" aria-label="First name" >
          </div>
          <div class="col"><br>
          <input style="width: 330px;" type="text" class="form-control" placeholder="Last Name*" aria-label="Last name">
          </div>
        </div>
         <div class="row">
          <div class="col">
            <select class="form-select" id="autoSizingSelect" style="margin-top: 10px; width: 330px; ">
              <option selected>Application Type</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col">
          <input style="width: 330px; margin-top: 10px;" type="text" class="form-control" placeholder="Business Name*" aria-label="Business name">
          </div>
        </div>
          <div class="row">
          <div class="col">
            <select class="form-select" id="autoSizingSelect" style="margin-top: 10px; width: 330px; ">
              <option selected>Province</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col">
            <select class="form-select" id="autoSizingSelect" style="margin-top: 10px; width: 330px; ">
              <option selected>City/Municipality</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
        </div>
          <div class="row">
          <div class="col">
            <select class="form-select" id="autoSizingSelect" style="margin-top: 10px; width: 330px; ">
              <option selected>Barangay</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col">
          <input style="width: 330px; margin-top: 10px;" type="text" class="form-control" placeholder="Zip Code" aria-label="Zip code">
          </div>
        </div>
          <div class="row">
          <div class="col">
          <input style="width: 685px; margin-top: 10px;" type="text" class="form-control" placeholder="Street/Corner/Purok*" aria-label="Street/corner/purok" >
          </div>
        </div>
          <div class="row">
          <div class="col">
          <input style="width: 330px; margin-top: 10px;" type="text" class="form-control" placeholder="E-Mail (Optional)*" aria-label="Email" >
          </div>
          <div class="col">
          <input style="width: 330px; margin-top: 10px;" type="text" class="form-control" placeholder="Mobile No.*" aria-label="Mobile no">
          </div>
        </div>
        
        </div>
        <div class="btns-group">
          <a href="#" class="custom_btn_prev custom_btn btn-prev">Back</a>
          <a href="#" class="custom_btn_next custom_btn btn-next">Next<i class="fa-solid fa-arrow-right" style="margin-left: 10px;"></i></a>
        </div>
      </div>
      <!-- Attaching Required Documents -->
      <div class="form-step">
        <div class="input-group">
            <h3 class="text-center" style="font-family: system-ui; font-weight: 600"><i class="fa-regular fa-file" style="margin-right: 15px;"></i>Attaching Required Documents</h3>
            <label style="font-size: 17px;">Click "Browse" to select the corresponding electronic copy of the document. <br><span style="color: red; font-size: 15px;"><i>Note: Only PDF File not larger than 10 MB is allowed.</i></span></label>
    <table class="table table-bordered" style="margin-top: 10px;">
  <tr>
    <th colspan="2" style="background: #597EFB; color: #fff; font-weight: 300;">DOCUMENTS</th>
    <th style="background: #597EFB; color: #fff; font-weight: 300;">File Size</th>
  </tr>

  <tr>
      <td style="border-right-color: #fff;">
      <span id="custom-text" style="font-size: 13px; color: #808080;">Application form or duly accompished & sworn/notarized. </span>
      </td>
      <td align="center">
      <button type="button" id="custom-button" class="btn btn-primary btn-sm" style="width: 100px; height:30px;">Browse..</button>
      </td>
      <td align="center" style="color: #808080; font-size: 15px;" id="mb1"></td>
  </tr>

  <tr>
      <td style="border-right-color: #fff;">
      <span id="custom-text2" style="font-size: 13px; color: #808080;">Lumber Supply Contract/Agreement from legitimate suppliers/subsisting lumber dealer </span>
      </td>
      <td align="center">
      <button type="button" id="custom-button2" class="btn btn-primary btn-sm" style="width: 100px; height:30px;">Browse..</button>
      </td>
      <td align="center" style="color: #808080; font-size: 15px; "id="mb2"></td>
  </tr>

  <tr>
      <td style="border-right-color: #fff;">
      <span id="custom-text3" style="font-size: 13px; color: #808080;">Mayor's Permit/Business Permit </span>
      </td>
      <td align="center">
      <button type="button" id="custom-button3" class="btn btn-primary btn-sm" style="width: 100px; height:30px;">Browse..</button>
      </td>
      <td align="center" style="color: #808080; font-size: 15px;"id="mb3"></td>
  </tr>

  <tr>
      <td style="border-right-color: #fff;">
      <span id="custom-text4" style="font-size: 13px; color: #808080;">Annual Business Plan </span>
      </td>
      <td align="center">
      <button type="button" id="custom-button4" class="btn btn-primary btn-sm" style="width: 100px; height:30px;">Browse..</button>
      </td>
      <td align="center" style="color: #808080; font-size: 15px;"id="mb4"></td>
  </tr>

  <tr>
      <td style="border-right-color: #fff;">
      <span id="custom-text5" style="font-size: 13px; color: #808080;">Latest Income Tax return </span>
      </td>
      <td align="center">
      <button type="button" id="custom-button5" class="btn btn-primary btn-sm" style="width: 100px; height:30px;">Browse..</button>
      </td>
      <td align="center" style="color: #808080; font-size: 15px;"id="mb5"></td>
  </tr>

  <tr>
      <td style="border-right-color: #fff;">
      <span id="custom-text6" style="font-size: 13px; color: #808080;">Proof of ownership of the lumberyard or consent/agreement with the owner </span>
      </td>
      <td align="center">
      <button type="button" id="custom-button6" class="btn btn-primary btn-sm" style="width: 100px; height:30px;">Browse..</button>
      </td>
      <td align="center" style="color: #808080; font-size: 15px;"id="mb6"></td>
  </tr>
</table>

        </div>
        <div class="btns-group">
          <a href="#" class="custom_btn_prev custom_btn btn-prev">Back</a>
          <button type="button" class="btn btn-success" data-bs-toggle="modal" id="acceptBtn" disabled="true" >Submit</button>
        </div>
      </div>
    </form>

   
<div class="position-fixed top-0 end-0 p-3" style="z-index: 11;">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true" style=" background-color: #d1e7dd;">
    <div class="toast-header" style=" background-color: #DFF0FA; color: #5C7585">
      <strong class="me-auto"><i class="fa-solid fa-circle-check text: #5C7585;"></i> File Submitted!</strong>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
  </div>
</div>
</div>

<script type="text/javascript">


  var toastTrigger = document.getElementById("acceptBtn")
  var toastLiveExample = document.getElementById("liveToast")

if (toastTrigger) {
  toastTrigger.addEventListener('click', function () {
    var toast = new bootstrap.Toast(toastLiveExample)
    toast.show()
  })
}
  
  const realFileBtn = document.getElementById("real-file");
  const realFileBtn2 = document.getElementById("real-file2");
  const realFileBtn3 = document.getElementById("real-file3");
  const realFileBtn4 = document.getElementById("real-file4");
  const realFileBtn5 = document.getElementById("real-file5");
  const realFileBtn6 = document.getElementById("real-file6");

  const customBtn = document.getElementById("custom-button");
  const customBtn2 = document.getElementById("custom-button2");
  const customBtn3 = document.getElementById("custom-button3");
  const customBtn4 = document.getElementById("custom-button4");
  const customBtn5 = document.getElementById("custom-button5");
  const customBtn6 = document.getElementById("custom-button6");

  const customTxt = document.getElementById("custom-text");
  const customTxt2 = document.getElementById("custom-text2");
  const customTxt3 = document.getElementById("custom-text3");
  const customTxt4 = document.getElementById("custom-text4");
  const customTxt5 = document.getElementById("custom-text5");
  const customTxt6 = document.getElementById("custom-text6");

  const customTxtMB = document.getElementById("mb1");
  const customTxtMB2 = document.getElementById("mb2");
  const customTxtMB3 = document.getElementById("mb3");
  const customTxtMB4 = document.getElementById("mb4");
  const customTxtMB5 = document.getElementById("mb5");
  const customTxtMB6 = document.getElementById("mb6");


  customBtn.addEventListener("click", function() {
        realFileBtn.click();
  });
  realFileBtn.addEventListener("change", function(){
    let files = realFileBtn.files;
    var totalBytes = this.files[0].size;

    if (files.length > 0){
      for (var i = 0; i < this.files.length; i++){
         customTxt.style.color="red";
            customTxt.innerHTML = this.files.item(i).name;
            document.getElementById('acceptBtn').disabled = true; 
      }
      if(files[0].size > 10 * 1024 * 1024){
        customTxtMB.innerHTML = 'File exceed 10 mb';
        customTxtMB.style.color = "red";
        customTxt.innerHTML = this.files.item(i).name;
        customTxt.style.color="red";
        return;
      }
    }
    if (totalBytes < 1000000){
      var _size = Math.floor(totalBytes/1000) + ' KB';
      document.getElementById('acceptBtn').disabled = false; 
    }else {
      var _size = Math.floor(totalBytes/1000000) + ' MB'; 
       document.getElementById('acceptBtn').disabled = false; 
    }
    
    customTxtMB.innerHTML = _size;
    customTxtMB.style.color = "#808080";
        if (realFileBtn.value) {
            customTxt.style.color = "#4285F4";
            customTxt.innerHTML = this.files.item(i).name;
        } else {
          customTxt.innerHTML = "Application form or duly accompished & sworn/notarized. ";
          customTxt.style.color = "#808080";
        }
  });

  customBtn2.addEventListener("click", function() {
        realFileBtn2.click();
  });
  realFileBtn2.addEventListener("change", function(){
    let files = realFileBtn2.files;
    var totalBytes2 = this.files[0].size;
 for (var i = 0; i < this.files.length; i++){
         customTxt2.style.color="red";
            customTxt2.innerHTML = this.files.item(i).name;
      }

    if (files.length > 0){
      if(files[0].size > 10 * 1024 * 1024){
        customTxtMB2.innerHTML = 'File exceed 10 mb';
        customTxtMB2.style.color = "red";
        customTxt2.innerHTML = this.files.item(i).name;
        customTxt2.style.color="red";
        return;
      }
    }

       if (totalBytes2 < 1000000){
      var _size = Math.floor(totalBytes2/1000) + ' KB';
      }else 
      {
      var _size = Math.floor(totalBytes2/1000000) + ' MB'; 
    }

    customTxtMB2.innerHTML = _size;
    customTxtMB2.style.color = "#808080";
        if (realFileBtn2.value) {
            customTxt2.style.color = "#4285F4";
            customTxt2.innerHTML = this.files.item(i).name;
        } else {
          customTxt2.innerHTML = "Lumber Supply Contract/Agreement from legitimate suppliers/subsisting lumber dealer ";
          customTxt2.style.color = "#808080";
        }
  });

    customBtn3.addEventListener("click", function() {
        realFileBtn3.click();
  });
  realFileBtn3.addEventListener("change", function(){
    let files = realFileBtn3.files;
    var totalBytes3 = this.files[0].size;
    for (var i = 0; i < this.files.length; i++){
         customTxt3.style.color="red";
            customTxt3.innerHTML = this.files.item(i).name;
      }
    if (files.length > 0){
      if(files[0].size > 10 * 1024 * 1024){
        customTxtMB3.innerHTML = 'File exceed 10 mb';
        customTxtMB3.style.color = "red";
        customTxt3.innerHTML = this.files.item(i).name;
        customTxt3.style.color="red";
        return;
      }
    }

       if (totalBytes3 < 1000000){
      var _size = Math.floor(totalBytes3/1000) + ' KB';
      }else 
      {
      var _size = Math.floor(totalBytes3/1000000) + ' MB'; 
    }

    customTxtMB3.innerHTML = _size;

    customTxtMB3.style.color = "#808080";
        if (realFileBtn3.value) {
            customTxt3.style.color = "#4285F4";
            customTxt3.innerHTML = this.files.item(i).name;
        } else {
          customTxt3.innerHTML = "Mayor's Permit/Business Permit ";
          customTxt3.style.color = "#808080";
        }
  });


   customBtn4.addEventListener("click", function() {
        realFileBtn4.click();
  });
  realFileBtn4.addEventListener("change", function(){
    let files = realFileBtn4.files;
     var totalBytes4 = this.files[0].size;

      for (var i = 0; i < this.files.length; i++){
         customTxt4.style.color="red";
            customTxt4.innerHTML = this.files.item(i).name;
      }

    if (files.length > 0){
      if(files[0].size > 10 * 1024 * 1024){
        customTxtMB4.innerHTML = 'File exceed 10 mb';
        customTxtMB4.style.color = "red";
        customTxt4.innerHTML = this.files.item(i).name;
        customTxt4.style.color="red";
        return;
      }
    }
    
       if (totalBytes4 < 1000000){
      var _size = Math.floor(totalBytes4/1000) + ' KB';
      }else 
      {
      var _size = Math.floor(totalBytes4/1000000) + ' MB'; 
    }

    customTxtMB4.innerHTML = _size;

    customTxtMB4.style.color = "#808080";
        if (realFileBtn4.value) {
            customTxt4.style.color = "#4285F4";
            customTxt4.innerHTML = this.files.item(i).name;
        } else {
          customTxt4.innerHTML = "Annual Business Plan ";
          customTxt4.style.color = "#808080";
        }
  });

     customBtn5.addEventListener("click", function() {
        realFileBtn5.click();
  });
  realFileBtn5.addEventListener("change", function(){
    let files = realFileBtn5.files;
      var totalBytes5 = this.files[0].size;
        for (var i = 0; i < this.files.length; i++){
         customTxt5.style.color="red";
            customTxt5.innerHTML = this.files.item(i).name;
      }

    if (files.length > 0){
      if(files[0].size > 10 * 1024 * 1024){
        customTxtMB5.innerHTML = 'File exceed 10 mb';
        customTxtMB5.style.color = "red";
        customTxt5.innerHTML = this.files.item(i).name;
        customTxt5.style.color="red";
        return;
      }
    }
  
       if (totalBytes5 < 1000000){
      var _size = Math.floor(totalBytes5/1000) + ' KB';
      }else 
      {
      var _size = Math.floor(totalBytes5/1000000) + ' MB'; 
    }

    customTxtMB5.innerHTML = _size;
    customTxtMB5.style.color = "#808080";
        if (realFileBtn5.value) {
            customTxt5.style.color = "#4285F4";
            customTxt5.innerHTML = this.files.item(i).name;
        } else {
          customTxt5.innerHTML = "Latest Income Tax return ";
          customTxt5.style.color = "#808080";
        }
  });

     customBtn6.addEventListener("click", function() {
        realFileBtn6.click();});
  realFileBtn6.addEventListener("change", function(){
    let files = realFileBtn6.files;
      var totalBytes6 = this.files[0].size;
        for (var i = 0; i < this.files.length; i++){
         customTxt6.style.color="red";
            customTxt6.innerHTML = this.files.item(i).name;
      }
    if (files.length > 0){
      if(files[0].size > 10 * 1024 * 1024){
        customTxtMB6.innerHTML = 'File exceed 10 mb';
        customTxtMB6.style.color = "red";
        customTxt6.innerHTML = this.files.item(i).name;
        customTxt6.style.color="red";
        return;
      }
    }
   
       if (totalBytes6 < 1000000){
      var _size = Math.floor(totalBytes6/1000) + ' KB';
      }else 
      {
      var _size = Math.floor(totalBytes6/1000000) + ' MB'; 
    }

    customTxtMB6.innerHTML = _size;
    customTxtMB6.style.color = "#808080";
        if (realFileBtn6.value) {
            customTxt6.style.color = "#4285F4";
            customTxt6.innerHTML = this.files.item(i).name;
        } else {
          customTxt6.innerHTML = "Proof of ownership of the lumberyard or consent/agreement with the owner ";
          customTxt6.style.color = "#808080";
        }
  });



</script>

  </body>
</html>