<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>Blog</title>
  </head>
  <body>
    <h1>This is the blog title</h1>
    <div class="posts">
        @foreach($posts as $post)
            <div class="post">
                <h2 class="title"> {{$post ->title}}</h2>
                <p class="body">{{$post->body}}</p>
            </div>
        @endforeach
    </div>
    this is a simple text
  </body>
</html>
