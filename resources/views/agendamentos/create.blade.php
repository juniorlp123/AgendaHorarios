@extends("app")


@section("content")
    <div class="container">
        <h2>Novo agendamento</h2>

        {!! Form::open(['url' => 'agendamentos/store']) !!}

        <div class="form-group">
            {!! Form::label('cliente_id', 'Cliente:') !!}
            {!! Form::select('cliente_id',
                $clientes, 'Selecione um cliente',
                ['class' => 'form-control']) !!}
            @if($errors->has("cliente_id"))
                <div class="error">{{$errors->first('cliente_id')}}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('servico_id', 'Serviço:') !!}
            {!! Form::select('servico_id',
                $servicos, 'Selecione um serviço',
                ['class' => 'form-control']) !!}
            @if($errors->has("servico_id"))
                <div class="error">{{$errors->first('servico_id')}}</div>
            @endif
        </div>

        <div class="form-group">
            {!! Form::label('dia', 'Selecione o dia:') !!}
            {!! Form::text('dia', '', ['class' => 'form-control', 'id' => 'datepicker']) !!}
            @if($errors->has("dia"))
                <div class="error">{{$errors->first('dia')}}</div>
            @endif
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('hora_inicio', 'Horário do início:') !!}
                    {!! Form::time('hora_inicio', '', ['class' => 'form-control']) !!}
                    @if($errors->has("hora_inicio"))
                        <div class="error">{{$errors->first('hora_inicio')}}</div>
                    @endif
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    {!! Form::label('hora_fim', 'Horário do fim:') !!}
                    {!! Form::time('hora_fim', '', ['class' => 'form-control']) !!}
                    @if($errors->has("hora_fim"))
                        <div class="error">{{$errors->first('hora_fim')}}</div>
                    @endif
                </div>
            </div>
        </div>


        <div class="form-group">
            {!! Form::submit('Salvar agendamento', ['class' => 'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>

@endsection