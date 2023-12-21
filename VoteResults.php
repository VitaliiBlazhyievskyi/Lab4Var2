<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Результати голосування</title>
</head>
<body>

    <h2>Результати голосування</h2>

    <?php
	if (isset($_POST['vote_option'])) {
    $selected_option = $_POST['vote_option'];

    $results_file = 'VoteResults.txt';
    $results = json_decode(file_get_contents($results_file), true);

    if (array_key_exists($selected_option, $results))
	{
        $results[$selected_option]++;
    } else {
        $results[$selected_option] = 1;
    }

    file_put_contents($results_file, json_encode($results));
	}
	
    $results_file = 'VoteResults.txt';
    $results = json_decode(file_get_contents($results_file), true);

    foreach ($results as $option => $count)
	{
        echo "$option: $count голосів<br>";
    }
    ?>

</body>
</html>
