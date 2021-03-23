@extends('layouts.app')
@section('content')
<div class="uk-flex uk-flex-center">

    <div style="margin-top: -80px;"
        class="uk-card uk-card-default uk-card-body uk-border-rounded uk-width-1-1 uk-width-2-3@s uk-width-2-3@m uk-width-2-3@l uk-margin-large-bottom">
        {{-- <div class="uk-alert-success" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
        </div> --}}
        <form action="{{ route('job.send')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="uk-margin">
                <label for="" class="uk-form-label">Nome</label>
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input type="text" class="uk-input uk-border-rounded @error('name') uk-form-danger @enderror"
                        name="name" placeholder="seu nome" value="{{ old('name') }}">
                </div>
                @error('name')
                <span class="uk-text-small uk-text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="uk-margin">
                <label for="" class="uk-form-label">Email</label>
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: mail"></span>
                    <input type="email" class="uk-input uk-border-rounded @error('email') uk-form-danger @enderror"
                        name="email" placeholder="seu email" value="{{ old('email') }}">
                </div>
                @error('email')
                <span class="uk-text-small uk-text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="uk-margin">
                <label for="" class="uk-form-label">Telefone</label>
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon uk-position-top" uk-icon="icon: receiver"></span>
                    <input type="text" class="uk-input uk-border-rounded @error('phone') uk-form-danger @enderror"
                        name="phone" placeholder="seu telefone" value="{{ old('phone') }}">
                </div>
                @error('phone')
                <span class="uk-text-small uk-text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="uk-margin">
                <label for="" class="uk-form-label">Cargo</label>
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: happy"></span>
                    <input type="text" class="uk-input uk-border-rounded @error('occupation') uk-form-danger @enderror"
                        name="occupation" placeholder="Cargo pretendido" value="{{ old('occupation') }}">
                </div>
                @error('occupation')
                <span class="uk-text-small uk-text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="form-stacked-select">Escolaridade</label>
                <div class="uk-form-controls">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon" uk-icon="icon: list"></span>
                        <select style="padding-left: 40px;"
                            class="uk-select uk-border-rounded @error('educate_id') uk-form-danger @enderror"
                            name="educate_id">
                            <option disabled selected value="0">--selecione--</option>
                            @foreach ($education as $ed)
                            <option value="{{ $ed->id }}">{{ $ed->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @error('educate_id')
                <span class="uk-text-small uk-text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="uk-margin">
                <div class="uk-inline uk-width-1-1">
                    <span class="uk-form-icon" uk-icon="icon: file-text"></span>
                    <div uk-form-custom="target: true" class="uk-width-1-1">
                        <input type="file" name="file" value="{{ old('file') }}">
                        <input class="uk-input uk-width-1-1 uk-button uk-button-default uk-border-rounded"
                            style="@error('file') border-color: #f0506e !important @enderror" type="text"
                            placeholder="Carregar curriculo" disabled value="{{ old('file') }}">
                    </div>
                    @error('file')
                    <span class="uk-text-small uk-text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="uk-margin">
                <label for="" class="uk-form-label">Observações</label>
                <textarea rows="5" class="uk-textarea uk-border-rounded" name="note"
                    placeholder="Fique a vontade para deixar uma observação">{{ old('note') }}</textarea>
            </div>
            <div>
                <button class="uk-button uk-button-large uk-button-primary uk-border-rounded uk-width-1-1"
                    type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection
