<!--
Into this file, we create a layout for login page.
-->

<?php
include_once('header1.php');
include_once('link.php');

?>

<div id="frmRegistration">
<form class="form-horizontal" method="POST" action="login_code.php">
	<h1>Մուտք</h1>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Էլ․ հասցե:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" name="email" id="email" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Գաղտնաբառ:</label>
    <div class="col-sm-6">
      <input type="password" class="form-control" name="password" id="pwd" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="login" class="btn btn-primary">Մուտք</button>
    </div>
  </div>
</form>
</div>
