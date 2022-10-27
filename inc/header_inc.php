<div class="container">
    <div class="row">
        <ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="ennonce-tab" data-toggle="tab" href="#ennonce" role="tab" aria-controls="home" aria-selected="true">Ennonce</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pseudo-tab" data-toggle="tab" href="#pseudo" role="tab" aria-controls="profile" aria-selected="false">Pseudo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="js-tab" data-toggle="tab" href="#js" role="tab" aria-controls="contact" aria-selected="false">JS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="jq-tab" data-toggle="tab" href="#jq" role="tab" aria-controls="contact" aria-selected="false">JQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="php-tab" data-toggle="tab" href="#php" role="tab" aria-controls="contact" aria-selected="false">PHP</a>
            </li>
        </ul>
        
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