<!doctype html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>posts</title>
</head>
<body>
    <div class='main' style="float:left;width:500px;">
    @yield('content')
    </div>

    <div class='sidebar' style="float:right;">
        <ul>
            <li><a href="<?= URL::action('PostController@index') ?>">index</a></li>
            <li><a href="<?= URL::action('PostController@create') ?>">new</a></li>
        </ul>
    </div>
</body>
</html>
