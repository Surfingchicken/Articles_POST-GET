<?php 
    include_once '../src/header.inc.php'
    ?>

<body>
    <header>
        <h1><?= title ?></h1>
    </header>
    <main>
        <?php  
        $bdd = new PDO('mysql:host=localhost;dbname=Articles;charset=utf8','root','root');
        $_article = $bdd->query('SELECT title, content, datetime FROM post ORDER BY id ASC LIMIT 1');
    //tester la recherche
        if(isset($_GET['query']) AND !empty($_GET['query'])){
            $_query = htmlspecialchars($_GET['query']);
            $_article = $bdd->query('SELECT title, content, datetime FROM post WHERE title LIKE "%'.$_query.'%" ORDER BY id DESC');
        }
?>
        <!-- partie dynamique: date et version -->
        <h2>Rechercher un article</h2>
        <form action="<?php $_SERVER['PHP_SELF']?>" class="form" method="get">
            <legend>
                Faîtes votre recherche
            </legend>
            <input type="search" name="query" placeholder="Rechercher par titre..." >
            <input type="submit" value="Search">
            
            <?php if($_article->rowCount() > 0){?>
            <article>
                <?php while($data = $_article->fetch()){?>
                <h2>
                    <?= $data['title']?>
                </h2>
                <p>
                    <?= $data["content"]?><br>
                    <time datetime="<?=$data['datetime']?>">
                        <strong>
                            Date de modification : 
                            <?=$data['datetime']?>
                        </strong>
                    </time>
                </p>
                    <?php }?>
                <?php }else {?>
                        <p class="warning"> Aucun résultat pour <?= $_query ?>....</p>
                <?php } ?>
            </article>
        </form>  
        <nav>
                <a class="button" href="../index.php">
                Go home
                </a>
            </nav> 
    </main>
    <footer>
        <p>&copy; - MIT - <time datetime="<?=$_date_php?>"><?=$_date_php?></time></p>
    </footer>
   
</body>
</html>