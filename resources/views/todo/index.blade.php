@extends ('layouts.app')
@section ('content')

<h1 class="page-header">{{ $user->name }}のToDo一覧</h1>
<p class="text-right">
    <a href="/todo/create" class="btn btn-success">新規作成</a>
</p>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>やること</th>
            <th>作成日時</th>
            <th>更新日時</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($todos as $todo)
        <tr>
            <td class="align-middle">{{ $todo->id }}</td>
            <td class="align-middle">{{ $todo->title }}</td>
            <td class="align-middle">{{ $todo->created_at }}</td>
            <td class="align-middle">{{ $todo->updated_at }}</td>
            <td><a href="{{ route('todo.edit', $todo->id) }}" class="btn btn-primary">編集</a></td>
            <td>
                {!! Form::open(['route' => ['todo.destroy', $todo->id], 'method' => 'DELETE']) !!}
                    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection