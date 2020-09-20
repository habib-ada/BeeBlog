@extends('admin::layouts.master')

@section('content')
    <h1>Detail Article</h1>
<a class="btn btn-primary" href="{{ route('addOneArticle') }}">New Article</a>
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
          <tr>
            <th scope="row">{{ $article['id'] }}</th>
            <td>{{ $article['title'] }}</td>
            <td>{{ $article['content'] }}</td>
            <td><a href="#">Edit</a>&nbsp<a href="#">Delete</a></td>
          </tr>
        </tbody>
      </table>
@endsection
