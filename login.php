<?php 

require 'layouts/header.php'; 

$passwordBDD = 'password';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!empty($_POST['email']) && !empty($_POST['password'])){
        // J'ai un retour de BDD me disant user exist ou n'esxiste pas
        // Si user existe alors je teste la validité du password
        if($_POST['password'] === $passwordBDD){
            $_SESSION['user'] = [
                "email" => $_POST['email'],
                "role" => 'user'
            ];
            header('Location: http://localhost:8000');
        }
    }
}
?>

<div class="container">
    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


<?php require 'layouts/footer.php'; ?>