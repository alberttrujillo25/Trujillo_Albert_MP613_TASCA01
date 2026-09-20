<!DOCTYPE html>
<html lang="ca">
    <head>
        <meta charset="UTF-8">
        <title>Bloc 1 Tasca 1</title>
    </head>

    <body>
        <?php
            include("dades.php");

            echo "<br/>"
                ."<h1>Pàgina de llista</h1>"
                ."<hr/><br/>";

            echo "<ul>"
                ."<li>Biblioteca"
                ."<ul>";
            foreach($biblioteca as $llibre){
                echo "<li>Llibre"
                    ."<ul>";
                    foreach($llibre as $clau=>$valor){
                        echo "<li>". $clau .":". $valor ."</li>";
                    }
                echo "</ul>"
                    ."</li>";
            }
            echo "</ul>"
                ."</li>"
                ."</ul><br/><hr/>";
        ?>
        <a href="taula.php">
            <button>Taula</button>
        </a>
        <a href="index.php">
            <button>Principal</button>
        </a>
    </body>
    
</html>