// resources/views/categories/index.blade.php
@extends('layouts.app')

@section('content')
    <h1 class="mb-4">دسته‌بندی‌ها</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">ایجاد دسته‌بندی جدید</a>
    <ul class="list-group">
        @foreach ($categories as $category)
            <li class="list-group-item">
                {{ $category->name }}
            </li>
        @endforeach
    </ul>
@endsection
