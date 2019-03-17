<?php 
//require once
include "seguridad.php";
?>
<header>
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right">
		
		<span class="glyphicon glyphicon-user"></span>
		
		<p>
		<?php
			echo $_SESSION["id"]; 
			echo $_SESSION["usuario"];?>

		</p>

</div>
<header>