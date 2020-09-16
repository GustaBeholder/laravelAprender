@extends('layout.tamplate')

@section('titulo','Adcionar Cursos')

@section('conteudo')
<div class="conteiner">
    <h3 class="center"> Editando cursos</h3>
    <div class="row">
    <form class="" action="{{route('admin.cursos.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" nome="_method" value="put">
        @include('admin.cursos._form')
        <button class="btn deep-orange">Atualizar</button>
        </form>
    </div>
</div>

    
@endsection