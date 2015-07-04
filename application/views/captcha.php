
<form method="post" action="<?php echo base_url();?>captcha">
<p>
  <label for="name">Name:
    <input id="name" name="name" type="text" />
  </label>
</p>
<?php echo $image; ?>
<p>
  <label for="name">Captcha:
    <input id="captcha" name="captcha" type="text" />
  </label>
</p>
<p>
  <label for="name">
    <input type="submit" name="submit" value="Submit">
  </label>
</p>
</form>
