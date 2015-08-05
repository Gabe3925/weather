<html>
<body>


<form action="index.php" method="post">

<p>Get a weather report for your city:

<select name="city">
<option value=""> -- Please select -- </option>
<option value="Baltimore">Baltimore, MD</option>
<option value="Seattle">Seattle, WA</option>
<option value="LosAngeles">Los Angeles, CA</option>
<option value="Nome">Nome, AK</option>
<option value="Paris">Paris, France</option>
</select>

<p><input type="submit" value="Check Weather!"></p>

</form>

Your weather report: <br />
<?php
include 'brain.php';
?>
 

</body>
</html>


