@extends('admin::layouts.master')

@section('content')
    <h1>Edit Article</h1>
    @isset($action)
    <div class="alert alert-success" role="alert">
        Berhasil menyimpan
    </div>
    @endisset
    <form method="POST">
    @csrf
        <div class="form-group">
          <label for="exampleFormControlInput1">Title</label>
        <input type="text" name="title" class="form-control" value="{{ $article->title }}">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Category</label>
          <select name="id_category" class="form-control">
            @foreach ($categories as $category)
                @if ($article->id_category == $category->id)
                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                @else
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endif
            @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="mycontent">Content</label>
        <textarea name="content" class="form-control" id="mycontent" rows="3">{{ $article->content }}</textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">Save</button>
        </div>
      </form>
@endsection
