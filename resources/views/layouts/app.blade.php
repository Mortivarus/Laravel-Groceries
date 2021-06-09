<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-Groceries</title>
    <link rel="stylesheet" href="{{ url('/app.css') }}">
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