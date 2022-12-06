 <?php include "header.php"?>
<?php include "project_header.php"?>
<div class="project_view">
<h1 Style="background-color: yellow">Silinder Area</h1><br><br>
	<img src="images/silinder.jpg" Style="width:300px; height:200px"/>
	<h2>height= 20</h2>
	<h2>Ratio= 10</h2>
	<h2>Formula is:Volume=pir * r)h</h2>
	<?php 
	$h =20;
	$r= 10;
	$volum= (3.1416 * $r * $r)*h;
	
	echo("silinder volume");echo($volum);
	?>
	<br>
	<br>
	</div>

 </div>


<?php include "footer.php"?>
	
