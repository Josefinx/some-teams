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
                <img src="<?= $value['logo']; ?>" alt="logo">
                <p><?= $value['city']; ?></p>
                <p><?= $value['league']; ?></p>
                <p><?= $value['uefa-coefficient-ranking']; ?></p>
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
