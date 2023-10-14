<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if (!empty($formvalues)) : ?>
        <?php foreach ($formvalues as $key => $value) : ?>
            <?php echo $key . ': ' . $value . '<br>'; ?>
        <?php endforeach; ?>
    <?php endif; ?>
    <a href="">ok</a>
</body>
</html>