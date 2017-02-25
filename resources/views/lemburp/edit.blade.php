@extends('layouts.app')
@section('lemburp')
    active
@endsection
@section('content')

    <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit Lembur</div>
                <div class="panel-body">

                    {!! Form::model($lembur,['method'=>'PATCH','route'=>['lemburp.update',$lembur->id]])!!}
                        {!! Form::hidden('id',null,['class'=>'form-control']) !!}
                       

                        <div class="form-group{{ $errors->has('Jumlah_jam') ? ' has-error' : '' }}">
                            <label for="Jumlah_jam" class="col-md-4 control-label">Jumlah Jam</label>
                            <div class="col-md-6">
                                {!! Form::text('Jumlah_jam',null,['class'=>'form-control']) !!}
                                @if ($errors->has('Jumlah_jam'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Jumlah_jam') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group">
                        {!! Form::submit('Save',['class'=>'btn btn-primary form-control']) !!}
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection