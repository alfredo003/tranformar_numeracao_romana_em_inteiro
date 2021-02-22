<?php require "function.php";?>
<h1>- Transformar numeração romana em inteiro.</h1>
<form> <input type="text" name="q"><button type="submit" name="btn">transformar</button></form>

<?php
if(isset($_GET['btn'])):
 $q = strtoupper($_GET['q']);

echo $q .'='.romano2int($q);
endif;
?>