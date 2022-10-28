<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <!-- PHP Automatic Menu Generator bootstrap version -->
    <div class="container-fluid p-2 text-dark">

        <div class="navbar-brand collapse navbar-collapse" id="navbarSupportedContent">


            <?php
                function listFolderFiles($dir , $saison = null){

                    // scan _exo folder
                    $ffs = scandir($dir);

                    // remove . and .. folder from menu
                    unset($ffs[array_search('.', $ffs, true)]);
                    unset($ffs[array_search('..', $ffs, true)]);

                    // prevent empty ordered elements
                    if (count($ffs) < 1)
                        return;

                    // add ul to html
                    echo '<div class="navbar-nav me-auto mb-2 mb-lg-0 dropdown-menu" aria-labelledby="navbarDropdown">';

                        // list every $ff on $ffs
                        foreach($ffs as $ff){

                            // if saison is null
                            if ($saison==null){

                                // replace string s_ by Saison and create nameMenu variable
                                $nameMenu = str_replace("s_","S ",$ff);

                                // create link in Menu with fake hashtag link
                                echo '<div class="dropdown-menu" aria-labelledby="dropdownMenuLink" href="#">'. $nameMenu;

                                }else{

                                    // replace string exo_ by Ex and create nameMenu variable
                                    $nameMenu = str_replace("exo_","Ex ",$ff);

                                    // create a real exercice.php link with dynamic GET adress 
                                    echo '<a class="dropdown-item" href="index.php?s='. $saison . '&e=' . $ff . '>' . $nameMenu . '</a>';

                                }

                            // 
                            if(is_dir($dir.'/'.$ff)){
                                listFolderFiles($dir.'/'.$ff, $ff);
                            }

                            // End of menu then close div
                            if($saison==null){
                                echo "</div>";
                            }
                        }
                    echo '</div>';
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

        <form class="d-flex" method="post" action="search-user.php"> 
            <input class="form-control me-2" type="search" placeholder="Rechercher..." aria-label="Search" name="search">
            <button class="btn btn-outline-success" type="submit">Rechercher</button>
        </form>

        </div>
    </div>
</nav>