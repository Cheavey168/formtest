<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheavey Tha</title>
</head>
<body>
    <h1> Form Cheavey Tha</h1>
    <form method="post" action="">
        <input type ="radio" name = "prefix" value ="Mrs." checked> Mrs.
        <input type ="radio" name = "prefix" value ="Miss"> Miss
        <input type ="radio" name = "prefix" value ="Mr."> Mr. <br>
        Full name <input type="text" name= "fullname" autofucus required><br>
        Facualty
        <select name ="major">
            <option value=" Accounting"> Accounting </option>
            <option value=" Management"> Management </option>
            <option value=" Marketing"> Marketing </option>
            <option value=" Business Com"> Business Com </option>
        </select> <br>

        Address <br>
        <textarea name="address" id="" cols="30" rows="5"></textarea> <br>

        <button type ="submit" name ="Submit">Save<button> <br>
    </form>
    <hr>

<?php
if(isset ($_POST['Submit'])) {
    echo $_POST ['prefix']. "<br>";
    echo $_POST ['fullname']. "<br>";
    echo "Facualty:" .$_POST ['major']. "<br>";
    echo "Address: " .$_POST['address']. "<br>";
}
?>



</body>
</html>