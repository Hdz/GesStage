<nav>
        <div class="menuGauche">
            <ul>
                <li>
                    <a href="index.php?action=accueil">Accueil</a> 
                </li>
                
                <li>
                    <a href="index.php?action=coordonnees">Coordonnées</a>
                </li>
                
                <li>
                    <a href="index.php?action=entreprise">Entreprises</a>
                </li>
                
                <li>
                    <a href="index.php?action=stages">Stages</a>
                </li>
                
            </ul>
        </div>
        <div class="container">
            <img src="./vue/img/MenuQuit.png" class="menu_head" width=120px height=25px/>
            <span id=textlogin><?php echo $_SESSION['login'] ?></span>
            <ul class="menu_body">
                <li id="menu_jquerry"><a href="index.php?action=deconnexion">- Déconnexion</a></li>
            </ul>
        </div>    
</nav>