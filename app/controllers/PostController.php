<?php

class PostController extends BaseController
{

    protected $layout = 'layout';

    public function index()
    {
        // $posts = Post::orderBy('created_at', 'desc')->paginate(5);
        
        // return View::make('post/index', array('posts'=>$posts));
        $posts = (new Post())->lists();

        return View::make('posts/index', array('posts'=>$posts));
    }

    public function view($id)
    {
        // $post = Post::find($id);
        //findOrFail($id);
        $post = (new Post())->view($id);

        if ($post) {
            return View::make('posts/view', array('post'=>$post));
        } else {
            return 'Can\'t not find the post!';
        }
    }

    public function create()
    {
        return View::make('posts/create');
    }

    public function doCreate()
    {
        // die(Input::get('content'));
        // $post = Post::create(
        //     array(
                // 'title'=>Input::get('title'),
                // 'title_second'=>Input::get('title_second'),
                // 'content'=>Input::get('content'),
                // 'created_at'=>time(),
                // 'updated_at'=>time(),
        //     )
        // );

        $post = new Post();
        $post->title = Input::get('title');
        $post->title_second = Input::get('title_second');
        $post->content = Input::get('content');
        $post->save();
        if ($post) {
            return Redirect::to("posts/{$post->id}");//->with('message', 'test');
        }

        // return Redirect::to("posts/{}");
    }

    public function update($id)
    {
        $post = (new Post())->view($id);
        return View::make('posts/update', ['post' => $post]);
    }

    public function doUpdate($id)
    {
        $post = (new Post())->view($id);

        if($post) {
            $post->title = Input::get('title');
            $post->title_second = Input::get('title_second');
            $post->content = Input::get('content');
            if($post->save()) {
                return Redirect::to("posts/{$post->id}");
            }
        }
        return Redirect::to("posts/{$post->id}/update")->with('message', 'error');
    }

    public function doDelete($id)
    {
        (new Post())->doDelete($id);
        return Redirect::to('posts');
    }
}