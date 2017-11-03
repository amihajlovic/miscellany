@extends('layouts.app', ['title' => trans('characters.relations.edit.title'), 'description' => trans('characters.relations.edit.description')])

@section('content')
    <div class="row">
        <div class="col-md-12 col-md-offset">
            <div class="panel panel-default">
                <div class="panel-heading">Edit relation between {{ $relation->first->name }} and {{ $relation->second->name }}</div>

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

                    {!! Form::model($relation, ['method' => 'PATCH', 'route' => ['character_relation.update', $relation->id]]) !!}
                        @include('characters.relations._form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection