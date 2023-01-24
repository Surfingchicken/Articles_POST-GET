<?php 
    include_once './src/header.inc.php'
    ?>
    <head>
    <link rel="stylesheet" href="./css/style.css">

    </head>
<body>
    <header>
        <h1><?= title ?></h1>
    </header>
    <picture>
        <source srcset="./asset/cover.png"
                media="(orientation: portrait)">
        <img src="./asset/cover.png" alt="cover">
    </picture>
    <main>
        <!-- partie dynamique: date et version -->
        <h2>Nous sommes le <?= $_date_php ?> - 10:17</h2>
            <p>
           

                Mise à jour <?=$_modif_php ?><br>
            </p>
        <!-- end -->
        <!-- structure d'affichage pour les articles -->
        <?php 
            include_once './src/connect.inc.php'
        ?>
        <!--itération avec la bdd -->
    
    <!--end -->
    <nav>
        <a class="button" href="./pages/search.php">
            Rechercher les articles 
        </a>
    </nav>
    </main>
    <footer>
        <p>&copy; - MIT - <time datetime="<?=$_date_php?>"><?=$_date_php?></time></p>
    </footer>
   
</body>
</html>