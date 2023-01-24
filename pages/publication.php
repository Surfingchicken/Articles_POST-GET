<?php 
    include_once '../src/header.inc.php'
    ?>

<body>
    <header>
        <h1><?= title ?></h1>
    </header>
    <main>
        <!-- partie dynamique: date et version -->
        <h2>Post publié</h2>
            <p>
                Mise à jour <?=$_modif_php ?><br>
            </p>
        <!-- end -->
        <!-- structure d'affichage pour les articles -->
        <?php 
            include_once '../src/publicationfocus.inc.php'
        ?>
        <!--itération avec la bdd -->
    
    <!--end -->
    <nav>
        <a class="button" href="../index.php">
            Go home
        </a>
        <a class="button" href="../pages/update.php">
            Publier un article
        </a>
        <a class="button" href="../pages/search.php">
            Rechercher les articles
        </a>
    </nav>
    </main>
    <footer>
        <p>&copy; - MIT - <time datetime="<?=$_date_php?>"><?=$_date_php?></time></p>
    </footer>
   
</body>
</html>