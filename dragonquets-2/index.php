<?php

require_once 'data.php';

$category = $_GET['category'] ?? 'talents';
$itemId = $_GET['item'] ?? null;

$categories = $collegeAirMagics;

// Vérification de la catégorie
if (!isset($categories[$category])) {
    $category = 'talents';
}

$currentCategory = $categories[$category];

// Suppression du titre pour récupérer uniquement les éléments
$items = $currentCategory;
unset($items['title']);

// Élément sélectionné
$selectedItem = null;

if ($itemId && isset($items[$itemId])) {
    $selectedItem = $items[$itemId];
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>College of Air Magics</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="app">

    <!-- MENU DES CATÉGORIES -->

    <aside class="sidebar">

        <h1>College of Air Magics</h1>

        <nav>

            <?php foreach ($categories as $key => $value): ?>

                <a
                    href="?category=<?= $key ?>"
                    class="<?= $category === $key ? 'active' : '' ?>"
                >

                    <?= htmlspecialchars($value['title']) ?>

                </a>

            <?php endforeach; ?>

        </nav>

    </aside>


    <!-- LISTE DES SORTS / TALENTS -->

    <section class="items-panel">

        <h2>
            <?= htmlspecialchars($currentCategory['title']) ?>
        </h2>

        <div class="items-list">

            <?php foreach ($items as $id => $item): ?>

                <a
                    class="item-card <?= $itemId === $id ? 'selected' : '' ?>"
                    href="?category=<?= urlencode($category) ?>&item=<?= urlencode($id) ?>"
                >

                    <span class="item-id">
                        <?= htmlspecialchars($id) ?>
                    </span>

                    <span class="item-name">
                        <?= htmlspecialchars($item['name']) ?>
                    </span>

                </a>

            <?php endforeach; ?>

        </div>

    </section>


    <!-- INFORMATIONS -->

    <main class="details">

        <?php if ($selectedItem): ?>

            <div class="details-card">

                <div class="title-section">

                    <h2>
                        <?= htmlspecialchars($selectedItem['name']) ?>
                    </h2>

                    <?php if (isset($selectedItem['name_en'])): ?>

                        <p class="english-name">

                            <?= htmlspecialchars($selectedItem['name_en']) ?>

                        </p>

                    <?php endif; ?>

                </div>


                <div class="stats">

                    <?php if (isset($selectedItem['range'])): ?>

                        <div class="stat">

                            <strong>Portée</strong>

                            <span>
                                <?= htmlspecialchars($selectedItem['range']) ?>
                            </span>

                        </div>

                    <?php endif; ?>


                    <?php if (isset($selectedItem['duration'])): ?>

                        <div class="stat">

                            <strong>Durée</strong>

                            <span>
                                <?= htmlspecialchars($selectedItem['duration']) ?>
                            </span>

                        </div>

                    <?php endif; ?>


                    <?php if (isset($selectedItem['ritual_duration'])): ?>

                        <div class="stat">

                            <strong>Temps du rituel</strong>

                            <span>
                                <?= htmlspecialchars($selectedItem['ritual_duration']) ?>
                            </span>

                        </div>

                    <?php endif; ?>


                    <?php if (isset($selectedItem['maximum_duration'])): ?>

                        <div class="stat">

                            <strong>Durée maximale</strong>

                            <span>
                                <?= htmlspecialchars($selectedItem['maximum_duration']) ?>
                            </span>

                        </div>

                    <?php endif; ?>


                    <?php if (isset($selectedItem['base_chance'])): ?>

                        <div class="stat">

                            <strong>Base Chance</strong>

                            <span>
                                <?= htmlspecialchars($selectedItem['base_chance']) ?>
                            </span>

                        </div>

                    <?php endif; ?>


                    <?php if (isset($selectedItem['resist'])): ?>

                        <div class="stat">

                            <strong>Résistance</strong>

                            <span>
                                <?= htmlspecialchars($selectedItem['resist']) ?>
                            </span>

                        </div>

                    <?php endif; ?>


                    <?php if (isset($selectedItem['experience_multiple'])): ?>

                        <div class="stat">

                            <strong>Experience Multiple</strong>

                            <span>
                                <?= htmlspecialchars($selectedItem['experience_multiple']) ?>
                            </span>

                        </div>

                    <?php endif; ?>


                    <?php if (isset($selectedItem['backfire'])): ?>

                        <div class="stat">

                            <strong>Backfire</strong>

                            <span>
                                <?= htmlspecialchars($selectedItem['backfire']) ?>
                            </span>

                        </div>

                    <?php endif; ?>


                    <?php if (isset($selectedItem['requirements'])): ?>

                        <div class="stat">

                            <strong>Conditions</strong>

                            <span>
                                <?= htmlspecialchars($selectedItem['requirements']) ?>
                            </span>

                        </div>

                    <?php endif; ?>

                </div>


                <!-- EFFET COMPLET -->

                <section class="effect">

                    <h3>Effet</h3>

                    <p>
                        <?= nl2br(
                            htmlspecialchars(
                                $selectedItem['effect']
                            )
                        ) ?>
                    </p>

                </section>

            </div>

        <?php else: ?>

            <div class="empty-state">

                <h2>
                    Sélectionnez un élément
                </h2>

                <p>
                    Cliquez sur un Talent, un Sort ou un Rituel pour afficher toutes ses informations.
                </p>

            </div>

        <?php endif; ?>

    </main>

</div>

</body>

</html>