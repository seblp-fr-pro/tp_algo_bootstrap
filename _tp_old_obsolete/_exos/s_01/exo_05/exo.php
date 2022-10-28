<form action="exo.php" method="POST" name="formPHP">
    <p>
        <?php

        echo "<p>Script PHP : _exo/" . $saison . "/" . $exercice . "/" .  "exo.php</p>";
        echo "<p>DÉBUT</p>";

        $variableA = 14;
        echo "<p>Variable A = " . $variableA . "</p>";

        $variableB = 29;
        echo "<p>Variable B = " . $variableB . "</p>";

        $variableA = $variableB;
        echo "<p>Variable A = " . $variableA . "</p>";

        $variableB = $variableA;
        echo "<p>Variable B = " . $variableB . "</p>";

        echo "<p> FIN </p>";

        ?>
    </p>
</form>