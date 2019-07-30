<div class="alumni-login-area wrapper-area">
    <div class="container">
        <div class="alumni-login-box">
            <div class="alumni-login-wrapper">
                <div class="alumni-login-logo text-center">
                    <a href="<?php echo base_url();?>alumni/"><img src="<?php echo base_url();?>assets/images/alumni/alumni-logo.png" alt="Alumni Login"></a>
                </div>
                <h1 class="login-title text-center">Login</h1>
                <form class="form-signin">
                    <div class="form-group">
                        <label for="inputEmail" class="sr-only">Email/Mobile</label>
                        <input type="email" id="inputEmail" class="form-control" placeholder="Email/Mobile" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  </div>
                    <!-- <div class="checkbox mb-3">
                    <label>
                      <input type="checkbox" value="remember-me"> Remember me
                    </label>
                  </div> -->
                  <button class="btn btn-lg btn-outline-secondary btn-block" type="submit">Sign in</button>
                  <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p> -->
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