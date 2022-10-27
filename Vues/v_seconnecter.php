<div class="container-connection">
    <div class="wrapper">
        <div class="img-connect">
            <img src="../utils/images/logo.svg" alt="image du logo du puy du fou" srcset="">
        </div>
        <div class="form-container">
            <div class="slide-controls">
                <input type="radio" name="slider" id="login" checked>
                <input type="radio" name="slider" id="signup">
                <label for="login" class="slide login">Connection</label>
                <label for="signup" class="slide signup">Inscription</label>
                <div class="slide-tab"></div>
            </div>
            <div class="form-inner">
                <form action="index.php?uc=connection&action=confirmConnection" method="post" class="login">
                    <div class="field">
                        <input type="mail" name="username" placeholder="Adresse Mail" value="<?= $mail ?>" required>
                    </div>
                    <div class="field">
                        <input type="password" name="password" placeholder="Mot de passe" value="<?= $password ?>"
                            required>
                    </div>
                    <div class="pass-link"><a href="#">Forgot password?</a></div>
                    <div class="field">
                        <input type="submit" value="Connection">
                    </div>
                    <div class="signup-link">Vous êtes pas membre ? <a href="#">Enregistrez-vous</a></div>
                </form>

                <form action="index.php?uc=connection&action=confirmInscription" method="post" class="signup">
                    <div class="field">
                        <input type="text" name="nomS" placeholder="Nom" required>
                    </div>
                    <div class="field">
                        <input type="text" name="prenomS" placeholder="Prenom" required>
                    </div>
                    <div class="field">
                        <input type="mail" name="mailS" placeholder="Adresse mail" required>
                    </div>
                    <div class="field">
                        <input type="password" name="passwordS" placeholder="Mot de passe" required>
                    </div>
                    <div class="field">
                        <input type="submit" name="create" value="Inscription">
                    </div>
                    <div class="login-link">Vous avez déjà un compte ? <a href="#">Connectez-vous</a></div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="../utils/js/login.js"></script>
<script src="../utils/js/nav.js"></script>
<script src="https://kit.fontawesome.com/1cbb64fb02.js" crossorigin="anonymous"></script>