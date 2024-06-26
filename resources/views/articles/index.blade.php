<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <div class="site-title">ミニブログ</div>
    </header>
    <main class="container">
        @foreach ($articles as $article)
        <article class="article-item">
            <div class="article-title">{{ $article->title }}</div>
            <div class="article-body">{{ $article->body }}</div>
        </article>
        @endforeach
    </main>
    <footer>
        &copy; Laravel11.0.5 入門〜開発実装まで
    </footer>
</body>
</html>

