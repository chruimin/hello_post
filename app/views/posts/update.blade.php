@extends('layout')

@section('content')
        <form action="<?=  URL::action('PostController@doUpdate', ['id'=>$post->id]) ?>" method='post'>
            <table>
                <thead>
                    <th>&nbsp;&nbsp;&nbsp;</th>
                    <th>value</th>
                </thead>
            
                <tbody>
                    <tr>
                        <td>title</td>
                        <td><input name='title' value='<?= $post->title ?>' /></td>
                    </tr>
                    <tr>
                        <td>title_second</td>
                        <td><input name='title_second' value='<?= $post->title_second ?>' /></td>
                    </tr>
                    <tr>
                        <td>content</td>
                        <td><textarea name='content' rows="3" cols="20"><?= $post->content ?></textarea></td>
                    </tr>
                    <tr>
                        <td>&nbsp;&nbsp;&nbsp;</td>
                        <td>
                            <input type='submit' value='submit' />
                            <input type='button' value='cancel' />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
@stop