@extends('layouts.master')

@section('content')

    <p>{!! link_to_route('customers.create', 'Add new', [], ['class' => 'btn btn-success']) !!}</p>

    @if($customers->count() > 0)
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">Customer List</div>
            </div>
            <div class="portlet-body">
                <table id="datatable" class="table table-striped table-hover table-responsive datatable">
                    <thead>
                    <tr>
                        <th>Customer Name}</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->name }}</td>
                            <td>
                                {!! link_to_route('customers.edit', 'Edit', [$customer->id], ['class' => 'btn btn-xs btn-info']) !!}
                                {!! Form::open(['style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => 'return confirm(\'' . 'Are you sure?' . '\');',  'route' => array('customers.destroy', $customer->id)]) !!}
                                {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger')) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    @else
        No entries found
    @endif

@endsection