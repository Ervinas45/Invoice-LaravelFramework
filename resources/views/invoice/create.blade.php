@extends('layouts.master')

@section('content')

@if ($errors->any())
  <div class="alert alert-danger">
     <ul>
        {!! implode('', $errors->all('
        <li class="error">:message</li>
        ')) !!}
      </ul>
  </div>
@endif

{!! Form::open(['route' => 'invoice.store', 'class' => 'form-horizontal']) !!}

  {!! Form::submit('Print', ['class' => 'pull-right btn btn-primary']) !!}`

  <div class="container">
    <div class="row">
      <div class='col-md-4 col-md-offset-4'>
        <div class="form-group">
          {{ Form::select('type_id', $type_list, old('type_id'), ['class'=>'form-control']) }}
        </div>  
          {!! Form::text('invoiced_at', date('Y-m-d'), ['class'=>'datepicker', 'form-control']) !!}
      </div>
    </div>
  </div>

  <div class="col-md-6"><p><b>Seller</b></p>
    <p>Seller Name</p>
    <p>Seller Code</p>
    <p>Seller VAT</p>
    <p>Seller Address</p>
    <p>Seller Bank Info</p>
  </div>
  
  <div class="col-md-6"><p><b>Buyer</b></p>
    <div class="form-group">        
      {!! Form::text('buyer_name', old('buyer_name'), ['class'=>'form-control', 'placeholder'=> 'Buyer Name']) !!}
    </div>     
    <div class="form-group"> 
      {!! Form::text('buyer_code', old('buyer_code'), ['class'=>'form-control', 'placeholder'=> 'Buyer Code']) !!}
    </div>
    <div class="form-group">
      {!! Form::text('buyer_Vat', old('buyer_Vat'), ['class'=>'form-control', 'placeholder'=> 'Buyer VAT']) !!}
    </div>
    <div class="form-group">
      {!! Form::text('buyer_address', old('buyer_address'), ['class'=>'form-control', 'placeholder'=> 'Buyer Address']) !!}
    </div>
  </div>

  <div class="row">
    <div class="form-group add_row">
      <div class="col-md-6">
        {!! Form::text('product_name', old('product_name'), ['class'=>'form-control', 'placeholder'=> 'Product Name']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('unit', old('unit'), ['class'=>'form-control', 'placeholder'=> 'Unit']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('price', old('price'), ['class'=>'form-control changeable price', 'placeholder'=> 'Price']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('quantity', old('quantity'), ['class'=>'form-control changeable quantity', 'placeholder'=> 'Quantity']) !!}
      </div>
        <div class="col-md-1">
        {!! Form::text('discount', old('discount'), ['class'=>'form-control', 'placeholder'=> 'Discount']) !!}
      </div>
        <div class="col-md-1">
        {!! Form::text('vat', old('vat'), ['class'=>'form-control', 'placeholder'=> 'VAT']) !!}
      </div>
        <div class="col-md-1 \\">Total</div>
    </div>

    <div class="form-group after_add">
      <div class="col-md-6">
        {!! Form::text('product_name', old('product_name'), ['class'=>'form-control', 'placeholder'=> 'Product Name']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('unit', old('unit'), ['class'=>'form-control', 'placeholder'=> 'Unit']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('price', old('price'), ['class'=>'form-control', 'placeholder'=> 'Price']) !!}
      </div>
      <div class="col-md-1">
        {!! Form::text('quantity', old('quantity'), ['class'=>'form-control', 'placeholder'=> 'Quantity']) !!}
      </div>
        <div class="col-md-1">
        {!! Form::text('discount', old('discount'), ['class'=>'form-control', 'placeholder'=> 'Discount']) !!}
      </div>
        <div class="col-md-1">
        {!! Form::text('vat', old('vat'), ['class'=>'form-control', 'placeholder'=> 'VAT']) !!}
      </div>
        <div class="col-md-1">Total</div>
    </div>

  </div>

  <br>

  <div class="row"> 
    <div class="col-md-2">
      {!! Form::button('Add Product', ['class' => 'pull-left btn btn-primary']) !!}
    </div>
    <div class="pull-right">
      Sub Total<br>
      Vat Total<br>
      Discount Total<br>
      Grand Total<br>
    </div>
  </div>

{!! Form::close() !!}

@endsection

@section('javascript')

    <script>

        $(".changeable").change(function()
        {
            var price = parseFloat($(".price").val().replace(',','.').replace('',''))

            var quantity = parseFloat($(".quantity").val().replace(',','.').replace('',''))

            var answer = price * quantity;  
            $(".TotalCalculator").text(answer);
            // $( ".price" ).empty();
            // $( ".quantity" ).empty();
            // $( ".TotalCalculator" ).empty();

        });

          $(".btn").on("click" , function()
          {
            
            var form = $(".add_row").html();

            // var form = $(form).not('.cloned').clone().addClass('cloned').find(".price").val("").end();
            $('.after_add').append(form);
          });


    </script>


@endsection

