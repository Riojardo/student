<?php

require 'C:\wamp64\www\student\studet.php';
require 'ArcticleController.php';

// Create a new instance of DatabaseManager
$database = new DatabaseManager();
$db = $database->getConnection();

// Create a new instance of ArticleController
$articleController = new ArticleController($db);

// Fetch articles
$stmt = $articleController->getArticles();

// Check if any articles were found
if ($stmt->rowCount() > 0) {
    echo "<ul>";
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>Title: " . $row['title'] . ", Description: " . $row['description'] . "</li>";
    }
    echo "</ul>";
} else {
    echo "No articles found.";
}