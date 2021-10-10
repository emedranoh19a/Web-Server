<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
  </head>
  <body>
    <h1>Edit post</h1>
    <form action= "/posts/{{$post->id}}" method="POST">
      @csrf
      @method('PUT')
      
      <div class="content_title">
        <h2>タイトル</h2>
        <input type="text" name="post[title]" placeholder="入力してください" value="{{$post ->title}}"/>
        <p class="title_error" style="color:red"> {{$errors -> first('post.title')}}</p>
      </div>
      
      <div class="content_body">
        <h2>本文</h2>
        <textarea name="post[body]" placeholder="内容を入力してください" value ="{{$post->body}}"></textarea>
        <p class="title_error" style="color:red"> {{$errors -> first('post.body')}}</p>
      </div>
      <input type="submit" value="保存"/>
      
    </form>
    <div class='back'>[<a href='/'>back</a>]</div>
  </body>
</html>
