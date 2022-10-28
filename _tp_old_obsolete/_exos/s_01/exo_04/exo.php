<form action="exo.php" method="POST" name="formPHP">
    <p>
        <?php

        echo "<p>Script PHP : _exo/" . $saison . "/" . $exercice . "/" .  "exo.php</p>";
        echo "<p>DÉBUT</p>";

        $variableA = 13;
        echo "<p>Variable A = " . $variableA . "</p>";

        $variableB = 19;
        echo "<p>Variable B = " . $variableB . "</p>";

        $variableC = $variableA + $variableB;
        echo "<p>Variable C = " . $variableC . "</p>";

        $variableB = $variableA + $variableB;
        echo "<p>Variable B = " . $variableC . "</p>";

        $variableA = $variableC;
        echo "<p>Variable A = " . $variableA . "</p>";

        echo "<p> FIN </p>";

        ?>
    </p>
</form>