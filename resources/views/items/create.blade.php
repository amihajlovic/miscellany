@extends('layouts.app', [
    'title' => trans('items.create.title'),
    'description' => trans('items.create.description'),
    'breadcrumbs' => [
        ['url' => route('items.index'), 'label' => trans('items.index.title')],
        trans('crud.create'),
    ]
])

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new Location</div>

                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br>
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif


                    {!! Form::open(array('route' => 'items.store', 'enctype' => 'multipart/form-data', 'method'=>'POST')) !!}
                        @include('items._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection