// resources/views/categories/create.blade.php
@extends('layouts.app')

@section('content')
    <h1 class="mb-4">ایجاد دسته‌بندی جدید</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">نام دسته‌بندی:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">ذخیره</button>
    </form>
@endsection
