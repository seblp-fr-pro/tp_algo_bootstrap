/*
1.	Ecrire une procédure stockée (PS) qui affiche le nom et les commentaires des animaux dans le cas où le commentaire n’est pas nul. Appeler cette procédure pour la tester.
*/
create procedure display_animals_with_non_null_comment()
	select nom, commentaires
    from animal
    where commentaires is not null;

call display_animals_with_non_null_comment;
/*
2.	Ecrire une PS qui affiche le nom, le sexe, le nom de la race et le nom de l’espèce des animaux nés en 2010.
*/
create procedure display_animals_born_in_2010()
	select animal.nom, sexe, race.nom, espece.nom_courant
    from animal, race, espece
    where date_naissance between '2010-01-01' and '2010-12-31'
    and animal.race_id = race.id
    and animal.espece_id = espece.id;
    
call display_animals_born_in_2010();

/*
3.	Ecrire une PS qui renvoie (paramètre OUT) le prix d’une race en fonction de l’id de la race (paramètre IN). Afficher ensuite le prix renvoyé par la PS.
*/
create procedure get_race_price(in p_race_id int, out p_race_price decimal(7,2))
	select prix into p_race_price
    from race
    where id = p_race_id;
    
set @race_id := 1;
call get_race_price(@race_id, @race_price);
select @race_price;

/*
4.	Ecrire une PS qui renvoie (paramètre OUT) le prix moyen des races. Afficher ensuite la moyenne.
*/
create procedure get_races_prices_average(out p_races_prices_average decimal(7,2))
	select avg(prix) into p_races_prices_average
    from race;
    
call get_races_prices_average(@races_prices_average);
select @races_prices_average;
/*
5.	Ecrire une PS qui affiche le nombre d’animaux par race qui sont d’un sexe donné (sexe en paramètre IN). Appeler ensuite cette procédure pour la tester.
*/
create procedure display_nb_races_per_gender(in p_gender char)
	select race_id, count(*)
    from animal
    where sexe = p_gender
    group by race_id;

set @gender := 'M';
call display_nb_races_per_gender(@gender);
/*
6.	Modifier la PS précédente de façon à renvoyer (paramètre OUT) le nombre d’animaux qui sont d’un sexe donné (paramètre IN) pour une race donnée (id en paramètre IN). Afficher ensuite ce nombre.
*/
create procedure get_nb_animals(in p_race_id int, in p_gender char, out p_nb_animals int)
	select count(*) into p_nb_animals
    from animal
    where sexe = p_gender
    and race_id = p_race_id;

set @race_id = 3;
set @gender = 'F';
call get_nb_animals(@race_id, @gender, @nb_animals);
select @nb_animals;
