@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
            <h1>Add a Customer</h1>

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

    {!! Form::open(['route' => 'customers.store', 'class' => 'form-horizontal']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Customer name', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=> 'Customer Name']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('company_code', 'Company Code', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('company_code', old('company_code'), ['class'=>'form-control', 'placeholder'=> 'Company Code']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('vat_code', 'Vat Code', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('vat_code', old('vat_code'), ['class'=>'form-control', 'placeholder'=> 'Vat Code']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Address', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('address', old('address'), ['class'=>'form-control', 'placeholder'=> 'Address']) !!}
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

    {!! Form::close() !!}

@endsection


