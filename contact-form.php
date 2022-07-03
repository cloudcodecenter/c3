  	<?php
		$result="";
		  if (isset($_POST['submit'])){
			  
			  
			/*echo "<pre>"; print_r($_POST); exit;*/
			  
			$subject1 = "Thank you for contacting us";
			$txt1 = "Thank you for contacting us. We have received your enquiry and will respond to you within 24 hours!";
			$headers = "From: CloudCodeCenter" . "\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			

			$subject = "New Inquiry for CloudCodeCenter";
			$txt = "Hi,". "<br><br>";
			$txt .= ucfirst($_POST['name'])." has query. Please reach out to with below information.". "<br><br>";
			$txt .= "email: ".$_POST['email']. "<br>";
			$txt .= "phone: ".$_POST['phone']. "<br>";
			$txt .= "message: ".$_POST['message']. "<br>";
			$txt .= "Thanks!";
	  
	 
			//user
			mail($_POST['email'],$subject1,$txt1,"From: info@cloudcodecenter.com" . "\r\n" . "Content-Type: text/plain; charset=utf-8",
			"-finfo@cloudcodecenter.com");
			
			//client
			mail('info@cloudcodecenter.com',$subject,$txt,"From: info@cloudcodecenter.com" . "\r\n" . "Content-type:text/html;charset=iso-8859-1",
			"-finfo@cloudcodecenter.com");
			
			//echo '<script>alert("Welcome to Geeks for Geeks")</script>';
			
			echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated');
    window.location.href='contact.html';
    </script>");
	


		//echo "<span style='color: green;' class='contactmsg'>Thank you for contacting us. We have received your enquiry and will respond to you within 24 hours</spane>";
	  }
	
	?>
