<?php
try{
    $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $_bdd = new PDO('mysql:host=localhost;
                    dbname=Articles', 
                    'root', 'root',
                    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',$_pdo_options));
                    
    $_response = $_bdd->query('SELECT * FROM post');

    while($_data = $_response->fetch())
    {
        if ($_data["id"] == $_GET['id'])
        {
            echo '<article>
                    <h2>
                        <a href="./pages/publication.php?id="'.$_data["id"].'">
                            '.$_data["title"].'
                        </a>
                    </h2>
                    <p>
                        '.$_data["content"].'
                    </p>
                    <time datetime="
                        '.$_data["datetime"].'
                    ">   
                    Date de modification : 
                        '.$_data["datetime"].'
                    </time>
                    <span class="material-symbols-outlined" aria-hidden="true">
                    thumb_up
                    </span>
                    <span class="material-symbols-outlined" aria-hidden="true">
                        thumb_down_off
                    </span>
                    <span class="material-symbols-outlined" aria-hidden="true">
                        favorite
                    </span>
                    <span class="material-symbols-outlined" aria-hidden="true">
                        comment
                    </span>
                </article>';
            } 
    };
    $_response->closeCursor();
} 
catch(Exception $e)
{
    die("Error Data base de votre base ".$e->getMessage());
    }
    ?>