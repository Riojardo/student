<?php

class ArticleController
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function getArticles()
    {
        $query = "SELECT * FROM article";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }
}