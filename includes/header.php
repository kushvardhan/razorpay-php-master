<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($page_title) ? $page_title : 'Cambridge Public Education and Welfare Trust' ?></title>
    <link rel="icon" type="image/png" href="cpeduw-Photoroom.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <?= isset($extra_head) ? $extra_head : '' ?>
</head>
<body class="bg-gray-50 text-gray-900 pt-16 sm:pt-20 lg:pt-24">
    <?php include 'nav.php'; ?>