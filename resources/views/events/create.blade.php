@extends('layouts.main')

@section('title', 'Criar evento')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" class="form-control-file" name="image">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" id="title" class="form-control" name="title" placeholder="Nome do evento">
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" id="city" class="form-control" name="city" placeholder="Local do evento">
            </div>
            <div class="form-group">
                <label for="private">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
            </div>
            
            <input type="submit" value="Criar Evento" class="btn btn-primary">
        </form>
    </div>
@endsection
