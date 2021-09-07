@extends('layouts.main')

@section('title','Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Crie o seu evento</h1>
  <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="image">Imagem do Evento:</label>
       <input type="file" id="image" name="image" class="from-control-file  @error('image') is-invalid @enderror" value="{{old('image')}}">
       @if ($errors->has('image'))
          <span class="text-danger">{{ $errors->first('image') }}</span>
       @endif    
    </div>
    <div class="form-group">
      <label for="title">Evento:</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Nome do evento" value="{{old('title')}}">
      @if ($errors->has('title'))
          <span class="text-danger">{{ $errors->first('title') }}</span>
      @endif 
    </div>
     <div class="form-group">
      <label for="date">Data do evento:</label>
      <input type="date" class="form-control @error('date') is-invalid @enderror" id="date" name="date" value="{{old('date')}}">
      @if ($errors->has('date'))
          <span class="text-danger">{{ $errors->first('date') }}</span>
      @endif 
    </div>
    <div class="form-group">
      <label for="title">Cidade:</label>
      <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="Local do evento" value="{{old('city')}}">
      @if ($errors->has('city'))
          <span class="text-danger">{{ $errors->first('city') }}</span>
      @endif 
    </div>
    <div class="form-group">
      <label for="title">O evento é privado?</label>
      <select name="private" id="private" class="form-control" >
        <option value="0">Não</option>
        <option value="1">Sim</option>
      </select>
    </div>
    <div class="form-group">
      <label for="title">Descrição:</label>
      <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="O que vai acontecer no evento?">{{old('description')}}</textarea>
      @if ($errors->has('description'))
          <span class="text-danger">{{ $errors->first('description') }}</span>
      @endif 
    </div>
    <div class="form-group">
      <label for="title">Adicione itens de infraestrutura:</label>
      <div class="form-group">  
        <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
      </div>
      <div class="form-group">  
        <input type="checkbox" name="items[]" value="Palco"> Palco
      </div>
      <div class="form-group">  
        <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
      </div>
      <div class="form-group">  
        <input type="checkbox" name="items[]" value="Open Food"> Open food
      </div>
      <div class="form-group">  
        <input type="checkbox" name="items[]" value="Brindes"> Brindes
      </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Evento">
  </form>
</div>

@endsection
