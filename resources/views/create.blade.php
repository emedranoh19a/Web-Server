<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
  </head>
  <body>
    <h1>New post</h1>
    <form action= "/posts" method="POST">
      
      {{ csrf_field() }}
      
      <div class="title">
        <h2>タイトル</h2>
        <input type="text" name="post[title]" placeholder="入力してください" value="{{old('post.title')}}"/>
        <p class="title_error" style="color:red"> {{$errors -> first('post.title')}}</p>
      </div>
      
      <div class="body">
        <h2>内容</h2>
        <textarea name="post[body]" placeholder="内容を入力してください" value ={{old('post.body')}}></textarea>
        <p class="title_error" style="color:red"> {{$errors -> first('post.body')}}</p>
      </div>
      <input type="submit" value="store"/>
      
    </form>
    <div class='back'>[<a href='/'>back</a>]</div>
  </body>
</html>
