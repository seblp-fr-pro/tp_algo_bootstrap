<form action="exo.php" method="POST" name="formPHP">
    <p>
        <?php

        echo "<p>Script PHP : _exo/" . $saison . "/" . $exercice . "/" .  "exo.php</p>";
        echo "<p>DÉBUT</p>";

        $variableA = 49;
        echo "<p>Variable A = " . $variableA . "</p>";
        $variableB = $variableA + 4;
        echo "<p>Variable B = " . $variableB . "</p>";
        $variableA = $variableA + 1;
        echo "<p>Variable A = " . $variableA . "</p>";
        $variableB = $variableA - 4;
        echo "<p>Variable B = " . $variableB . "</p>";

        echo "<p> FIN </p>";

        ?>
    </p>
</form>