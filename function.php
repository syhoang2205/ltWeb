<?php

function findUserEmail($email)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM account WHERE email = ?");
    $stmt->execute(array(strtolower($email)));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function findUserId($id)
{
    global $db;
    $stmt = $db->prepare("SELECT * FROM account WHERE id = ?");
    $stmt->execute(array($id));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function insertUser($email, $password, $fullname)
{
    global $db;
    $stmt = $db->prepare("INSERT INTO account (email, password, fullname) VALUE (?, ?, ?)");
    $stmt->execute(array($email, $password, $fullname));
    $insertId = $db->lastInsertId();
    return $insertId;
}

function updateUserName($name, $id)
{
    global $db;
    $stmt = $db->prepare("UPDATE account SET fullname = ? WHERE id = ?");
    $stmt->execute(array($name,$id));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function insertPost($id, $content,$createdAt)
{
    global $db;
    $stmt = $db->prepare("INSERT INTO content post(userId, content, createdAt) VALUE (?,?,?)");
    $stmt->execute(array($id, $content,$createdAt));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}

function getNewFeeds($id, $content)
{
    global $db;
    $stmt = $db->prepare("SELECT content FROM posts WHERE id = ?");
    $stmt->execute(array($id));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
}