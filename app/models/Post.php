<?php

// use Illuminate\Auth\Reminders\RemindableTrait;
// use Illuminate\Auth\Reminders\RemindableInterface;

class Post extends Eloquent 
//implements RemindableInterface
{
    // use RemindableTrait;

    protected $table = 'posts';

    public  static function test()
    {
        return 'hello world raymond2';
    }

    public function lists()
    {
        $query = Post::orderBy('created_at', 'desc');

        return $this->paginate(5);
    }

    public function view($id)
    {
        return Post::find($id);
    }

    public function doDelete($id)
    {
        Post::destroy($id);
    }
}