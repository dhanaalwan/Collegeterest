<?php
	      if(isset($_POST['submit'])){
	        if(!empty($_POST['q1'])) {
	        	
	        	$data = "\n".$_POST['q1'];
	        	
	        	$myfile = fopen("output.csv", "a") or die("Unable to open file!");
	        	fwrite($myfile, $data);
	        	
	        } else {
	          echo 'Please select the value.';
	        }
	        
	      }
	      header("Location: pyrun.php");
	    ?>