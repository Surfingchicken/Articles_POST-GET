<?php 
    include_once '../src/header.inc.php'
    ?>

<body>
    <header>
        <h1><?= title ?></h1>
    </header>
    <main>
        <!-- partie dynamique: date et version -->
        <h2>Poster un article</h2>
        <form class="form" action="../src/insert.php" method="post">
            <legend>
                Ajouter un titre
            </legend>
            <input type="text" name="title" id="title" for="title" placeholder="Titre...">
            <legend>
                Insérer un contenu
            </legend>
            <textarea name="content" id="content" for="content" cols="1" rows="1" placeholder="Contenu..."></textarea>
            <nav>
                <a class="button" href="../index.php">
                    Go home
                </a>
                <input type="submit" value="Poster" method="post">
            </nav>
        </form>
    </main>
    <footer>
        <p>&copy; - MIT - <time datetime="<?=$_date_php?>"><?=$_date_php?></time></p>
    </footer>
   
</body>
</html>