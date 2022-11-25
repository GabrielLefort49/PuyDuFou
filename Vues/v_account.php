<?php
// inclusion des vues footer et header
include("Vues/v_entete.php");
?>

<div class="wrapper-profile">
    <div class="sidebar">
        <h3>Profile</h3>
        <ul>
            <li><a href="index.php?uc=account&action=profile"><i class="fa-solid fa-user"></i> Profile</a></li>
            <li><a href="index.php?uc=account&action=programme"><i class="fas fa-blog"></i>Programme</a></li>
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
                        <form action="index.php?uc=account&action=confirmModification&num=<?php echo $id ?>"
                            method="post" class="login">
                            <div class="field">
                                <input type="text" name="nom" placeholder="nom" value="<?= $laLigne['nomvisiteur'] ?>">
                            </div>
                            <div class="field">
                                <input type="text" name="prenom" placeholder="prenom"
                                    value="<?= $laLigne['prenomvisiteur'] ?>">
                            </div>
                            <div class="field">
                                <input type="mail" name="username" placeholder="Adresse Mail"
                                    value="<?= $laLigne['mailvisiteur'] ?>">
                            </div>
                            <div class="field">
                                <input type="text" name="telephone" placeholder="Veuillez entrez un numéro de téléphone"
                                    value="<?= $laLigne['numtelephonevisiteur'] ?>">
                            </div>
                            <div class="field">
                                <input type="text" name="pas" placeholder="Entrez votre vitesse de pas"
                                    value="<?= $laLigne['vitessemarche'] ?>">
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