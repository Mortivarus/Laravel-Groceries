<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Groceries</title>
    <link rel="stylesheet" href="{{ url('/css/app.css') }}">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
</head>
<body>
    
    <nav>
        <ul>
            <li>
                <a href=<?= route('groceries.index') ?>>View Groceries</a>
            </li>
            <li>
                <a href= <?= route('groceries.create') ?>>Add Groceries</a>
            </li>
        </ul>
    </nav>

    @yield('content')



</body>
</html>