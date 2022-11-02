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
                        require('inc/exos/inc_tp_crud.php');
                    break;
                
                // Exercice NOT FOUND in all cases then display default EXERCICE FORM (TP_ALGO)
                    default:
                        require('inc/exos/inc_tp_algo.php');
                    break;
            }

        // =============================== End of TRY to identify exercice ==============================================
    ?>
</div>