<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheavey Tha</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body>

<form class="form-horizontal" method ="post" action ="">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Status</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input type="radio" name="radios" id="radios-0" value="Mr." checked="checked">
      Mr.
    </label> 
    <label class="radio-inline" for="radios-1">
      <input type="radio" name="radios" id="radios-1" value="Mss.">
      Mss.
    </label> 
    <label class="radio-inline" for="radios-2">
      <input type="radio" name="radios" id="radios-2" value="Mrs.">
      Mrs.
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fullName">Full Name</label>  
  <div class="col-md-4">
  <input id="fullName" name="fullName" type="text" placeholder="Input your name" class="form-control input-md">
  <span class="help-block">help</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Facualty">Facualty</label>
  <div class="col-md-4">
    <select id="Facualty" name="Facualty" class="form-control">
      <option value="Acc">Acc</option>
      <option value="MK">MK</option>
      <option value="Mg">Mg</option>
      <option value="BIT">BIT</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="addr">Address</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="addr" name="addr">Address
</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="Submit" type = "submit" name="submit" class="btn btn-primary">Sign in</button>
  </div>
</div>

</fieldset>
</form>




    <hr>

<?php
if(isset ($_POST['submit'])) {
    echo "Full name: " .$_POST ['fullName']. "<br>";
    echo "Facualty: " .$_POST ['Facualty']. "<br>";
    echo "Address: " .$_POST['addr']. "<br>";
}
?>



</body>
</html>