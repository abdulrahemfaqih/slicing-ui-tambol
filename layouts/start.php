<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if (isset($pageTitle)) : ?>
        <title><?= $pageTitle ?></title>
    <?php else : ?>
        <title>Page Not Found</title>
    <?php endif; ?>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>