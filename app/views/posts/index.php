<!doctype html>
<html lang="cn">
<head>
    <meta charset="UTF-8">
    <title>posts</title>
</head>
<body>
    <div class='main'>
    <?php foreach($posts as $post) { ?>
        <div class='post'>
            <h3 class='post_title'><?= $post->title ?></h3>
            <p class='post_content'><?= $post->content ?></p>
        </div>
    <?php } ?>
</div>
</body>
</html>
