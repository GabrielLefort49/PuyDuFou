<?php
// inclusion des vues footer et header
include("Vues/v_entete.php");
?>

<div class="wrapper-profile">
    <div class="sidebar">
        <h3><?= $_SESSION['session']['prenomvisiteur'] ?></h3>
        <ul>
            <li><a href="#"><i class="fa-solid fa-user"></i> Profile</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Programme</a></li>
            <li><a href="index.php?uc=connection&action=deconnexion"><i class="fas fa-map-pin"></i>Deconnection</a></li>
        </ul>
    </div>
    <div class="main-content">
        <div class="container-connection">
            <div class="wrapper">
                <div class="img-connect">
                    <img src="../utils/images/logo.svg" alt="image du logo du puy du fou" srcset="">
                </div>
                <div class="form-container">
                    <div class="form-inner">
                        <form
                            action="index.php?uc=account&action=confirmModification&num=<?php echo $_SESSION['session']['id'] ?> ?>"
                            method="post" class="login">
                            <div class="field">
                                <input type="text" name="nom" placeholder="nom"
                                    value="<?= $_SESSION['session']['nomvisiteur'] ?>">
                            </div>
                            <div class="field">
                                <input type="text" name="prenom" placeholder="prenom"
                                    value="<?= $_SESSION['session']['prenomvisiteur'] ?>">
                            </div>
                            <div class="field">
                                <input type="mail" name="username" placeholder="Adresse Mail"
                                    value="<?= $_SESSION['session']['mailvisiteur'] ?>">
                            </div>
                            <div class="field">
                                <input type="text" name="telephone" placeholder="Veuillez entrez un numéro de téléphone"
                                    value="<?= $_SESSION['session']['numtelephonevisiteur'] ?>">
                            </div>
                            <div class="field">
                                <input type="text" name="pas" placeholder="Entrez votre vitesse de pas" 
                                value="<?= $_SESSION['session']['vitessemarche'] ?>">
                            </div>
                            <div class="field">
                                <input type="password" name="password" placeholder="Mot de passe" value="">
                            </div>
                            <div class="field">
                                <input type="submit" value="Modifier">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
// inclusion des vues footer et header
include("Vues/v_footer.php");
?>