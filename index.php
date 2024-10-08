<?php
require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
?>
<main>
    <div class="grid-container">
        <?php
        foreach ($teams as $key => $value) {
        ?>
            <div class="grid-item">
                <h1><?= $key; ?></h1>
                <img class="logo" src="<?= $value['logo']; ?>" alt="logo">
                <h2>Stad</h2>
                <p><?= $value['city']; ?></p>
                <h2>Liga</h2>
                <p><?= $value['league']; ?></p>
                <h2>UEFA coefficient ranking</h2>
                <p><?= $value['uefa-coefficient-ranking']; ?></p>
                <h2>Grupp</h2>
                <p><?= $value['group']; ?></p>
                <a href="<?= $value['url']; ?>">Mer information om <?= $key ?> </a>
            </div>
        <?php
        }
        ?>
    </div>
</main>
<?php
require __DIR__ . '/footer.php';
