<div class="main-wrapper">
    <div class="account-page">
        <div class="container">
            <h3 class="account-title">Login</h3>
            <div class="account-box">
                <div class="account-wrapper">
                    <div class="account-logo">
                        <a href="<?php echo base_url();?>login"><img src="<?php echo base_url();?>assets/images/alumni-logo.png" alt="Alumni Login"></a>
                    </div>
                    <form class="form-signin">
                      <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
                      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                      <label for="inputEmail" class="sr-only">Email address</label>
                      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                      <label for="inputPassword" class="sr-only">Password</label>
                      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                      <div class="checkbox mb-3">
                        <label>
                          <input type="checkbox" value="remember-me"> Remember me
                        </label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                      <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
                    </form>
                    <!-- <form action="<?php echo base_url();?>alumni/auth" method="post">
                        <div class="form-group form-focus">
                            <label class="control-label">Mobile or Email</label>
                            <input name="username_email" class="form-control floating" type="text" required autofocus>
                        </div>
                        <div class="form-group form-focus">
                            <label class="control-label">Password</label>
                            <input name="password" class="form-control floating" type="password" required>
                        </div>
                        <p ><?php echo $this->session->flashdata('msg');?></p>
                        <div class="form-group text-center">
                            <button class="btn btn-primary btn-block account-btn" type="submit">Login</button>
                        </div>
                        <div class="text-center">
                            <a href="<?php echo base_url();?>login/forgot_password">Forgot your password?</a>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</div>