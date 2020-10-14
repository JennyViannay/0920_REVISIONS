<?php 
require 'layouts/header.php'; 
require 'ArticleModel.php';

if(!isset($_SESSION['user'])){
    header('Location: http://localhost:8000/login.php');
}

if($_SERVER['REQUEST_METHOD'] === 'GET'){
        session_destroy();
}

$articles = getAll();

?>
<div class="container">
    <div class="row">
    <?php foreach ($articles as $article) { ?>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $article['title'] ?></h5>
                    <p class="card-text"><?= $article['description'] ?></p>
                    <a href="show.php?id=<?= $article['id'] ?>" class="btn btn-primary">Read</a>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>
</div>

<?php require 'layouts/footer.php'; ?>