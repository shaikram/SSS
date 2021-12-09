<div style="background-color: #006093;padding-top: 119px;padding-bottom: 84px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="padding-right: 50px;padding-left: 50px;">
                <h3 class="text-center" style="color: rgb(0,23,77);">LOGIN YOUR ACCOUNT</h3>
                <form method="post" action="functions/login.php" style="padding-right: 40px;padding-left: 40px;background-color: #002437;height: 373px;">
                      <h2 class="sr-only">Login Form</h2>
                      <div class="text-center illustration"><i class="icon ion-ios-locked-outline" style="font-size: 100px;color: rgb(134,170,249);"></i></div>
                      <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email" required>
                      </div>
                      <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" minlength="8" required>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-primary btn-block" name="login" type="submit">Log In</button>
                      </div>
                      <a class="forgot" href="register" style="color: rgb(48,168,231);">No have account yet? Click Here.</a>
                  </form>
            </div>
            <div class="col-md-6" style="padding-right: 50px;padding-left: 50px;">
                <h3 class="text-center" style="color: rgb(0,23,77);">REGISTER YOUR ACCOUNT</h3>
                <form class="text-center" id="regForm" method="post" action="functions/register.func.php" style="padding-right: 40px;padding-left: 40px;height: 429px;background-color: #002437;">
                        <h2 class="sr-only">Login Form</h2><img src="assets/img/800px-Social_Security_System_(SSS).svg.png" width="100px" style="margin-top: 39px;margin-bottom: 40px;">
                        <div class="illustration"></div>
                        <div class="form-group">
                          <input class="form-control" id="input1" type="text" name="username" placeholder="Username" onblur="myFunction(document.getElementById('input1'), document.getElementById('error1'));">
                          <span id="error1" class="error_msg"></span>
                        </div>
                        <div class="form-group">
                          <input class="form-control" id="input2" type="email" name="email" placeholder="Email" onblur="myFunction(document.getElementById('input2'), document.getElementById('error2'));">
                          <span id="error2" class="error_msg"></span>
                        </div>
                        <div class="form-group">
                          <input class="form-control" id="input3" type="password" name="password" placeholder="Password" onblur="myFunction(document.getElementById('input3'), document.getElementById('error3'));">
                        </div>
                        <div class="form-group">
                          <input class="form-control" id="input4" type="password" placeholder="Confirm Password" onblur="myFunction(document.getElementById('input4'), document.getElementById('error3'));">
                          <span id="error3" class="error_msg"></span>
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary btn-block" type="submit" name="register">Register</button>
                        </div>
                        <a class="forgot" href="login" style="color: rgb(48,168,231);">Already have an account? Click Here.</a>
                  </form>
            </div>
        </div>
    </div>
</div>
