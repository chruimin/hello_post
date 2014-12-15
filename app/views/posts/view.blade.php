@extends('layout')

@section('content')
        <div class='post'>
            <h3 class='post_title'><?= $post->title ?></h3>
             <a href="<?= URL::action('PostController@update', ['id'=>$post->id]) ?>">edit</a> | <a href="<?= URL::action('PostController@doDelete', ['id'=>$post->id]) ?>">delete</a> | <a href="<?= URL::previous() ?>">back</a> | <a href="<?= URL::action('posts.index') ?>">home</a>
            <p class='post_content'><?= $post->content ?></p>
        </div>
@stop
