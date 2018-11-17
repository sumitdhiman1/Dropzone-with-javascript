<html>
 <head>
 
        <title>Sign up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
		<script src="drop/dropzone.js"></script>

         

          <link rel = "stylesheet" href = "drop/min/dropzone.min.css">

		  <link rel="stylesheet" href="style.css">
 </head>
 
 
 
 <body>

<form action="parse.php" method="post" id='myDropzone' onkeydown="return validate(event);">
        <div class="container">
            <h2>Sign UP</h2>
		
            <div class="row">
                <div class="col-md-4"><div class="txt">First Name:</div></div>
                <div class="col-md-8">
                    <div class="form-group">
    
                            <input type="text" class="form-control" name="first" placeholder="First Name" id = "first1" style = "border-color:none;" >
							 <span id ="firstname" class="text-danger" ></span>
							
							
                    </div>
                </div>
				
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2 "><div class="txt">Last Name:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                            <input type="text" class="form-control" name="last" placeholder="Last Name" id ="last1" >
								 <span id ="lastname" class="text-danger"></span>							
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">Email:</div></div>
                <div class="col-md-8 col-xs-10 ">
                    <div class="form-group">
    
                            <input type="email" class="form-control" name="email" placeholder="Enter your email" id ="email1">
							 <span id ="emailname" class="text-danger"></span>	
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">Password:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                            <input type="password" class="form-control" name="password" placeholder="Enter your password" id ="password1" >
							<span id ="passwordname" class="text-danger"></span>
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">Confirm Password:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                            <input type="password" class="form-control" name="cpassword" placeholder="Enter your password again" id ="cpassword1" >
							<span id ="cpassword1name" class="text-danger"></span>
                    </div>
                </div>
                
            </div>
            
            
            <div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">State:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                           <select class="form-control" name="state" id ="state1"  >
						 
						     <option value="">Select your state</option>
                             <option value="Haryana"
                           

							 >Haryana</option>
                             <option value="Karnatka"  >karnatka</option>
                             <option value="Gujrat" >Gujrat</option>
                             <option value="Madya pradesh" >Madya pradesh</option>
                            </select>
							<span id ="statename" class="text-danger"></span>
							
                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">city:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                           <select class="form-control" name="city" id = "city1"> 
						        <option value="">Select your city</option>
                             <option value="Ambala"  >Ambala</option>
                             <option value="chandigarh" >chandigarh</option>
                             <option value="Barara" >Barara</option>
                             <option value="mullana"  >mullana</option>
                            </select>
								<span id ="cityname" class="text-danger"></span>

                    </div>
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">Gender:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                        <input type="radio"   name="radio" class="gen" value="Male" id = "male"
						
						>Male <input type="radio"  class="gen" value="Female" name="radio" id = "female"
						 
						>Female
							
                    </div>
					      <span id ="gendername" class="text-danger"></span> 
                </div>
                
            </div>
            
            <div class="row">
                <div class="col-md-4 col-xs-2"><div class="txt">Interested:</div></div>
                <div class="col-md-8 col-xs-10">
                    <div class="form-group">
    
                        <input type="checkbox" name="checkbox"  class="gen"  id="i1"
                        
						>Cricket
						<input type="checkbox" name="checkbox" class="gen" id="i2" 
				

						>
						Hockey<input type="checkbox" name="checkbox" class="gen" id="i3" 
						
						>Football
						
					
						
						
                    </div>
					 <span id ="checkname" class="text-danger"></span> 
										 
                </div>
                
            </div> 
			
		 <span id ="imagename" class="text-danger"></span> 
		 <div class="dropzone" id="my-dropzone"></div>
         <input style="margin-top:20px;" type="button" value="submit" name="submit" id='mysubmit' class="btn btn-primary" >
         <input type="submit" value="hidden submit" name="submit" id='submit' class="btn btn-primary" style="display:none;">
</div>

</form>
 
