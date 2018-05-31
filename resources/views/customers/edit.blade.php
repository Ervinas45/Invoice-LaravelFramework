@extends('layouts.master')

@section('content')

    <div class="row">
        <div class="col-sm-10 col-sm-offset-2">
            <h1>Customer Edit Page</h1>

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

    {!! Form::open(['route' => ['customers.update', $customer->id], 'class' => 'form-horizontal', 'method' => 'PATCH']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Edit Customer Name', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('name', old('name', $customer->name), ['class'=>'form-control', 'placeholder'=> 'Edit customername']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('company_code', 'Edit Company Code', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('company_code', old('company_code', $customer->company_code), ['class'=>'form-control', 'placeholder'=> 'Edit Company Code']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('vat_code', 'Edit Vat Code', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('vat_code', old('vat_code', $customer->vat_code), ['class'=>'form-control', 'placeholder'=> 'Edit Vat Code']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::label('address', 'Edit Address', ['class'=>'col-sm-2 control-label']) !!}
        <div class="col-sm-10">
            {!! Form::text('address', old('address', $customer->address), ['class'=>'form-control', 'placeholder'=> 'Edit Address']) !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

    {!! Form::close() !!}

@endsection


