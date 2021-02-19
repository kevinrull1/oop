<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    
    <li>
        <strong>Nimi: </strong> <span><?= $task['title']; ?></span>
    </li>

    <li>
        <strong>Tehtud</strong> <span><?= $task['completed']; ?></span>
    </li>
    
    </ul>
</body>
</html>
