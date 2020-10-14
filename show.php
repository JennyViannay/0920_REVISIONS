<?php 
require 'layouts/header.php'; 
require 'ArticleModel.php';

if(isset($_GET['id']) && !empty($_GET['id'])){
    $article = getOne(intval($_GET['id']));
}

?>


<?php require 'layouts/footer.php'; ?>