<x-app-layout>
    <x-slot name="header">
        　（ヘッダー名）
    </x-slot>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Posts</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        </head>
        <body>
            <h1 class="title">
                {{ $post->title }}
            </h1>
            <div class="content">
                <div class="content_post">
                    <h3>本文</h3>
                    <p class="body">{{ $post->body }}</p>
                </div>
            </div>
            <div class="footer">
                <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
                <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                <a href="/">戻る</a>
            </div>
        </body>
    </html>
</x-app-layout>