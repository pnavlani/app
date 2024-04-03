
{{-- aquí dins afegim el contingut únic de la vista contactes --}}
<h1>Contacte</h1>

@if ($errors ->any())
<ul>
    @foreach($errors ->all() as $error)
    <p>{{ $error}}</p>
    @endforeach
</ul>
@endif

<form method="POST" action="{{ route('contact') }}" >
@csrf
<input name="name" placeholder="Nom..." ><br> 
    {!!$errors ->first('name','<small>:message</small><br>')!!}
    <input type="email" name="email" placeholder="email..." ><br>
    {!!$errors ->first('email','<small>:message</small><br>')!!}
    <input name="subject" placeholder="assumpte..." ><br>
    {!!$errors ->first('subject','<small>:message</small><br>')!!}
    <textarea name="content" placeholder="Missatge..."></textarea><br>
    {!!$errors ->first('content','<small>:message</small><br>')!!}
    <button>Enviar</button><br>
</form>
 
@section('title', 'Contacte') 