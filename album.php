
<!-- GET THE ID URL-->

<?php include("includes/header.php");

    if (isset($_GET['id'])) {
        $albumId =  $_GET['id'];
    }
    else {
        header("Location: index.php");
    }

    $album = new Album($con, $albumId);
    $artist = $album->getArtist();
?>

<!--CODE BELOW WILL OUTPUT THE artwork, title, artist in the current alpum.php page-->

<div class="entityInfo">
    <div class="leftSection">
        <img src="<?php echo $album->getArtworkPath(); ?>" alt="">
    </div>

    <div class="rightSection">
        <h2><?php echo $album->getTitle(); ?></h2>
        <span>By <?php echo $artist->getName(); ?></span>
        <p><?php echo $album->getNumberOfSongs(); ?> songs</p>

    </div>
</div>





<?php include("includes/footer.php")?>