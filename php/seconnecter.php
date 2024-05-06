<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="login,password">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="../css/seconnecter.css">
    <script src="../js/controle.js"></script>
    <title>Login Page</title>
</head>
<body>
    <div class="login-container">
        <p class="title">Se Connecter</p>
        <p class="welcome-message">Bienvenue dans l'espace privé. 
		Veuillez fournir vos identifiants de connexion pour continuer et avoir accès à tous nos services.
        </p>

        <form class="login-form" onsubmit="return submitForm()" method="POST" ACTION="clientctrl.php">

            <div class="form-control">
                <input type="text" placeholder="Adresse mail" id="emailInput">
                <i class="fas fa-user"></i>
            </div>
            <div class="form-control">
                <input type="password" placeholder="Mot de passe" id="passwordInput">
                <i class="fas fa-lock"></i>
                <p class="forgot-password">Mot de passe oublier?</p>
            </div>

            <button class="submit" >se connecter</button>
        </form>

        <div class="social-login">
            <label>Connecter Avec :</label>
            <div class="social-container">
                <button>
                    <i class="fab fa-facebook-f"></i>
                </button>
                <button>
                    <i class="fab fa-google"></i>
                </button>
                <button>
                    <i class="fab fa-linkedin-in"></i>
                </button>
            </div>
        </div>

        <div class="additional-action">
            <a href="inscription.php"><p>Pas de compte ? créer un compte</p></a>
        </div>


    </div>
    
</body>
</html>