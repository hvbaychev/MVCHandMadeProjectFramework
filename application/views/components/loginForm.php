<?php $this->flash('accountCreated', "Your account has been created successfully"); ?>
<h2>User Login:</h2>
<form action="<?php echo BASEURL; ?>/accountController/userLogin" method="POST">

<div class="form-group">
<input type="email" name="email" class="form-control" placeholder="Email..." value="<?php if(!empty($data['email'])) { echo $data['email']; } ?>">

<div class="error">
  <?php if(!empty($data['emailError'])): echo $data['emailError']; endif; ?>
</div>
</div>
<div>
    <input type="password" name="password" class="form-control" placeholder="Password..." value = "<?php if(!empty($data['password'])) { echo $data['password']; } ?>">
    <div class="error">
  <?php if(!empty($data['passwordError'])): echo $data['passwordError']; endif; ?>
</div>
</div>
<div>
    <input type="submit" name="lginBtn" class="btn btn-primary"  value="Login">
</div>
</form>