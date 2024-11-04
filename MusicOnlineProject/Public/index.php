
<?php
include 'Config/config.php';
    include 'Includes/header.php';

    // bring in album details
    $album = $conn->prepare("SELECT
    id,
    albName,
    albDescription,
    release_date,
    image
    FROM album");
    $album->execute();
    $album->store_result();
    $album->bind_result($aID, $albName, $albDesc, $release, $image);

    // bring in artist details
    $artist = $conn->prepare("SELECT
    id,
    artName,
    artDescription,
    image
    FROM artist");
    $artist->execute();
    $artist->store_result();
    $artist->bind_result($artID, $artName, $artDesc, $image);
?>



<main class="vinyl">
    <?php while($album->fetch()) : ?>
    <div>
        <h2><?= $albName ?></h2>
        <img src="<?= ROOT_DIR ?>Assets/Media/<?= $image ?>" alt="" >
        <h2><?= $albDesc ?></h2>
        <span><?= $release ?></span>
        
        <a href="<?= ROOT_DIR ?>Public/moreInfo.php?aID=<?=$aID ?>" class="MoreInfoBtn">More Info</a>

        <!-- <a href="<?= ROOT_DIR ?>Public/artistInfo.php?artID=<?=$artID ?>">Artist Info</a> -->
    </div>
    <?php endwhile ?>
</main>

<?php
    include 'Includes/footer.php';
?>