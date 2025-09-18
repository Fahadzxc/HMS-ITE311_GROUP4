<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Admin') ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/appointments.css') ?>">
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="<?= base_url('assets/css/nurse-dashboard.css') ?>">
>>>>>>> f3d3eeec5c02ffbabcac50fc1e3b51daa55227fd
    <?php if (!empty($extraCss) && is_array($extraCss)): ?>
        <?php foreach ($extraCss as $cssPath): ?>
            <link rel="stylesheet" href="<?= base_url($cssPath) ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>

