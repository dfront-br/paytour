@extends('layouts.app')
@section('content')
<div class="uk-flex uk-flex-center">

    <div style="margin-top: -80px;"
        class="uk-card uk-card-default uk-card-body uk-border-rounded uk-width-1-1 uk-width-2-3@s uk-width-2-3@m uk-width-2-3@l uk-margin-large-bottom">
        <form action="{{ route('job.send')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="uk-margin">
                <label for="" class="uk-form-label">Nome</label>
                <input type="text" class="uk-input uk-border-rounded" name="name" placeholder="seu nome">
            </div>
            <div class="uk-margin">
                <label for="" class="uk-form-label">Email</label>
                <input type="email" class="uk-input uk-border-rounded" name="email" placeholder="seu email">
            </div>
            <div class="uk-margin">
                <label for="" class="uk-form-label">Telefone</label>
                <input type="text" class="uk-input uk-border-rounded" name="phone" placeholder="seu telefone">
            </div>
            <div class="uk-margin">
                <label for="" class="uk-form-label">Cargo</label>
                <input type="text" class="uk-input uk-border-rounded" name="" placeholder="Cargo pretendido">
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-select">Escolaridade</label>
                <div class="uk-form-controls">
                    <select class="uk-select uk-border-rounded">
                        <option value="">Option 01</option>
                    </select>
                </div>
            </div>
            <div class="uk-margin">
                <div uk-form-custom>
                    <input type="file">
                    <button class="uk-button uk-button-default" type="button" tabindex="-1">Arquivo</button>
                </div>
            </div>
            <div class="uk-margin">
                <label for="" class="uk-form-label">Observações</label>
                <textarea rows="5" class="uk-textarea uk-border-rounded" name="note"
                    placeholder="Fique a vontade para deixar uma observação"></textarea>
            </div>
            <div>
                <button class="uk-button uk-button-large uk-button-primary uk-border-rounded uk-width-1-1"
                    type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection
