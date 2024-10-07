<?php
require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
?>
<main>
    <?php
    foreach ($teams as $key => $value) {
    ?>
        <h1><?= $key; ?></h1>
        <img src="<?= $value['logo']; ?>" alt="logo">
        <p><?= $value['city']; ?></p>
        <p><?= $value['league']; ?></p>
        <p><?= $value['uefa-coefficient-ranking']; ?></p>
        <p><?= $value['group']; ?></p>
        <a href="<?= $value['url']; ?>">To website</a>


    <?php
    }
    ?>
</main>
<?php
require __DIR__ . '/footer.php';



/* 'Barcelona' => [
    'league' => 'Primera División (Spain)',
    'uefa-coefficient-ranking' => 1,
    'city' => 'Barcelona',
    'url' => 'https://www.fcbarcelona.com/',
    'logo' => 'https://upload.wikimedia.org/wikipedia/en/4/47/FC_Barcelona_%28crest%29.svg',
    'group' => 'D' */