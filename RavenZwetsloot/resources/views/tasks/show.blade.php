@extends('layouts.layout')

@section('content')
    <h1>Taak {{ $task->title }}</h1>

    <div class="jumbotron text-center">
        <p>
            <strong>Titel: </strong> {{ $task->title }}<br>
            <strong>Bericht: </strong> {{ $task->description }}
        </p>
    </div>
@endsection