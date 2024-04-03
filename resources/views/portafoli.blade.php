{{$nom = "Paras"}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Hola em dic {{$nom}}
    </h1>

    @foreach($portafoli as $projecte)
    <li>{{ $projecte['title'] }}</li>
    @endforeach

    <ul>
@if($portafoli)
  @foreach($portafoli as $portafoliItem)    
    <li>{{ $portafoliItem['title'] }}</li>   
  @endforeach
@else
  <li>Cap projecte a mostrar!!!</li>
@endif
</ul>


@section('content')
<ul>
<?php foreach ($portafoli as $portafoliItem): ?>
  <li>{{ $portafoliItem['title'] }}</li>   
<?php endforeach ?>
</ul>


</body>
</html>