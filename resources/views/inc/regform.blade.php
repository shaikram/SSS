<div class="reg_div">
  <!-- <div class="col-md-6"> -->
      <h3 class="text-center" style="color: rgb(0,23,77);">REGISTER ACCOUNT</h3>
      <form class="text-center" id="regForm" style="background: #1b3242;padding-top: 10px;padding-bottom: 10px;height:auto; padding-left: 10px;padding-right: 10px;" method="post" action="functions/register.func.php" style="padding-right: 40px;padding-left: 40px;height: 429px;background-color: #002437;">
          <h2 class="sr-only">Login Form</h2><img src="assets/img/800px-Social_Security_System_(SSS).svg.png" width="100px" style="margin-top: 39px;margin-bottom: 40px;">
          <div class="illustration"></div>
          <div class="form-group">
            <input class="form-control" onblur="myFunction(document.getElementById('input1'), document.getElementById('error1'));" type="text" id="input1" name="username" placeholder="Username">
            <span id="error1" class="error_msg"></span>
          </div>
          <div class="form-group">
            <input class="form-control" onblur="myFunction(document.getElementById('input2'), document.getElementById('error2'));" type="email" id="input2" name="email" placeholder="Email">
            <span id="error2" class="error_msg"></span>
          </div>
          <div class="form-group">
            <input class="form-control" onblur="myFunction(document.getElementById('input3'), document.getElementById('error3'));" type="password" id="input3" name="password" placeholder="Password">

          </div>
          <div class="form-group">
            <ul style="padding:0 0 20px 20px;">
              <li style="color:#fff;float: left;">Password must have min. of 8 characters/string.</li>
              <li style="color:#fff;float: left;">Your password can’t be too similar to your other personal information.</li>
              <li style="color:#fff;float: left;">Your password can’t be a commonly used password..</li>
            </ul>
          </div>
          <div class="form-group"><br><br>
            <input class="form-control" onblur="myFunction(document.getElementById('input4'), document.getElementById('error3'));" type="password" id="input4" placeholder="Confirm Password">
            <span id="error3" class="error_msg"></span>
          </div>
          <div class="form-group">
            <button class="btn btn-primary btn-block" type="submit" name="register">Register</button>
          </div>
          <a class="forgot" href="login" style="color: rgb(48,168,231);">Already have an account? Click Here.</a>
        </form>
  <!-- </div> -->
</div>
