@extends("app")


@section("content")
    <div class="container">
        <h2>Editar cliente</h2>

        {!! Form::open(['url' => "clientes/$cliente->id/update"]) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', $cliente->nome, ['class' => 'form-control']) !!}
            @if($errors->has("nome"))
                <div class="error">{{$errors->first('nome')}}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('email', 'E-mail') !!}
            {!! Form::email('email', $cliente->email, ['class' => 'form-control']) !!}
            @if($errors->has("email"))
                <div class="error">{{$errors->first('email')}}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('telefone', 'Telefone') !!}
            {!! Form::text('telefone', $cliente->telefone, ['class' => 'form-control']) !!}
            @if($errors->has("telefone"))
                <div class="error">{{$errors->first('telefone')}}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar cliente', ['class' => 'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection