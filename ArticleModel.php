<?php 

function getConnection()
{
    return new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}


function getAll()
{
    $statement = getConnection()->query("SELECT * FROM article");
    return $statement->fetchAll(PDO::FETCH_ASSOC);
}

function getOne(int $id)
{
    $statement = getConnection()->query("SELECT * FROM article WHERE id=$id");
    return $statement->fetch(PDO::FETCH_ASSOC);
}

function edit()
{
    $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}

function create()
{
    $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}

function delete()
{
    $pdo = new PDO(DSN, USER, PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}


