<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>top 50 games</title>
</head>
<body>
    
    <a href="/">Home</a> <a href="/awards">Awards</a> <a href="/top-rated-movies">Top 50 Movies</a> 
    <h1>Top 50 Games</h1>
<ul>
    <?php foreach ($games as $game):?>
        <li>
            <?= $game->name ?>
        </li>
        <?php endforeach?>
        </ul>
</body>
</html>