<!--<style type="text/css">
    .bs-example{
        margin: 20px;
    }
</style>-->

<?php

	if (isset($_POST["submit"])) {
		$name = htmlspecialchars($_POST['name']);      
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'kevinqiyf@gmail.com'; 
		$subject = 'Message from Contact Demo ';
                $errName = "";
                $errEmail = "";
                $errMessage = "";
                $errHuman = "";
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
                
      
                // If there are no errors, send the email
                if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
                        if (mail ($to, $subject, $body, $from)) {
                                $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
                        } else {
                                $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
                        }
                }
        }
?>


<div class="container-fluid">
    <div class="col-md-1"></div>
    <address class="col-md-4">
        <h2 class="page-header">Listed Inc.</h2>
        <h3> <p>1234 Broadway Street </p>
            <p>San Francisco, CA 94133</p>
            <p>Phone: 415-123-4567</p>
            <p>Fax: 415-123-4567</p>
            <p>Email: hello@Listed.com</p>
            <p>Hours: Mon-Fri (8:00 - 5:00)</p>
        </h3>
    </address>
    <div class=" bs-example row col-md-5 center-block">
        <h3>Contact us</h3>
        
        <!--
        <form action="#" >
            <div class="form-group">
                <label for="inputName">Name:</label>
                <input type="text" class="form-control" id="inputName" placeholder="Name" required/>
                <label for="inputNumber">Contact Number:</label>
                <input type="number" class="form-control" id="inputNumber" placeholder="Number" required/>
                <label for="inputEmail">Email:</label>
                <input type="email" class="form-control" id="inputEmail" placeholder="Email" required/> 
                <label for="inputMessage">Message:</label>
                <textarea class="form-control" rows="5" id="inputMessage" placeholder="Message" required></textarea>
                <br> <button type="submit" class=" btn btn-primary btn-lg col-lg-offset-10" onclick="sendemail()">Send</button> <br>
            </div>
        </form>
        -->
        
        
        <form class="form-horizontal" role="form" method="post" action="">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
                                                    <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
							<?php if(isset($errName)) echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
							<?php if(isset($errEmail)) echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"></textarea>
							<?php if(isset($errMessage)) echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php if(isset($errHuman)) echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php if(isset($result)) echo $result; ?>	
						</div>
					</div>
				</form> 
        
    </div> 
</div>
