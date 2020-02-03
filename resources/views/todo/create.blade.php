@extends ('layouts.app')
@section ('content')

<h2 class="mb-3">ToDoの作成</h2>
<!-- <form action="form-group"> -->
{!! Form::open(['route' => 'todo.store']) !!}
    <div class="form-group">
        <!-- <input type="text" class="form-control" placeholder="ToDo内容">         -->
        {!! Form::input('text', 'title', null, ['required', 'class' => 'form-control', 'placeholder' => 'ToDo内容']) !!}
    </div>
    <!-- <button class="submit" class="btn btn-success float-right">追加</button> -->
    {!! Form::submit('更新', ['class' => 'btn btn-success float-right']) !!}
{!! Form::close() !!}
<!-- </form> -->

@endsection