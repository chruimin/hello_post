@extends('layout')

@section('content')
<?php foreach($posts as $post) { ?>
        <div class='post111'>
            <h3 class='post_title'><a href="<?= URL::action('PostController@view', ['id'=>$post->id]) ?>"><?= $post->title ?></a></h3>
            <p class='post_content'><?= $post->content ?></p>
        </div>
<?php } ?>
@stop