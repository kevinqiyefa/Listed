<div class="container" id="login-logout">
    <?php if (isset($_SESSION['email']) && isset($_SESSION['password'])) { ?>

        <?php if (strpos($_SESSION['email'], 'listed') == true) { 
                ?>
                <br> <br> <br> <br>
                <div class="container-fluid">

                        <div id="box" style="margin-top: 40px; margin-bottom: 50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">

                <div>
                    <a href="<?php echo URL; ?>listings/createaddressListing"><button type="button" class="btn btn-success btn-lg">Create Property</button></a>
                    <br><br>
                    <a href="<?php echo URL; ?>listings/editproperties"><button type="button" class="btn btn-warning btn-lg">Edit Property</button></a>
                    <br><br>
                    <a href="<?php echo URL; ?>listings/deleteproperties"><button type="button" class="btn btn-danger btn-lg">Delete Property</button></a>
                </div>
                        </div>
                </div>
                <br>
            <?php } ?>


            <!-- List all users in the database -->

            <?php if (strpos($_SESSION['email'], 'vinqiyf@gmail') == true) {
                ?>

                <h2> View for Admin Only</h2>
                <h3>Current Users</h3>
                <table class="table table-striped">
                    <thead style="background-color: #66ccff; font-weight: bold;">
                        <tr>
                            <td>Id</td>
                            <td>Type</td>
                            <td>First</td>
                            <td>Last</td>
                            <td>Email</td>
                            <td>Image Id</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) { ?>
                            <tr>
                                <td><?php if (isset($user->id)) echo $user->id; ?></td>
                                <td><?php if (isset($user->user_type)) echo $user->user_type; ?></td>
                                <td><?php if (isset($user->first_name)) echo $user->first_name; ?></td>
                                <td><?php if (isset($user->last_name)) echo $user->last_name; ?></td>
                                <td><?php if (isset($user->email)) echo $user->email; ?></td>
                                <td><?php if (isset($user->image_id)) echo $user->image_id; ?></td>
                            </tr>
                        <?php } ?>
                    <br>
                    </tbody>
                </table>    
                <?php
                }?>
                
                
                
               <?php if ((strpos($_SESSION['email'], 'vinqiyf@gmail') == FALSE) && (strpos($_SESSION['email'], 'listed') == FALSE)) {
                ?>
                <h2> View for Normal Users Only</h2>
                <h3>-----------------------</h3><br><br>
                <?php
                
               }   
                    
                    
            }
        ?>
        </div>
