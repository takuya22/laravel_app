@extends ('layouts.app')
@section ('content')

<h2 class="mb-3">ToDo編集</h2>
<!-- <form action="form-group"> -->
{!! Form::open(['route' => ['todo.update', $todo->id], 'method' => 'PUT']) !!}
    <div class="form-group">
        <!-- <input type="text" class="form-control" placeholder="ToDo内容">         -->
        {!! Form::input('text', 'title', $todo->title, ['required', 'class' => 'form-control']) !!}
    </div>
    <!-- <button class="submit" class="btn btn-success float-right">更新</button> -->
    {!! Form::submit('更新', ['class' => 'btn btn-success float-right']) !!}
<!-- </form> -->
{!! Form::close() !!}

@endsection