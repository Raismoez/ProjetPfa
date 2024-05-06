function submitForm() {
    if (!controleEmail()) {
        var email = document.getElementById("emailInput").value;
        alert("Veuillez saisir une adresse e-mail valide.");
        return false;
    }

    if (!controleMDP()) {
        var password = document.getElementById("passwordInput").value;
        alert("Le mot de passe doit contenir au moins 8 caractères");
        return false;
    }

    alert("Connexion réussie!");
    return true;
}

function controleEmail() {
    var email = document.getElementById("emailInput").value;
    return email.includes("@");
}

function controleMDP() {
    var password = document.getElementById("passwordInput").value;
    return password.length >= 8;
}
