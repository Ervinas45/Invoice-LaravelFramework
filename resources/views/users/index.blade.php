@extends('layouts.master')

@section('content')

    <p>{!! link_to_route('users.create', 'Add new', [], ['class' => 'btn btn-success']) !!}</p>

    @if($users->count() > 0)
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">User list</div>
            </div>
            <div class="portlet-body">
                <table id="datatable" class="table table-striped table-hover table-responsive datatable">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>
                                {!! link_to_route('users.edit', 'Edit', [$user->id], ['class' => 'btn btn-xs btn-info']) !!}
                                {!! Form::open(['style' => 'display: inline-block;', 'method' => 'DELETE', 'onsubmit' => 'return confirm(\'' . 'Are you sure?' . '\');',  'route' => array('users.destroy', $user->id)]) !!}
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