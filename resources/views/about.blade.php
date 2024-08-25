<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>درباره ما</title>
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
        a {
            color: #3498db;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>درباره ما</h1>
        <p>ما یک شرکت فناوری اطلاعات با هدف ارتقاء کیفیت خدمات و ارائه راه‌حل‌های نوآورانه در زمینه‌های مختلف فناوری اطلاعات هستیم. تیم ما متشکل از متخصصان با تجربه و خلاق است که در تلاشند تا بهترین تجربه ممکن را برای مشتریان خود فراهم کنند.</p>
        <p>برای اطلاعات بیشتر با ما تماس بگیرید یا از دیگر صفحات ما دیدن کنید.</p>
        <a href="{{ url('/') }}">بازگشت به صفحه اصلی</a>
    </div>
</body>
</html>


