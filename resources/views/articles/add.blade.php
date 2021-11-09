@extends('layouts.app')
@section('content')
<div class="container">
    @if($errors->any())
    <div class="alert alert-warning">
        <ol>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ol>
    </div>
    @endif
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label form="title">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="form-group">
            <label form="title">Body</label>
            <textarea name="body"
            +id="body" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label form="category_id">Category</label>
            <select class="form-control" name="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category['id'] }}">
                        {{ $category['name'] }}
                    </option>
                @endforeach
            </select>
            <input type="submit" value="Add Article" class="btn btn-primary mt-2">
        </div>
    </form>
</div>
@endsection
