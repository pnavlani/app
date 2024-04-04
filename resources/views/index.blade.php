<!-- Autor: Paras Navlani -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./Estils/estils.css">
	<title>Practica 5</title>
	<style> 
	svg{
		width:12px;
		height: 12px;
	}
	</style>
</head>

<body>
 <!--En aquest div mostrarem una barra en que es trobara l'opció de logar-se o enregistrar-se  -->   
<div class="navbar">
  
    <a href="login">Inicia la Sessió</a> 
    <a href="">Crea un compte</a> 
  
</div>


<h1>Articles</h1>

<table>
	<thead>
		<tr>
			<td>id</td>
			<td>Articles</td>
		</tr>
	</thead>
	<tbody>
		@foreach($articles as $article);
		<tr>
			<td>{{$article['id']}}</td>
			<td>{{$article['articles']}}</td>
		</tr>
		@endforeach
	</tbody>
</table>

	{{$articles->links()}}



</body>
</html>

