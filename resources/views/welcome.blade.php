<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>صفحه اصلی</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        body {
            font-family: Tahoma, Geneva, sans-serif;
            direction: rtl;
            text-align: right;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        h1 {
            color: #2c3e50;
        }
        p {
            font-size: 18px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #fff;
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            transition: background-color 0.3s ease;
        }
        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
@extends('layouts.app')

@section('title', 'درباره ما')
    <div class="container">
        <h1>خوش آمدید!</h1>
        <p>این صفحه اصلی وب‌سایت شماست. می‌توانید تغییرات مورد نظر خود را در اینجا اعمال کنید.</p>
        <a href="#" class="button">بیشتر بدانید</a>
    </div>
</body>
</html>
