<?php include("../database.php"); ?>
<?php include("elements/header.php"); ?>


<?php
$id = $_GET['id'];
$post = fetch_post($id);
?>

<div class="container fluid">
    <h1>Post Page</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $post["title"]; ?></h3>
        </div>
        <div class="panel-body">
            <?php echo $post["content"]; ?>
        </div>
    </div>
</div>
<?php include("elements/footer.php"); ?>