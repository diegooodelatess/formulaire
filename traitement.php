<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom = $_POST['nom'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $sexe = $_POST['sexe'] ?? '';
    $ville = $_POST['ville'] ?? '';
    $loisirs = $_POST['loisirs'] ?? '';
    $animaux = $_POST['animaux'] ?? '';

    // Validation
    $errors = [];
    if (strlen($nom) < 2 || strlen($nom) > 50) $errors[] = "Nom : 2-50 caractères.";
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Email invalide.";
    if (strlen($password) < 6) $errors[] = "Mot de passe : au moins 6 caractères.";
    if (empty($ville)) $errors[] = "Ville obligatoire.";


    // Affichage du profil créé
    echo "<h2>Profil créé avec succès !</h2>";
    echo "<strong>Nom :</strong> $nom<br>";
    echo "<strong>Email :</strong> $email<br>";
    echo "<strong>Sexe :</strong> $sexe<br>";
    echo "<strong>Ville :</strong> $ville<br>";
    echo "<strong>Loisirs :</strong> $loisirs<br>";
    echo "<strong>Animaux :</strong> $animaux<br>";

    exit;
}
?>
