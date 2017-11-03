@extends('layouts.app', [
    'title' => trans('families.show.title', ['family' => $family->name]),
    'description' => trans('families.show.description'),
    'breadcrumbs' => [
        ['url' => route('families.index'), 'label' => trans('families.index.title')],
        ['url' => route('families.show', $family->id), 'label' => $family->name],
        trans('crud.update'),
    ]
])
@section('content')
    <div class="row">
        <div class="col-md-12 col-md-offset">
            <div class="panel panel-default">
                <div class="panel-heading">Edit {{ $family->name }}</div>

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

                    {!! Form::model($family, ['method' => 'PATCH', 'enctype' => 'multipart/form-data', 'route' => ['families.update', $family->id]]) !!}
                        @include('families._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection