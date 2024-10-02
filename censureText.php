<?php

// recupero la parola da censurare

$censuredWord = $_GET["censuredWord"];

// recupero il testo da censurare

$text = $_GET["textArea"];




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <h1 class="text-center mb-5 mt-3">Il testo inserito è il seguente:</h1>
   
    <div class="container">
        <?php echo $text?>
        <h3 class="text-center mb-3">E' lungo <span class="text-warning fw-bold"><?php echo strlen($text)?></span> caratteri</h3>
    </div>

    <h1 class="text-center my-5">Il testo censurato dalla parola (<?php echo($censuredWord)?>) è il seguente:</h1>
    
    <div class="container">
        <?php 
        $textCensured = str_ireplace("$censuredWord", "***", "$text");
        echo($textCensured)?>
        <h3 class="text-center my-3">E' lungo <span class="text-warning fw-bold"> <?php echo strlen($textCensured)?> </span> caratteri</h3>
    </div>
</body>
</html>