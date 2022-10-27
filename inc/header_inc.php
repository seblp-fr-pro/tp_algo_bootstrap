<div class="container">
    <?php
        $saison = $_GET['s'];
        $exercice = $_GET['e'];
        if ($saison == null or $exercice == null){
            $saison = "01";
        }
        if ($exercice == null){
            $exercice = "01";
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
                require('inc/exos/tp_algo_inc.php');
            }
        // =============================== End of TRY to identify exercice ==============================================
    ?>
    </div>
</div>