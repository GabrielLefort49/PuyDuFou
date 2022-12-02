        <?php include("Vues/v_entete.php")?>
        <body>
        <nav id="navbar">
        <div class="container">
            <img class="brand" src="./utils/images/logo.svg"></img>
            <div class="container-inner">
            <ul class="link-nav">    
                <li class="notification"><a href="#"><i class="fa-solid fa-bell"></i> Notification</a></li>
                <li class="message"><a href="#"><i class="fa-solid fa-envelope"></i> Messagerie</a></li>
                <li class="comptegestio"><a href="#"><i class="fa-solid fa-user"></i>  Mon Compte</a></li>
            </ul>
        </div>
    </div>
</nav>
        <div class="dashboard_gen">
            <div class="dashboard_list">
                <form method="POST" action="index.php?uc=actuday&action=actuday">
                <div class="dashboard_actuday">
                    <h1 id="dateparc">DATE ACTUEL</h1>
                    <p id="showdate">YYYY / MM / DD</p>
                    <div id="cercle"><a href="index.php?uc=actuday&action=actuday"><i class="fa-sharp fa-solid fa-calendar-days"></i></a></div>
                    <h2 id="showtime"></h2>
                    <div class="time_oc">
                        <div class="div_opentime">
                            <p class="opentime_gen">Hre Ouverture</p>
                            <i class="fa-regular fa-clock"></i>
                            <p>.. : ..</p>
                        </div>
                        <div class="div_closetime">
                            <p class="closetime_gen">Hre Fermeture</p>
                            <i class="fa-regular fa-clock"></i>
                            <p>.. : ..</p>
                        </div>
                    </div>
                </div>
                </form>
                </div>
                <div class="dashboard_list">
                <div class="dashboard_calendar">
                    <h1>LE PROGRAMME</h1>
                <div id="cercle"><a href="#"><i class="fa-regular fa-calendar"></a></i></div>
                </div>
                </div>
                <div class="dashboard_list">
                <div class="dashboard_show">
                    <h1>LES SPECTACLES</h1>
                    <div id="cercle"><a href="index.php?uc=spectacle&action=spectacle"><i class="fa-regular fa-eye"></i></a></div>    
                </div>
                </div>
            </div>
            <script src="https://kit.fontawesome.com/1cbb64fb02.js" crossorigin="anonymous"></script>
        <script src="./utils/js/heure.js"></script>
    </body>
            
        