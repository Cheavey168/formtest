<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheavey Tha</title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>
<body style="background-color: bisque;">

<form class="form-horizontal" method ="post" action ="formE.php">
<fieldset>
<fieldset>

<!-- Form Name 
<div class="form-group">
  <label class="col-md-6 control-label" font= "50px" >Doggee house application</label>  
  <div class="col-md-4">
  </div>
</div> -->
<center>
  <h1 style="color: brown;">Doggee house application</h1>
</center>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="title">Inline Radios</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="title-0">
      <input type="radio" name="title" id="title-0" value="Mr." checked="checked">
      Mr.
    </label> 
    <label class="radio-inline" for="title-1">
      <input type="radio" name="title" id="title-1" value="Mss.">
      Mss.
    </label> 
    <label class="radio-inline" for="title-2">
      <input type="radio" name="title" id="title-2" value="Mrs.">
      Mrs.
    </label>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fname">Full Name</label>  
  <div class="col-md-4">
  <input id="fname" name="fname" type="text" placeholder="Enter your full name" class="form-control input-md" required="" autofocus>
  <span class="help-block">help</span>  
  </div>
</div>

<!-- DoB-->
<div class="form-group">
  <label class="col-md-4 control-label" for="fname">Date of Birth</label>  
  <div class="col-md-4">
    <input type="date" name="dob" required> <br>
  <!--<span class="help-block">help</span>  -->
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="eduLevel">Education level</label>
  <div class="col-md-4">
    <select id="eduLevel" name="eduLevel" class="form-control">
      <option value="High school">High school</option>
      <option value="BA or equivalent">BA or equivalent</option>
      <option value="MA or equivalent">MA or equivalent</option>
      <option value="Dr or equivalent">Dr or equivalent</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="position">Position</label>
  <div class="col-md-4">
    <select id="position" name="position" class="form-control">
      <option value="Marketing agent">Marketing agent</option>
      <option value="IT support">IT support</option>
      <option value="Content creator">Content creator</option>
      <option value="Software designer">Software designer</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="exp">Experience</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="exp" name="exp">If you have any experience
</textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="talent">Talent</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="talent" name="talent">If you have any</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="summit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>
<hr>

<!-- <?php
if(isset ($_POST['submit'])) 
{
    echo "Full name: " .$_POST ['title'].$_POST ['fname']. "<br>";
   // "fname: " .$_POST ['fname']. "<br>"; -->
    echo "Date of birth: " .$_POST ['dob']. "<br>";
    echo "eduLevel: " .$_POST ['eduLevel']. "<br>";
    echo "position: " .$_POST['position']. "<br>";
    echo "exp: " .$_POST['exp']. "<br>";
    echo "talent: " .$_POST['talent']. "<br>";
}
?> -->

</body>
</html>