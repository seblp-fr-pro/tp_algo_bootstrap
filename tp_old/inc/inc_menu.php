<nav>
        <!-- PHP Automatic Menu Generator -->
        <?php
            function listFolderFiles($dir , $saison = null){

                // scan _exo folder and it to an array
                $ffs = scandir($dir);

                // remove . and .. folder from menu
                unset($ffs[array_search('.', $ffs, true)]);
                unset($ffs[array_search('..', $ffs, true)]);

                // prevent empty ordered elements
                if (count($ffs) < 1)
                    return;

                // add ul to html
                echo '<ul>';

                    // list every $ff on $ffs
                    foreach($ffs as $ff){

                        // if saison is null
                        if ($saison==null){

                            // replace string s_ by Saison and create nameMenu variable
                            $nameMenu = str_replace("s_","Saison ",$ff);

                            // create link in Menu with fake hashtag link
                            echo "<li><a href='#'>$nameMenu</a>";

                        }else{

                            // replace string exo_ by Ex and create nameMenu variable
                            $nameMenu = str_replace("exo_","Ex ",$ff);

                            // create a real exercice.php link with dynamic GET adress 
                            echo "<li><a href='index_.php?s=$saison&e=$ff'>$nameMenu</a></li>";
                        }

                        // 
                        if(is_dir($dir.'/'.$ff)){
                            listFolderFiles($dir.'/'.$ff, $ff);
                        }

                        if($saison==null){
                            echo "</li>";
                        }
                    }
                echo '</ul>';
            }

            listFolderFiles('_exos');

                                        // replace string tp_crud by TP CRUD
                                        if ($nameMenu = 'tp_crud'){
                                            $nameMenu = str_replace("tp_crud","TP CRUD",$ff);
                                        }
            
                                        // replace string tp_crud by CV (Curriculum Vitae)
                                        if ($nameMenu = 'tp_cv'){
                                            $nameMenu = str_replace("tp_cv","CV",$ff);
                                        }

        ?>

</nav>