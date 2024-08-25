// resources/views/posts/index.blade.php
@extends('layouts.app')

@section('content')
    <h1 class="mb-4">پست‌ها</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">ایجاد پست جدید</a>
    <div class="list-group">
        @foreach ($posts as $post)
            <a href="#" class="list-group-item list-group-item-action">
                <h5 class="mb-1">{{ $post->title }}</h5>
                <p class="mb-1">{{ \Str::limit($post->body, 100) }}</p>
                <small>دسته‌بندی: {{ $post->category->name }}</small>
                <div class="mt-2">
                    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">ویرایش</a>
                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                    </form>
                </div>
            </a>
        @endforeach
    </div>
@endsection
