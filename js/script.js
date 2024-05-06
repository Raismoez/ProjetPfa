function submitForm() {
    if (!controleChamp("name") || !controleChamp("prenom") || !controleEmail() || !controleMDP()) {
        return false;
    }

    alert("Inscription réussie!");
    return true;
}

function controleChamp(a) {
    var v = document.getElementById(a).value;
    if (v === '') {
        alert('Veuillez remplir tous les champs.');
        return false;
    }
    return true;
}

function controleEmail() {
    var email = document.getElementById("email").value;
    if (!email.includes("@")) {
        alert("Veuillez saisir une adresse e-mail valide.");
        return false;
    }
    return true;
}

function controleMDP() {
    var password = document.getElementById("psw").value;
    if (password.length < 8) {
        alert("Le mot de passe doit contenir au moins 8 caractères.");
        return false;
    }
    return true;
}
