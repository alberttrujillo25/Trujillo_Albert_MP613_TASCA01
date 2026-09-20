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
                ."<h1>Pàgina de taula</h1>"
                ."<hr/><br/>";

            echo '<table border="2">';
            echo "<tr>";
            foreach($biblioteca[0] as $clau=>$valor){
                echo "<th>". $clau ."</th>";
            }
            echo "</tr>";
            foreach($biblioteca as $llibre){
                echo "<tr>";
                foreach($llibre as $valor) {
                    echo "<td>". $valor ."</td>";
                }
                echo"</tr>";
            }
            echo "</table><br/><hr/>";
        ?>
        <a href="index.php">
            <button>Principal</button>
        </a>
        <a href="llista.php">
            <button>Llista</button>
        </a>
    </body>
</html>