<script>
Dropzone.autoDiscover = false;
var myDropzone = new Dropzone("#my-dropzone", { 
    url: "parse.php", 
	autoProcessQueue: false,
	init: function() {
    var submitButton = document.querySelector("#mysubmit")
        myDropzone = this; // closure

    submitButton.addEventListener("click", function() {
		var first = document.getElementById('first1').value;
		var last = document.getElementById('last1').value;
		var email = document.getElementById('email1').value;
		var password = document.getElementById('password1').value;
		var cpassword = document.getElementById('cpassword1').value;
		var state = document.getElementById('state1').value;
	    var city = document.getElementById('city1').value;
		
		document.getElementById("lastname").innerHTML=" ";
			  document.getElementById("emailname").innerHTML=" ";
			  document.getElementById("passwordname").innerHTML=" ";
			  
			  document.getElementById("cpassword1name").innerHTML=" ";
			  
			   document.getElementById("statename").innerHTML=" ";
			   
			    document.getElementById("cityname").innerHTML=" ";
				document.getElementById("gendername").innerHTML=" ";
				
				
				 
				  document.getElementById("checkname").innerHTML=" ";
				
		
		var error = false;
		if(first == ''){
			document.getElementById('firstname').innerHTML = "Please enter first name";
			document.getElementById('first1').style.borderColor = "red";
			return false;
			error = true;
		}
		if(first.length >= 1){
				      document.getElementById('first1').style.borderColor = "green";
					 
				
				 }
		if(last == ''){
			document.getElementById('lastname').innerHTML = "Please enter last name";
			return false;
			error = true;
		}
		if(last.length >= 1){
				      document.getElementById('last1').style.borderColor = "green";
					 
				
				 }
		if(email == ''){
			document.getElementById('emailname').innerHTML = "Please enter your email";
			return false;
			error = true;
		}
		if(email.length >= 1){
				      document.getElementById('email1').style.borderColor = "green";
					 
				
				 }
		if(password == ''){
			document.getElementById('passwordname').innerHTML = "Please enter last name";
			return false;
			error = true;
		}
		if(password.length >= 1){
				      document.getElementById('password1').style.borderColor = "green";
					 
				
				 }
	    if(cpassword == ''){
			document.getElementById('cpassword1name').innerHTML = "Please enter last name";
			return false;
			error = true;
		}
		if(cpassword.length >= 1){
				      document.getElementById('cpassword1').style.borderColor = "green";
					 
				
				 }
		if(state == ''){
			document.getElementById('statename').innerHTML = "Please select your state";
			return false;
			error = true;
		}
		if(state.length >= 1){
				      document.getElementById('state1').style.borderColor = "green";
					 
				
				 }
		if(city == ''){
			document.getElementById('cityname').innerHTML = "Please enter city name";
			return false;
			error = true;
		}
		if(city.length >= 1){
				      document.getElementById('first1').style.borderColor = "green";
					 
				
				 }
		 if(document.getElementById("male").checked == false && document.getElementById("female").checked == false) {
                document.getElementById('gendername').innerHTML = "Please select your gender";
			
				  
                 return false;
				 
                 }
				 if(document.getElementById("i1").checked == false && document.getElementById("i2").checked == false && document.getElementById("i3").checked == false ) {
                document.getElementById('checkname').innerHTML = "Please select your checkbox";
			
				 return false;
				 	
            
				 }
		if(error == false){
			myDropzone.processQueue(); // Tell Dropzone to process all queued files.
			//document.getElementById("myDropzone").submit();
		}
    });

    // You might want to show the submit button only when 
    // files are dropped here:
    this.on("addedfile", function() {
      // Show submit button here and/or inform user to click it.
    });

  }
}); 
/* Dropzone.options.myDropzone = {

  // Prevents Dropzone from uploading dropped files immediately
  autoProcessQueue: false,

  init: function() {
    var submitButton = document.querySelector("#submit-all")
        myDropzone = this; // closure

    submitButton.addEventListener("click", function() {
      myDropzone.processQueue(); // Tell Dropzone to process all queued files.
    });

    // You might want to show the submit button only when 
    // files are dropped here:
    this.on("addedfile", function() {
      // Show submit button here and/or inform user to click it.
    });

  }
};*/
 
 function validate(e) {
		   document.getElementById("firstname").innerHTML=" ";
		  
		  var first = document.getElementById('first1').value;
			
			 var last = document.getElementById('last1').value;
			 
			 var email = document.getElementById('email1').value;
			 
			  var password = document.getElementById('password1').value;
			  var cpassword = document.getElementById('cpassword1').value;
			   var state = document.getElementById('state1').value;
			    var city = document.getElementById('city1').value;
			
			    
		  
		     
		     var KeyID = e.keyCode;
			 
			 
			 
			 
			 
			 
			 
			 
		    
		       document.getElementById("lastname").innerHTML=" ";
			  document.getElementById("emailname").innerHTML=" ";
			  document.getElementById("passwordname").innerHTML=" ";
			  
			  document.getElementById("cpassword1name").innerHTML=" ";
			  
			   document.getElementById("statename").innerHTML=" ";
			   
			    document.getElementById("cityname").innerHTML=" ";
				
				document.getElementById("gendername").innerHTML=" ";
				
				
				 
				  document.getElementById("checkname").innerHTML=" ";
			
		
			
	
			 
            
			 
			 	if (KeyID == 9){
				  if (first == "") {
                document.getElementById('firstname').innerHTML = "Please enter first name";
				document.getElementById('first1').style.borderColor = "red";
				document.getElementById('first1').focus();
				
                 return false;	 
                 }
				    if(first.length >= 1){
				      document.getElementById('first1').style.borderColor = "green";
					 
				
				 }
							
				 if (last == "") {
                document.getElementById('lastname').innerHTML = "Please enter last name";
				document.getElementById('last1').style.borderColor = "red";
					 document.getElementById('last1').focus();
					 return false;	 
			
                
                 } 
				 if(last.length >= 1){
				 document.getElementById('last1').style.borderColor = "green";
				
				 
				 
				
				 }
				  if (email == "") {
                document.getElementById('emailname').innerHTML = "Please enter your email";
				document.getElementById('email1').style.borderColor = "red";
				  document.getElementById('email1').focus();
                 return false;
                 }
				 if(email.length >= 1){
				 document.getElementById('email1').style.borderColor = "green";
				
				 
				
				 }
				 if (password == "") {
                document.getElementById('passwordname').innerHTML = "Please enter your password";
				document.getElementById('password1').style.borderColor = "red";
				document.getElementById('password1').focus();
                 return false;
                 }
				 if(password.length >= 1){
				 document.getElementById('password1').style.borderColor = "green";
				 
				
				 }
				  if (cpassword == "") {
                document.getElementById('cpassword1name').innerHTML = "Please enter your cpassword";
				document.getElementById('cpassword1').style.borderColor = "red";
				document.getElementById('cpassword1').focus();
                 return false;
                 }
				 if(cpassword.length >= 1){
				 document.getElementById('cpassword1').style.borderColor = "green";
				 
				
				 }
				 if (state == "") {
               document.getElementById('statename').innerHTML = "Please select your state";
			   document.getElementById('state1').style.borderColor = "red";
			   document.getElementById('state1').focus();
                 return false;
                 }
				 if(state.length >= 1){
				 document.getElementById('state1').style.borderColor = "green";
				 
				
				 }
				  if (city == "") {
               document.getElementById('cityname').innerHTML = "Please select your city";
			   document.getElementById('city1').style.borderColor = "red";
			   document.getElementById('city1').focus();
                 return false;
                 }
				 if(city.length >= 1){
				 document.getElementById('city1').style.borderColor = "green";
				  
				
				 }
				  if(document.getElementById("male").checked == false && document.getElementById("female").checked == false) {
                document.getElementById('gendername').innerHTML = "Please select your gender";
			
				  
                 return false;
				 
                 }
				 if(document.getElementById("i1").checked == false && document.getElementById("i2").checked == false && document.getElementById("i3").checked == false ) {
                document.getElementById('checkname').innerHTML = "Please select your checkbox";
			
				 return false;
				 	
            
				 }
				 
				 
				 
				 
				
				
				}
				
				}
</script>
  </body>
</html>


