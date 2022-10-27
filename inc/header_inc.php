<div class="container">
    <div class="row">
        <?php
            $saison = $_GET['s']; 
            
            $exercice = $_GET['e']; 

            if ($saison == null or $exercice == null){
                $saison = 1;
            }

            if ($exercice == null){
                $exercice = 1;
            }


            $saisonFR= str_replace("s_" , "Saison " , $saison);
            $exerciceFR = str_replace("exo_" , "Exercice " , $exercice);
            
            // =============================== TRY to identify exercice ==============================================
            switch ($exercice) {
                // TP CRUD found
                case 'tp_crud':
                $txtPRINCIPALdatatables = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPHP.php');
                break;
                // TP CV found
                case 'tp_cv':
                    $txtPRINCIPALphp = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPHP.php');
                    break;
                // Exercice NOT FOUND in all cases then display default EXERCICE FORM (TP_ALGO)
                default:
                    echo "<H3>TP Algo - Saison ". $saison . " - Exercice " . $exercice . "</H3><br/>";
                    $txtPRINCIPALennonce = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoENNONCE.txt');
                    $txtPRINCIPALpseudo = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPSEUDO.txt');
                    $txtPRINCIPALjs = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJS.js');
                    $txtPRINCIPALjq = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoJQ.js');
                    $txtPRINCIPALphp = file_get_contents('inc/exos/s_' . $saison . '/exo_' . $exercice . '/exoPHP.php');
            }           

            // =============================== End of TRY to identify exercice ==============================================
            

        ?>
    </div>
</div>