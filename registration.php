<!--
Into this file, we create a layout for registration page.
-->
<?php
include_once('header1.php');
include_once('link.php');
?>

<div id="frmRegistration">
<form class="form-horizontal" action="registration_code.php" method="POST">
	<h1>Գրանցվել</h1>
	<div class="form-group">
    <label class="control-label col-sm-2" for="firstname">Անուն:</label>
    <div class="col-sm-6">
      <input type="text" name="firstname" class="form-control" id="firstname" placeholder="">
	  <span class="error">* <?php echo $nameErr;?></span>

    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Ազգանուն:</label>
    <div class="col-sm-6">
      <input type="text" name="lastname" class="form-control" id="lastname" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="lastname">Սեռ:</label>
    <div class="col-sm-6">
      <label class="radio-inline"><input type="radio" name="gender" value="Male">Արական</label>
	  <label class="radio-inline"><input type="radio" name="gender" value="Female">Իգական</label>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="address">Հասցե:</label>
    <div class="col-sm-6">
      <input type="text" name="address" class="form-control" id="address" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="email">Էլ․ հասցե:</label>
    <div class="col-sm-6">
      <input type="email" name="email" class="form-control" id="email" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Գաղտնաբառ:</label>
    <div class="col-sm-6">
      <input type="password" name="password" class="form-control" id="pwd" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" name="create" class="btn btn-primary">Գրանցվել</button>
    </div>
  </div>
</form>
</div>
