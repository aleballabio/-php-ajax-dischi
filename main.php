<main>
    <div class="container-fluid">
        <div class="container-cards">
            <?php
            foreach ($dischi as $card) { ?>
                <div class="card">
                    <div class="subcard">
                        <img class="poster" src="<?= $card['poster'] ?>" :alt="<?= $card['title'] ?>" />
                        <h1><?= $card['title'] ?></h1>
                        <h2><?= $card['author'] ?></h2>
                        <h3><?= $card['year'] ?></h3>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    </div>

</main>