<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>  
    <?php

        $sentence = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur nisi explicabo expedita, at modi fugit recusandae! Exercitationem temporibus quasi ipsa magnam ducimus, fugit ab omnis aspernatur culpa sequi asperiores et.';
        
        // echo $sentence;
        // echo strlen($sentence);

        $badword = $_GET['badword'];
        $newSentence = str_replace($badword, '***', $sentence);

        echo $newSentence;

    ?>
</body>
</html>