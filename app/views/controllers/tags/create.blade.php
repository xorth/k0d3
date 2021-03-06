@extends('layouts.master')

@section('content')

<div class="col-sm-12">
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'tags')) }}

    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text(
                                    'name',
                                    Input::old('name'),
                                    array(
                                        'class'       => 'form-control',
                                        'placeholder' => 'Name'
                                    )
                                )}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            {{ Form::submit('Save', array('class' => 'btn btn-default pull-right')) }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ Form::close() }}

    @include('includes.tags.list')
</div>

@stop