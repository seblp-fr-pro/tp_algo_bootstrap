            <div class="row">
                <div class="container-fluid">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12">
                                <?php
                                    if ($saison == null or $exercice == null){
                                        $saison=s_01;
                                    }

                                    if ($exercice == null){
                                        $exercice=exo_01;
                                    }

                                    $saison = $_GET['s']; 
                                    $exercice = $_GET['e']; 

                                    $saisonFR = str_replace("s_" , "Saison " , $saison);
                                    $exerciceFR = str_replace("exo_" , "Exercice " , $exercice);

                                    // =============================== TRY to identify exercice ==============================================

                                    switch ($exercice) {

                                        // TP CRUD found
                                        case 'tp_crud':
                                            $txtPRINCIPALdatatables = file_get_contents('_exos/' . $saison . '/' . $exercice . '/exoPHP.php');
                                            break;

                                        // TP CV found
                                        case 'tp_cv':
                                            $txtPRINCIPALphp = file_get_contents('_exos/' . $saison . '/' . $exercice . '/exoPHP.php');
                                            break;

                                        // TP BOOTSTRAP found
                                        case 'tp_bootstrap':
                                            $txtPRINCIPALphp = file_get_contents('_exos/' . $saison . '/' . $exercice . '/exoPHP.php');
                                            break;

                                        // Exercice NOT FOUND in all cases then display default EXERCICE FORM (TP_ALGO)
                                        default:
                                            $txtPRINCIPALennonce = file_get_contents('_exos/' . $saison . '/' . $exercice . '/exoENNONCE.txt');
                                            $txtPRINCIPALpseudo = file_get_contents('_exos/' . $saison . '/' . $exercice . '/exoPSEUDO.txt');
                                            $txtPRINCIPALjs = file_get_contents('_exos/' . $saison . '/' . $exercice . '/exoJS.js');
                                            $txtPRINCIPALjq = file_get_contents('_exos/' . $saison . '/' . $exercice . '/exoJQ.js');
                                            $txtPRINCIPALphp = file_get_contents('_exos/' . $saison . '/' . $exercice . '/exoPHP.php');
                                    }

                                    // =============================== End of TRY to identify exercice ==============================================
                                ?>

                                <div class="row">
                                    <pre class="col-xl-8">
                                        <div class="txtPRINCIPALparent">
                                            <div id="txtPRINCIPALenfantENNONCE"><?php echo $txtPRINCIPALennonce; ?></div>
                                            <div id="txtPRINCIPALenfantPSEUDO"><?php echo $txtPRINCIPALpseudo; ?></div>
                                            <div id="txtPRINCIPALenfantJS"><?php echo $txtPRINCIPALjs; ?></div>
                                            <div id="txtPRINCIPALenfantJQ"><?php echo $txtPRINCIPALjq; ?></div>
                                            <div id="txtPRINCIPALenfantPHP"><?php echo $txtPRINCIPALphp; ?></div>
                                            <div id="numeroEXERCICE"><?php echo $saisonFR . ' - ' . $exerciceFR; ?></div>
                                        </div>
                                    </pre>

                                    <pre class="col-xl-4">
                                        <div id="resultatSORTIE"><?php echo $txtFORMULAIRE; ?></div>
                                    </pre>
                                </div>
                                <div class="listeBOUTONS">
                                    <button type="button" id="boutonENNONCE" onclick="displayENNONCE()" class="btn btn-secondary">Ennoncé</button>
                                    <button type="button" id="boutonPSEUDO" onclick="displayPSEUDO()" class="btn btn-secondary">Pseudo Code</button>
                                    <button type="button" id="boutonJS" onclick="displayJS()" class="btn btn-secondary">Code JavaScript</button>
                                    <button type="button" id="boutonJQ" onclick="displayJQ()" class="btn btn-secondary">Code JQuery</button>
                                    <button type="submit" id="boutonPHP" onclick="displayPHP()" class="btn btn-secondary">Code PHP</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>