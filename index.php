<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Голосування</title>
</head>
<body>

    <h2>Голосування</h2>

    <p>Ваша улюблена мова програмування:</p>

    <form action="VoteResults.php" method="post">
        <label>
            <input type="radio" name="vote_option" value="C++"> С++
        </label>
        <br>
        <label>
            <input type="radio" name="vote_option" value="PHP"> PHP
        </label>
        <br>
        <label>
            <input type="radio" name="vote_option" value="Java"> Java
        </label>
        <br>
        <input type="submit" value="Проголосувати">
    </form>

</body>
</html>