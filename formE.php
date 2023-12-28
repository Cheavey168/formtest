<center>
  <h1 style="color: brown;">Doggee house application</h1>
</center>
<?php
//require 'e.php';
if(isset ($_POST['submit'])) 
{
    echo "<body style='background-color:bisque'>";
    echo '<span style="color: brown; font-size: 25px;">';
    echo "<div style=\"text-align:center\">";
    echo "Full name: " .$_POST ['title'].$_POST ['fname']. "<br>";
   // "fname: " .$_POST ['fname']. "<br>"; -->
    echo "Date of birth: " .$_POST ['dob']. "<br>";
    echo "Education: " .$_POST ['eduLevel']. "<br>";
    echo "Position: " .$_POST['position']. "<br>";
    echo "Experience: " .$_POST['exp']. "<br>";
    echo "Talent: " .$_POST['talent']. "<br>"; 
    echo "</div>";
}
?>