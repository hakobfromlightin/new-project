@extends('layouts.app')

@section('content')
    <alert type="info">
        <strong>Info!</strong> Indicates a neutral informative change or action.
    </alert>

    <alert type="warning">
        <strong>Warning!</strong> Indicates a warning that might need attention.
    </alert>

    <alert type="danger">
        <strong>Danger!</strong> Indicates a dangerous or potentially negative action.
    </alert>

    <alert type="success">
        <strong>Success!</strong> Indicates a successful or positive action.
    </alert>
@stop