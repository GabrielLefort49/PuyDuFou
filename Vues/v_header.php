<header>
    <nav id="navbar">
        <div class="menu">
            <div>
                <img src="../utils/images/logo.svg" class="logo" alt="logoPDF">
                <ul>
                    <li><a href="index.php?uc=accueil">Accueil</a></li>
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul>
                    <li><a href="#">CGU</a></li>
                    <?php if ($pdo->isConnected()) { ?>
                    <li><a href="index.php?uc=connection&action=seConnecter">Mon compte</a></li>
                    <li><a href="#">Mon programme</a></li>
                    <?php } else { ?>
                    <li><a href="index.php?uc=connection&action=seConnecter"> Se Connecter</a></li>
                    <?php } ?>
                </ul>
                <ul class="social-media">
                    <li><a href="#">
                            <i class="fa-brands fa-facebook"></i>
                        </a></li>
                    <li><a href="#">
                            <i class="fa-brands fa-instagram"></i>
                        </a></li>
                    <li><a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a></li>
                    <li><a href="#">
                            <i class="fa-brands fa-youtube"></i>
                        </a></li>
                </ul>
                <form>
                    <div class="input-wrap">
                        <a href="#">Me connecter</a>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <img src="../utils/images/logo.svg" class="brand"></img>
            <div class="container-inner">
                <ul>
                    <li><a href="index.php?uc=accueil">Accueil</a></li>
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <ul>
                    <?php if ($pdo->isConnected()) { ?>
                    <li><a href="index.php?uc=account&action=profile"><i class="fa-solid fa-user"></i> Mon
                            compte</a></li>
                    <li><a href="#"><i class="fa-solid fa-calendar-days"></i> Mon programme</a></li>
                    <?php } else { ?>
                    <li><a href="index.php?uc=connection&action=seConnecter"><i class="fa-solid fa-user"></i> Se
                            Connecter</a></li>
                    <?php } ?>
                </ul>
            </div>
            <i class="fas fa-bars" id="menu-btn"></i>
        </div>
    </nav>
</header>