<div class="container">
  <div class="col-md-2">&nbsp;</div>
  <div class="col-md-8">
    <form class="form-horizontal" action='<?php echo base_url(); ?>login/registration' method="POST">
      <fieldset>
        <div id="legend">
          <legend class="">Register</legend>
        </div>
        <div class="control-group">
          <!-- Username -->
          <label class="control-label"  for="username">Username</label>
          <div class="controls">
            <input type="text" id="username" name="username" placeholder="Enter Username" class="input-xlarge">
            
          </div>
        </div>

        <div class="control-group">
          <!-- Username -->
          <label class="control-label"  for="firstname">First Name</label>
          <div class="controls">
            <input type="text" id="firstname" name="firstname" placeholder="Enter First Name" class="input-xlarge">
          </div>
        </div>

        <div class="control-group">
          <!-- Username -->
          <label class="control-label"  for="lastname">Last Name</label>
          <div class="controls">
            <input type="text" id="lastname" name="lastname" placeholder="Enter Last Name" class="input-xlarge">
          </div>
        </div>
     
        <div class="control-group">
          <!-- E-mail -->
          <label class="control-label" for="email">E-mail</label>
          <div class="controls">
            <input type="text" id="email" name="email" placeholder="Enter Your Email" class="input-xlarge">
           
          </div>
        </div>
     
        <div class="control-group">
          <!-- Password-->
          <label class="control-label" for="password">Password</label>
          <div class="controls">
            <input type="password" id="password" name="password" placeholder="Enter Password" class="input-xlarge">
          
          </div>
        </div>
     
        <div class="control-group">
          <!-- Password -->
          <label class="control-label"  for="password_confirm">Password (Confirm)</label>
          <div class="controls">
            <input type="password" id="password_confirm" name="password_confirm" placeholder="Enter Confirm Password" class="input-xlarge">
            
          </div>
        </div>
     <br>
        <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <button class="btn btn-success">Register</button>
          </div>
        </div>
      </fieldset>
    </form>
  </div>
  <div class="col-md-2">&nbsp;</div>
</div>