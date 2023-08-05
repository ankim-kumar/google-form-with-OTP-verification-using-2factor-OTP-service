<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
	<?php include 'style.css'?>         
    <?php include 'link.php'?>
	
    <link rel="stylesheet" href="form.css">
     <link rel="stylesheet" href="popup.css">
	 <style>
</style>
</head>
<body style= "position:absolute;">

		<!--html part start-->
	<!--	<div class="container p-3 my-3">    -->
		<!--	<div class="row">    -->
			<!--	<div  class="col-6  p-4 ml-2"> Testing for git -->
					<div class="otp_msg"></div>
					<table cellspacing="40px">
					<tr>
					<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><img src="AgriReach.png" width="100px" height="100px"></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
					<td><h1 class="color:black; text-center" >Registration Form-Agri Reach Mobile Application</h1></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
					<td><img src="SLCMlogo.jpg" width="100px" height="100px"padding="40px" ></td><td></td><td></td><td></td><td></td>
</tr></table><br>
			<form action=" Please write the url path of your API " method="post" id="sheedb-form"  >
			
		    <div class="container"  > 
			<label for="Company Name"><b>Firm Name<br>(If case of no legal name, please write Individual Name /Known in mandi / market)<span style="font-size:18px; color:#FF0000" >*</span></b></label>
              <input type="text" placeholder="" name="data[Company Name]" required>
			
			  <label for="Firm's Legal Identity No.(GST/ Firm Reg./ Pan card)(Any one)"><b>Firm's Legal Identity No.(GST/ Firm Reg./ Pan card)(Any one)</b></label>
              <input type="text" placeholder="" name="data[Firm's Legal Identity No.]">
                
              <label for="Pan Card No. (If firm's legal documents are not available, provide Owner's/ Proprietor's/ Individual's-Pan card details)
              "><b>Pan Card No. (If firm's legal documents are not available, provide Owner's/ Proprietor's/ Individual's-Pan card details)</b></label>
              <input type="text" placeholder="" name="data[Pan Card]">

              
              <label for="Aadhaar Card No. (If firm's legal documents are not available, provide Owner's/ Proprietor's/ Individual's-aadhaar card details)
              Aadhaar Card No."><b>Aadhaar Card No. (If firm's legal documents are not available, provide Owner's/ Proprietor's/ Individual's-aadhaar card details)
                </b></label>
              <input type="text" placeholder="" name="data[Aadhaar Card No.]">

              <label for="Contact Person Name"><b>Contact Person Name<span style="font-size:18px; color:#FF0000" >*</span></b></label>
              <input type="text" placeholder="" name="data[Contact Person]" required>
              <div class="form-group">

			  <label for="WhatsApp No."><b>WhatsApp No.</b></label>
              <input type="text" placeholder="" name="data[WhatsApp No.]">

			  <label for="Email Address"><b>Email Address</b></label>
			  <input type="email" placeholder="Email Address" name="data[Email Address]"><br><br>


			  <label for="mobile1"><b>Enter Mobile Number<span style="font-size:18px; color:#FF0000">*</span></b></label>
              <input type="number" id="mob1" oninput="NumberCopyToNextInputField()" name="data[Mobile No.]" required><br><br>


              <label for="Designation /Position (Relationship with the firm)
              (Ex- Owner/ Proprietor /Employee's designation/ Relative/ Agent/ etc. )"><b>Designation /Position (Relationship with the firm)
                (Ex- Owner/ Proprietor /Employee's designation/ Relative/ Agent/ etc. )</b></label>
              <input type="text" placeholder="" name="data[Designation]">

              <label for="Category Status(Any)"><b>Category Status(Any)<span style="font-size:18px; color:#FF0000" >*</span></</b></label><br>
              <input type="checkbox" name="data[commodity Trader]">
              
              <label for="Commodity Trader">Commodity Trader/ Commission Agent</label><br>
              <input type="checkbox" name="data[Food Processor]">
              <label for="Food Processor">Food Processor</label><br>

              <input type="checkbox" name="data[Service Provider]">
              <label for="Service Provider">Service Provider</label><br><br>
              
              <label for="If (Trader/ Agent/ Food Processor) Name of the Commodity"><b>If (Trader/ Agent/ Food Processor) Name of the Commodity</b></label>
              <input type="text" placeholder="" name="data[Commodity Name]">

              <label for="If (Service provider) Name of the Services"><b>If (Service provider) Name of the Services</b></label>
              <input type="text" placeholder="" name="data[Service Name]">

              <label for="Address of the Firm/ Company"><b>Address of the Firm/ Company</b></label>
              <input type="text" placeholder="" name="data[Firm Address]">

              <label for="Town"><b>Town<span style="font-size:18px; color:#FF0000" >*</span></b></label>
              <input type="text" placeholder="Town" name="data[Town]" required>

              <label for="District"><b>District<span style="font-size:18px; color:#FF0000" >*</span></b></label>
              <input type="text" placeholder="District" name="data[District]" required>

              <label for="State"><b>State<span style="font-size:18px; color:#FF0000" >*</span></b></label>
              <input type="text" placeholder="State" name="data[State]" required>

              <label for="Pin Code"><b>Pin Code</b><span style="font-size:18px; color:#FF0000" >*</span></label>
              <input type="text" placeholder="Pin Code" name="data[Pin Code]" required>

              <label for="Business Turnover (If available) Rupees in lakhs"><b>Business Turnover (If available) Rupees in lakhs</b></label>
              <input type="text" placeholder="" name="data[Business Turnover]">

              <label for="Business Tenure(Yrs.)"><b>Business Tenure(Yrs.)</b></label>
              <input type="text" placeholder="" name="data[Business Tenure Yrs.]">

                
			  <label for="Any Association with SLCM Group (SLCM/ NEFM/ Kissandhan/ Growth)"><b>Any Association with SLCM Group (SLCM/ NEFM/ Kissandhan/ Growth)</b></label><br>
              <div class="form-check">
                        <input class="form-check-input" type="radio" name="data[Is association with SLCM]" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                        Yes
                        </label>
              </div><br>

              <label for="If associated with Competitor (Related to Agri. commodity), Name"><b>If associated with Competitor (Related to Agri. commodity), Name</b></label>
              <input type="text" placeholder="" name="data[associated with Competitor]">

              <label for="Any Suggestion/ Feedback"><b>Any Suggestion/ Feedback</b></label>
              <input type="text" placeholder="" name="data[Feedback]">

              <label for="Date:"><b>Date:</b></label>
              <input type="date" placeholder="Date:" name="data[Date:]"><br><br>
              
              <label for="RespondantEmail" required><b>Respondant Email ID( Person's Mail ID who is filling the form)</b><span style="font-size:18px; color:#FF0000" >*</span></label>
              <input type="email" placeholder="" name="data[Respondant Email]"><br>


			 <!-- <label for="fileup"><b>File Upload</b></label>
              <input type="file" name="data[fileUp]" required>    -->

			</div>
		     

			<div class="declaration"><label for="Declaration"><b>Declaration:<span style="font-size:18px; color:#FF0000" >*</span><br>1. I hereby declare that the information furnished above are true and correct to the best of my knowledge and belief and I undertake to inform you of any changes therein, immidiately. In case of any of the above information is found to be false or untrue or misleading or misrepresenting, I am aware that I may be held liable for it.<br><br>2. I am providing the above information and signing this form by my own free will. The Company i.e. Sohan Lal Commodity Management Pvt. Ltd. has not exerted any dur pressure or influence on me in this regard. Further, I hereby authorize Sohan Lal Commodity Management Pvt. Ltd. to use the information for its commercial purposes only.</b></label>
            <input type="checkbox" name="data[Declaration:]" required><b>&nbsp;  I agree</b></div><br>





				<div class="form-group" id="Mobi">
			    <label for="mobile">Mobile verification<span style="font-size:18px; color:#FF0000" >*</span></label>
			    <input type="number" class="form-control" id="mob"  placeholder="" readonly>
				







			</div>
			   
			  </div>
			  <div class="form-group" id="otpdiv">
			    <label for="otp verification">Enter OTP</label>
			    <input type="text" class="form-control" id="otp" placeholder="Enter OTP" name="data[OTP]">
			    <br>
			    <div class="countdown"></div>
				<a href="#" id="resend_otp" type="button">Resend</a>
			  </div>
			 
			  <button type="button" id="sendotp" class="btn btn-primary" style="width:49%; margin-left:131px ">Send OTP</button>
			  <button type="button" id="verifyotp" class="btn btn-primary" style="width:49%; margin-left:131px ">Enter for mobile no. Verify OTP</button>
			  <button type="butto" id="verifyot" class="btn btn-primary" style="width:49%; margin-left:131px " >Submit information</button>
			  
			</form>
				

				<div class="col-6 ml-2">
					
				</div>
			</div>
            </div>
		

			
  <div class="popup" id="DIV">
      <img src="AgriReach.png" style="width: 90px;height: 70px; display: block;margin-left: auto;margin-right: auto;" >
       <p style="text-align: center;" >If you want to submitte the form through OTP verification click the cross or if you want to submitte the form through document upload press button</p>
	     <button onclick="PopupClose()" class="button3"style="width: 12%;"  ><span class="cur" >&times;</span></button>
         <input type="button" onclick="window.location.href='https://script.google.com/a/macros/slc-india.com/s/AKfycbzx6ycX0B4EBG6VpalVqt_tQhD-deFo-PGmFtcXiDSEGJwei-PHTQYbJ8-O668ys_nI2w/exec'" class="popup-close-btn" style="position: absolute;left: 36% ;margin-top: 40px ;width: 45%;background-color: #1085BB;border-radius: 100px;box-shadow:#5E5DF0 0 10px 20px -10px;
		                               color: #FFFF;cursor: pointer;display: inline-block;font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
                                       padding: 7px 20px;text-align: center;text-decoration: none;transition: all 250ms;border: 0;font-size: 16px;user-select: none;-webkit-user-select: none;touch-action: manipulation;
                                       hover:box-shadow: #5E5DF0 0 -25px 18px -14px inset,#5E5DF0 0 1px 2px,#5E5DF0 0 2px 4px,#5E5DF0 0 4px 8px,#5E5DF0 0 8px 16px,#5E5DF0 0 16px 32px;transform: scale(1.05) rotate(-1deg);
					                   text-align: center;" value="upload"/>
   <!--     <button type="submit" style="margin-left:80px ;width: 30%;background-color: #1085BB;border-radius: 100px;box-shadow:#5E5DF0 0 10px 20px -10px;
		                               color: #FFFF;cursor: pointer;display: inline-block;font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
                                       padding: 7px 20px;text-align: center;text-decoration: none;transition: all 250ms;border: 0;font-size: 16px;user-select: none;-webkit-user-select: none;touch-action: manipulation;
                                       hover:box-shadow: #5E5DF0 0 -25px 18px -14px inset,#5E5DF0 0 1px 2px,#5E5DF0 0 2px 4px,#5E5DF0 0 4px 8px,#5E5DF0 0 8px 16px,#5E5DF0 0 16px 32px;transform: scale(1.05) rotate(-1deg);
">Upload</button>    -->
    </div> 
   
		

		 





		<!-- html part ends-->

		<script>      /* type="text/javascript"*/
			
			$(document).ready(function(){


				function validate_mobile(mob){

					var pattern =  /^[6-9]\d{9}$/;

					if (mob == '') {

						return false;
					}else if (!pattern.test(mob)) {

						return false;
					}else{

						return true;
					}
				}


				//send otp function
				function send_otp(mob){

						var ch = "send_otp";
							
							$.ajax({

							url: "otp_process.php",
							method: "post",
							data: {mob:mob,ch:ch},
							dataType: "text",
							success: function(data){

								if (data == 'success') {

									$('#otpdiv').css("display","block");
									$('#sendotp').css("display","none");
									$('#verifyotp').css("display","block");
									$('#Mobi').css("display","none");
										timer();
									$('.otp_msg').html('<div class="alert alert-success">OTP sent successfully</div>').fadeIn();
										
										window.setTimeout(function(){
										$('.otp_msg').fadeOut();
									},1000)
										

                                    



								}else{

									$('.otp_msg').html('<div class="alert alert-danger">Error in sending OTP</div>').fadeIn();
										
										window.setTimeout(function(){
										$('.otp_msg').fadeOut();
									},1000)
								
								}
							}

						});
				}
				//end of send otp function


				//send otp function

				$('#sendotp').click(function(){

					var mob = $('#mob').val();

					

						if (validate_mobile(mob) == false) $('.otp_msg').html('<div class="alert alert-danger" style="position:absolute">Enter Valid mobile number</div>').fadeIn(); else 	send_otp(mob);

						window.setTimeout(function(){
							$('.otp_msg').fadeOut();
						},1000)
						
				
					    	
		

					});

				//end of send otp function


				//resend otp function
				$('#resend_otp').click(function(){

					var mob = $('#mob').val();
					
					send_otp(mob);
						$(this).hide();
				});
				//end of resend otp function


			//verify otp function starts

			$('#verifyotp').click(function(){

						
						var ch = "verify_otp";
						var otp = $('#otp').val();

						$.ajax({

							url: "otp_process.php",
							method: "post",
							data: {otp:otp,ch:ch},           
							dataType: "text",
							success: function(data){

									if (data == "success") { 
										
										
										
										$('#verifyotp').css("display","none");
									
										$('#verifyot').css("display","block");

									$('.otp_msg').html('<div class="alert alert-success"> OTP Verified successfully</div>').show().fadeOut(4000);  
											
										
				
 
 


									}else{
										alert("otp did not match");

									/*	$('.otp_msg').html('<div class="alert alert-danger">otp did not match</div>').show().fadeOut(4000);  */
									}
							}
						});
								

				});

			//end of verify otp function


			//start of timer function

			function timer(){

					var timer2 = "00:61";
					var interval = setInterval(function() {


					  var timer = timer2.split(':');
					  //by parsing integer, I avoid all extra string processing
					  var minutes = parseInt(timer[0], 10);
					  var seconds = parseInt(timer[1], 10);
					  --seconds;
					  minutes = (seconds < 0) ? --minutes : minutes;
					  
					  seconds = (seconds < 0) ? 59 : seconds;
					  seconds = (seconds < 10) ? '0' + seconds : seconds;
					  //minutes = (minutes < 10) ?  minutes : minutes;
					  $('.countdown').html("Resend otp in:  <b class='text-primary'>"+ minutes + ':' + seconds + " seconds </b>");
					  //if (minutes < 0) clearInterval(interval);
					  if ((seconds <= 0) && (minutes <= 0)){
					  	clearInterval(interval);
					  	$('.countdown').html('');
					  	$('#resend_otp').css("display","block");
					  } 
					  timer2 = minutes + ':' + seconds;
					}, 1000);

				}

			});

          function NumberCopyToNextInputField() {
             var x= document.getElementById("mob1").value;
             document.getElementById("mob").value =x;   
			 }      


            /* popup close screen */

		function PopupClose() {
  var a = document.getElementById("DIV");
  if (a.style.display === "none") {
    a.style.display = "block";
  } else {
    a.style.display = "none";
  }
}  

        
        
function SendOTP()
{
var form = document.getElementById('sheetdb-form');
             form.addEventListener("submit", e => {
              e.preventDefault();
              fetch(form.action, {
                method : "POST"
               body : new FormData(document.getElementById("sheetdb-form")),
              }).then(
                  response => response.json()
                  ).then((html) => {
                   alert('Success')
                 });
                });         
			}
             
             
		

 
        

				</script>  

</body>
</html>