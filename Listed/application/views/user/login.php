
<div class="container-fluid">  
    <div class="row">


        <div class="form-signin">
            <h1 class="page-header">Please Log In
            </h1>
            <form role="form" action="<?php echo URL; ?>users/loginRun" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" id="email" value="<?php if(isset($_COOKIE['email'])) echo $_COOKIE['email']; ?>" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="password" value="<?php if(isset($_COOKIE['password'])) echo $_COOKIE['password']; ?>" placeholder="Password">
                </div>

                <div class="checkbox">
                    <label for="remember_me">
                        <input type="checkbox" id="remember_me" name="remember_me" <?php if(isset($_COOKIE['email'])){echo "checked='checked'"; } ?> value="1" /> Remember me
                    </label>
                </div>

                <button type="submit" class="btn btn-success" name="login">Log In</button>
            </form>

        </div>
    </div>
</div>