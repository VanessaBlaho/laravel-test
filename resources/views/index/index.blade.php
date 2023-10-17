<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie website</title>
</head>
<body>

    <h1>Movie website</h1>

    <p>Welcome to the movie website</p>
<a href="/awards">Awards</a> <a href="/top-rated-movies">Top 50 Movies</a> <a href="/top-rated-games">Top 50 Games</a>
    
    <h2> Top 10 Movies</h2>

    <ul>
        <?php foreach ($movies as $movie) : ?>
            <li>
                <?= $movie->name ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>