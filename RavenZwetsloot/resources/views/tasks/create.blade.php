@extends('layouts.layout')

@section('content')
    <h1>Add New Task</h1>
    <hr>
    <form action="/tasks" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Titel</label>
            <input type="text" class="form-control" id="taskTitle"  name="title">
        </div>
        <div class="form-group">
            <label for="description">Bericht</label>
            <input type="text" class="form-control" id="taskDescription" name="description">
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection