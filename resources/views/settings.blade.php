@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
            <h1>Fill the fields</h1>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        {!! implode('', $errors->all('
                        <li class="error">:message</li>
                        ')) !!}
                    </ul>
                </div>
            @endif
        </div>
    </div>

{!! Form::open(['route' => 'settings.store', 'class' => 'form-horizontal']) !!}    

@foreach ($settings as $setting)



    <div class="form-group">
        {!! Form::label($setting->key, $setting->key, ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text($setting->key, old($setting->key, $setting->value), ['class'=>'form-control', 'placeholder'=> $setting->key]) !!}
        </div>
    </div>

@endforeach

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

    {!! Form::close() !!}

@endsection


