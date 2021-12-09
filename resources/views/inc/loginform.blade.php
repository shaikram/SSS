<div class="reg_div">
  <h3 class="text-center" style="color: rgb(0,23,77);">LOGIN YOUR ACCOUNT</h3>
  <form method="post"  action="checklogin" style="background: #1b3242;padding-top: 10px;padding-bottom: 10px;height:auto; padding-left: 10px;padding-right: 10px;" style="padding-right: 40px;padding-left: 40px;background-color: #002437;height: 373px;">
    @csrf
      <h2 class="sr-only">Login Form</h2>
      <div class="text-center illustration"><i class="icon ion-ios-locked-outline" style="font-size: 100px;color: rgb(134,170,249);"></i></div>
      <div class="form-group">
        <input class="form-control" type="email" name="email" placeholder="Email" required>
      </div>
      <div class="form-group">
        <input class="form-control" type="password" name="password" placeholder="Password" minlength="3" required>
      </div>
      <div class="form-group">
        <button class="btn btn-primary btn-block" name="login" type="submit">Log In</button>
      </div>
      <a class="forgot" href="register" style="color: rgb(48,168,231);">No have account yet? Click Here.</a>
  </form>
</div>
