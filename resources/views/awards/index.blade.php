<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of awards</title>
</head>
<body>

    <a href="/">Home</a>

    <h1>List of movie awards</h1>
    <a href="/awards">Awards</a> <a href="/top-rated-movies">Top 50 Movies</a> <a href="/top-rated-games">Top 50 Games</a>
    <h1>Hello, <?= $name ?> and <?= $greeting ?></h1>

    <ul>
        <?php foreach ($awards as $award) : ?>
            <li>
                <?= $award; ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>