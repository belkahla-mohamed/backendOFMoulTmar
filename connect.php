<?php
// Autoriser les requêtes cross-origin (CORS)
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}
// Paramètres de connexion MySQL
$host = "sql203.infinityfree.com";       // MySQL Hostname
$user = "if0_39376655";                  // Username
$pass = "RGepvI8ngdgQ0i";                // Password
$db   = "if0_39376655_moul_tmar";       // Database name
$port = 3306;                           // Port MySQL (par défaut 3306)

// Connexion à la base de données
$con = new mysqli($host, $user, $pass, $db, $port);

// Vérifier la connexion
if ($con->connect_error) {
    http_response_code(500);
    die(json_encode([
        "success" => false,
        "message" => "❌ Connection failed: " . $con->connect_error
    ]));
}

// Définir l'encodage UTF-8 pour supporter l'arabe et autres caractères spéciaux
$con->set_charset("utf8mb4");

// Réponse de succès (optionnel, à retirer en production)
echo json_encode([
    "success" => true,
    "message" => "✅ Connected to InfinityFree MySQL database!"
]);
?>
