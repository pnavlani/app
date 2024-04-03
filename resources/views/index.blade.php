<!-- Autor: Paras Navlani -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./Estils/estils.css">
	<title>Practica 5</title>
</head>
<body>
 <!--En aquest div mostrarem una barra en que es trobara l'opció de logar-se o enregistrar-se  -->   
<div class="navbar">
  
    <a href="./Controlador/logar.php">Inicia la Sessió</a> 
    <a href="./Controlador/registrar.php">Crea un compte</a> 
  
</div>


  <!--En aquest div guardarem els articles -->
<div class="contenidor">
		<h1>Articles</h1>
		<?php foreach($articles as $article): ?>
  <div class="article">
    <h4><?php echo $article['id'];?></h4>
    <p><?php echo $article['article'];?></p>
</div>
<?php endforeach; ?>

 <!--En aquest div tractarem l'estat del botó Anterior i Següent -->
<div class="paginacio">
    <ul>
  <?php if ($pagina > 1): ?>  <!--Si l'usuari no esta en la primera pàgina li deixara donar Anterior i si esta en la primera pàgina es deshabilitarà el botó Anterior-->
   <li class="active"> <a href='<?php echo "?pagina=".($pagina-1); ?>' >Anterior</a> </li>  <!--Botó Anterior habilitat-->
  <?php else: ?>
  <li class="disabled"> <a>Anterior</a> </li>   <!--Botó Anterior deshabilitat-->
  <?php endif; ?>

  <?php for($i = 1; $i <= $totalPagines; $i++): ?>  
    <?php if ($pagina == $i): ?>
     <li class="active"> <a ><?php echo $i; ?></a></li>
    <?php else: ?>
     <li> <a href='<?php echo "?pagina=".$i; ?>'><?php echo $i; ?></a> </li>
    <?php endif; ?>
  <?php endfor; ?>

  <?php if ($pagina < $totalPagines): ?>  <!--Si l'usuari no esta en la última pàgina li deixara donar Següent i si esta en la última pàgina es deshabilitarà el botó Següent-->
   <li class="active"> <a href='<?php echo "?pagina=".($pagina+1); ?>'>Següent</a></li>  <!--Botó Següent habilitat-->
  <?php else: ?>
   <li class="disabled"> <a>Següent</a> </li> <!--Botó Següent deshabilitat-->
  <?php endif; ?>
	</ul>
</div>

</div>
</body>
</html>

