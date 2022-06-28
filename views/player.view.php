<?php
include('views/layouts/header.view.php');
?>
<main>
    <h1>All Blacks Rugby</h1>
    <div class="card">
        <img src="static/images/teams/allblacks.png" alt="All blacks logo" class="logo" />
        <div class="name">
            <em>#<?= $number ?></em>
            <h2><?= $first_name ?> <strong><?= $last_name ?></strong></h2>
        </div>
        <div class="profile">
            <img src="static/images/players/allblacks/<?= $image ?>" alt="<?= $first_name ?> <?= $last_name ?>" class="headshot" />
            <div class="features">
                <?php foreach ($featured as $statistic) { ?>
                    <div class="feature">
                        <h3><?= $statistic['label'] ?></h3>
                        <?= $statistic['value'] ?>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div class="bio">
            <div class="data">
                <strong>Position</strong>
                <?= $position ?>
            </div>
            <div class="data">
                <strong>Weight</strong>
                <?= $weight ?>KG
            </div>
            <div class="data">
                <strong>Height</strong>
                <?= $height ?>CM
            </div>
            <div class="data">
                <strong>Age</strong>
                <?= $age ?> years
            </div>
        </div>
    </div>
</main>
<?php
include('views/layouts/footer.view.php');
?>
