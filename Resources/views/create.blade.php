@extends('$LOWER_NAME$::layouts.master')

@section('content')
    <h1>Hello World :: Create</h1>

    <p>
        This view is loaded from module: {!! config('$LOWER_NAME$.name') !!}
    </p>
@stop
