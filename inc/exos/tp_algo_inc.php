<?php
    echo "<H3>TP Algo - Saison ". $saison . " - Exercice " . $exercice . "</H3>";
    $txtPRINCIPALennonce = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoENNONCE.txt');
    $txtPRINCIPALpseudo = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPSEUDO.txt');
    $txtPRINCIPALjs = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJS.js');
    $txtPRINCIPALjq = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJQ.js');
    $txtPRINCIPALphp = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPHP.php'); 
?>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="ennonce" role="tabpanel">
        <?php
            echo '<p><textarea id="ENNONCE" name="ENNONCE" rows="6" cols="120">' . $txtPRINCIPALennonce . '</textarea></p>'; 
        ?>        
    </div>
</div>

<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="pseudo" role="tabpanel">
        <?php
            echo '<p><textarea id="PSEUDO" name="PSEUDO" rows="6" cols="120">' . $txtPRINCIPALpseudo . '</textarea></p>'; 
        ?>        
    </div>
</div>

