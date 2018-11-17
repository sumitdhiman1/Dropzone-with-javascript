
<?php
session_start();
	 
$con = mysqli_connect("localhost","root","","sumit");
  
if( !empty($_FILES )){
			
	for($i=0;$i<count($_FILES['file']['tmp_name']);$i++)
		
	{
		
	$temp = $_FILES['file']['tmp_name'][$i];
	
	
	$dir_seperator = DIRECTORY_SEPARATOR;
	
	$folder = "uploads";
	
    $destination = dirname(__FILE__).$dir_seperator.$folder.$dir_seperator;
	
	$target_path = $destination.time().$_FILES['file']['name'][$i];
	
	$target_path1 =time().$_FILES['file']['name'][$i];

	$_SESSION['image'] = $target_path1;
	
	move_uploaded_file($temp,$target_path);
	
	$insert1  = "insert into image(name) values ('$target_path')";
	
      $run = mysqli_query($con,$insert1);
       if($run){
			
            echo "<script>alert('inserted')</script>";
	
       
			
         }		
		 else{
			 echo "error";
		 }

	
	
}

		}		

  
  ?>
  
  
  
  
  
  
  
  
  
  
  
  
 



























 
  
  
  