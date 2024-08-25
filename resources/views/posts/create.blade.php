// resources/views/posts/create.blade.php
@extends('layouts.app')

@section('content')
    <h1 class="mb-4">ایجاد پست جدید</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">عنوان:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="body">محتوا:</label>
            <textarea name="body" id="body" class="form-control" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="category_id">دسته‌بندی:</label>
            <select name="category_id" id="category_id" class="form-control" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">ذخیره</button>
    </form>
@endsection
