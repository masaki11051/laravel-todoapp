@extends('layouts.todo')
<style>
</style>
@section('title', 'index.blade.php')


@section('contents_todolist')
  <div class="container">
    <div class="card">
      <h1 class="title mb-15">Todo List</h1>
        <div class="todo">
              <form action="/todo/create" method="POST" class="flex between mb-30">
                @csrf
                <input class="input-add"" type="text" name="content">
                <button class="button-add">追加</button>
              </form>
        <table>
          <tr>
            <th>作成日</th>
            <th>タスク名</th>
            <th>更新</th>
            <th>削除</th>
          </tr>
            @foreach ($items as $item)
          <tr>
            <td>
              {{$item->created_at}}
            </td>
            <td>
              <form action="/todo/update" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}">
                <input type="text" class="input-update" name="content" value="{{ $item->content }}">
            </td>
            <td>
                <button class="button-update">更新</button>
            </td>
              </form>
            <td>
              <form action="/todo/delete" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $item->id }}">
                <input type="hidden" name="content">
                <button class="button-delete">削除</button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>
@endsection