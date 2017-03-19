<div class="container-fluid">

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h1 class="page-header">Meet our Realtors
            </h1>
        </div>

        <div class="col-md-2 col-md-offset-1">
            <div class="thumbnail">
                <img src="../public/img/brown_man.png" alt="Some icon" class="img-circle">
                <div class="caption">
                    <h3>John Doe</h3>
                    <address>
                        <strong>San Francisco Agent</strong><br>
                        (650) 123-4567<br>
                        <a href="mailto:#">johndoe@listed.com</a><br>
                    </address> 
                    <p><a href="#" class="btn btn-default" role="button" data-toggle="modal" data-target="#dhruv">More Info</a></p>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="thumbnail">
                <img src="../public/img/brown_woman.png" alt="Some icon" class="img-circle">
                <div class="caption">
                    <h3>Jane Doe</h3>
                    <address>
                        <strong>San Francisco Agent</strong><br>
                        (415) 123-4567<br>
                        <a href="mailto:#">janedoe@listed.com</a><br>
                    </address> 
                    <p><a href="#" class="btn btn-default" role="button"  data-toggle="modal" data-target="#gilbert">More Info</a></p>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="thumbnail">
                <img src="../public/img/brown_man.png" alt="Some icon" class="img-circle">
                <div class="caption">
                    <h3>John Smith</h3>
                    <address>
                        <strong>San Francisco Agent</strong><br>
                        (650) 765-4321<br>
                        <a href="mailto:#">johnsmith@listed.com</a><br>
                    </address> 
                    <p><a href="#" class="btn btn-default" role="button"  data-toggle="modal" data-target="#jordan">More Info</a></p>
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="thumbnail">
                <img src="../public/img/brown_woman.png" alt="Some icon" class="img-circle">
                <div class="caption">
                    <h3>Jane Smith</h3>
                    <address>
                        <strong>Emeryville Agent</strong><br>
                        (415) 765-4321<br>
                        <a href="mailto:#">janesmith@listed.com</a><br>
                    </address> 
                    <p><a href="#" class="btn btn-default" role="button"  data-toggle="modal" data-target="#kevin">More Info</a></p>
                </div>
            </div>
        </div>


        <div class="col-md-2">
            <div class="thumbnail">
                <img src="../public/img/brown_woman.png" alt="Some icon" class="img-circle">
                <div class="caption">
                    <h3>Sally Sixpack</h3>
                    <address>
                        <strong>Emeryville Agent</strong><br>
                        (408) 765-4321<br>
                        <a href="mailto:#">sallysixpack@listed.com</a><br>
                    </address> 
                    <p><a href="#" class="btn btn-default" role="button"  data-toggle="modal" data-target="#kumari">More Info</a></p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="col-md-1"></div>
        <div class ="col-md-5">
            <h2>Our Location</h2>
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed/v1/place?q=407%20broadway%20sf&key=AIzaSyATmbdiDMW0P6zaoBwaQcScbNGX15ukZY8" width="350" height="350" frameborder="1" style="border:1" class="img-rounded"></iframe>
        </div>


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

            $body = "From: $name\n E-Mail: $email\n Message:\n $message";
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
                if (mail($to, $subject, $body, $from)) {
                    $result = '<div class="alert alert-success">Thank You! I will be in touch</div>';
                } else {
                    $result = '<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
                }
            }
        }
        ?>





        <div class=" bs-example row col-md-5 center-block">
            <h3>Contact us</h3>


            <br><br>
            <form class="form-horizontal" role="form" method="post" action="">
                <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="">
                        <?php if (isset($errName)) echo "<p class='text-danger'>$errName</p>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
                        <?php if (isset($errEmail)) echo "<p class='text-danger'>$errEmail</p>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="message" class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" rows="4" name="message"></textarea>
                        <?php if (isset($errMessage)) echo "<p class='text-danger'>$errMessage</p>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                        <?php if (isset($errHuman)) echo "<p class='text-danger'>$errHuman</p>"; ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-10 col-sm-offset-2">
                        <?php if (isset($result)) echo $result; ?>	
                    </div>
                </div>
            </form> 

        </div> 
    </div>

</div>


<!-- 
<div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-4">

<!-- <a class="btn btn-social-icon btn-lg btn-twitter">
    <i class="fa fa-twitter"></i>
</a>
<a class="btn btn-social-icon btn-lg btn-facebook">
    <i class="fa fa-facebook"></i>
</a>
<a class="btn btn-social-icon btn-lg btn-link">
    <i class="fa fa-linkedin"></i>
</a> -->
<!--   </div>
  <div class="col-md-3"></div>
</div>
<br>
<div class="container-fluid">
  <div class="col-md-1"></div>
  <div class="col-md-3">

<!--        <p><small>
              Avatars provided by IconArchive.com. <br>
              License may be examined 
              <a href="https://creativecommons.org/licenses/by-nc/4.0/legalcode"> here</a>.</small>
      </p>-->
<!--    </div>
</div> -->


<!-- Realtor #1 Modal-->
<div class="modal fade" id="dhruv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h1 class="modal-title" id="myModalLabel">John Doe</h1>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <a href="#" class="thumbnail">
                            <img src="../public/img/brown_man.png">
                        </a>
                    </div>
                    <div id="listingheader">
                        <p>
                            I have lived in the Russian River area for over 30 years. I know the 
                            movers and shakers of the area having grown up and worked here since 
                            childhood. Prior to my affiliation with Zephyr Real Estate, my 
                            professional experience includes 19+ years with Frank Howard Allen 
                            REALTORS®. My contacts with reliable and efficient local professionals 
                            make the complicated venture of home purchasing and selling far less 
                            daunting.
                        </p>
                        <p>
                            Coming from a Computer Science background, I also have the technical 
                            tools to succeed in an ever changing and high tech marketplace.             
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Realtor #2 Modal-->
<div class="modal fade" id="gilbert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h1 class="modal-title" id="myModalLabel">Jane Doe</h1>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <a href="#" class="thumbnail">
                            <img src="../public/img/brown_woman.png">
                        </a>
                    </div>
                    <div id="listingheader">
                        <p>
                            I have lived in the Russian River area for over 30 years. I know the 
                            movers and shakers of the area having grown up and worked here since 
                            childhood. Prior to my affiliation with Zephyr Real Estate, my 
                            professional experience includes 19+ years with Frank Howard Allen 
                            REALTORS®. My contacts with reliable and efficient local professionals 
                            make the complicated venture of home purchasing and selling far less 
                            daunting.
                        </p>
                        <p>
                            Coming from a Computer Science background, I also have the technical 
                            tools to succeed in an ever changing and high tech marketplace.             
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Realtor #3 Modal-->
<div class="modal fade" id="jordan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h1 class="modal-title" id="myModalLabel">John Smith</h1>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <a href="#" class="thumbnail">
                            <img src="../public/img/brown_man.png">
                        </a>
                    </div>
                    <div id="listingheader">

                        <p>
                            I have lived in the Russian River area for over 30 years. I know the 
                            movers and shakers of the area having grown up and worked here since 
                            childhood. Prior to my affiliation with Zephyr Real Estate, my 
                            professional experience includes 19+ years with Frank Howard Allen 
                            REALTORS®. My contacts with reliable and efficient local professionals 
                            make the complicated venture of home purchasing and selling far less 
                            daunting.
                        </p>
                        <p>
                            Coming from a Computer Science background, I also have the technical 
                            tools to succeed in an ever changing and high tech marketplace.              
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Realtor #4 Modal-->
<div class="modal fade" id="kevin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h1 class="modal-title" id="myModalLabel">Jane Smith</h1>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <a href="#" class="thumbnail">
                            <img src="../public/img/brown_woman.png">
                        </a>
                    </div>
                    <div id="listingheader">
                        <p>
                            I have lived in the Russian River area for over 30 years. I know the 
                            movers and shakers of the area having grown up and worked here since 
                            childhood. Prior to my affiliation with Zephyr Real Estate, my 
                            professional experience includes 19+ years with Frank Howard Allen 
                            REALTORS®. My contacts with reliable and efficient local professionals 
                            make the complicated venture of home purchasing and selling far less 
                            daunting.
                        </p>
                        <p>
                            Coming from a Computer Science background, I also have the technical 
                            tools to succeed in an ever changing and high tech marketplace.               
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Realtor #5 Modal-->
<div class="modal fade" id="kumari" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h1 class="modal-title" id="myModalLabel">Sally Sixpack</h1>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <a href="#" class="thumbnail">
                            <img src="../public/img/brown_woman.png">
                        </a>
                    </div>
                    <div id="listingheader">
                        <p>
                            I have lived in the Russian River area for over 30 years. I know the 
                            movers and shakers of the area having grown up and worked here since 
                            childhood. Prior to my affiliation with Zephyr Real Estate, my 
                            professional experience includes 19+ years with Frank Howard Allen 
                            REALTORS®. My contacts with reliable and efficient local professionals 
                            make the complicated venture of home purchasing and selling far less 
                            daunting.
                        </p>
                        <p>
                            Coming from a Computer Science background, I also have the technical 
                            tools to succeed in an ever changing and high tech marketplace.            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
