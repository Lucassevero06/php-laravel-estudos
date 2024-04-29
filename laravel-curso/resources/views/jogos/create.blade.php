@extends('layouts.app')

@section('title', 'Create')

@section('content')

    <div class="container mt-5">
        <h1>Crie um novo Jogo</h1>
        <hr>
        @csrf
        <form action="{{ route('jogos.store') }}" method="POST">
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input class="form-control" type="text" name="nome" id="nome"
                    placeholder="Digite um nome...">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Categoria:</label>
                    <input class="form-control" type="text" name="categoria" id="categoria"
                    placeholder="Digite uma categoria...">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Ano de Criação:</label>
                    <input class="form-control" type="number" name="ano_criacao" id="ano_criacao"
                    placeholder="Digite o ano de criação...">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Valor:</label>
                    <input class="form-control" type="number" name="valor" id="valor"
                    placeholder="Digite um valor...">
                </div>
                <br>
                <div class="form-group">
                    <input class="btn btn-danger" type="submit" name="submit" id="submit" value="Enviar">
                </div>
            </div>
        </form>
    </div>

@endsection