@extends('admin::layouts.master')

@section('content')
    <h1>Articles</h1>
    @isset($action)
    <div class="alert alert-success" role="alert">
      Berhasil menghapus {{ $id }}
    </div>
    @endisset
<a class="btn btn-primary" href="{{ route('addOneArticle')}}">New Article</a>
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($articles as $article)
          <tr>
            <th scope="row">{{ $article->id }}</th>
            <td>{{ $article->title }}</td>
            <td>{{ $article->content }}</td>
          <td><a href="{{ route('oneArticle', ['id'=>$article->id]) }}">Detail</a>&nbsp<a href="#">Edit</a>&nbsp<a href="{{ route('deleteOneArticle', ['id'=>$article->id]) }}">Delete</a></td>
          </tr>
          @endforeach
        </tbody>
      </table>
@endsection
