<?php

$original_paragraph = $_GET['paragraph'];
$bad_word = $_GET['curse'];

$paragraph_length = strlen($original_paragraph);

$censored_paragraph = str_replace($bad_word, '***', $original_paragraph, $count);

$cens_length = strlen($censored_paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RISPOSTA</title>
</head>
<body>

    <main>
        <div>
            <h1>Paragrafo:</h1>
            <p><?php echo $original_paragraph; ?></p>
        </div>
        <div>
            <h1>Lunghezza paragrafo</h1>
            <p><?php echo $paragraph_length; ?></p>
        </div>
        <div>
            <h1>Paragrafo censurato:</h1>
            <p><?php echo $censored_paragraph; ?></p>
        </div>
        <div>
            <h1>Lunghezza paragrafo censurato:</h1>
            <p><?php echo $cens_length; ?></p>
        </div>
        <div>
            <h1>Numero di sostituzioni:</h1>
            <p><?php echo $count; ?></p>
        </div>
    </main>
    
</body>
</html>