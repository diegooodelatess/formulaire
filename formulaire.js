document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector("form");

    form.addEventListener("submit", function (event) {

        const nom = document.getElementById("nom").value.trim();
        const email = document.getElementById("email").value.trim();
        const password = document.getElementById("password").value.trim();
        const ville = document.getElementById("ville").value.trim();

        let erreurs = [];

        if (nom.length < 2 || nom.length > 50) {
            erreurs.push("Le nom doit contenir entre 2 et 50 caractères.");
        }

        if (!email.includes("@") || !email.includes(".")) {
            erreurs.push("Email non valide.");
        }

        if (password.length < 6) {
            erreurs.push("Le mot de passe doit contenir au moins 6 caractères.");
        }

        if (ville === "") {
            erreurs.push("La ville est obligatoire.");
        }

        if (erreurs.length > 0) {
            event.preventDefault(); // Empêche l'envoi du formulaire
            alert(erreurs.join("\n"));
        }
    });
});
