drop procedure if exists adaptAnalytics;
delimiter $$
create procedure adaptAnalytics(annee_analytics int)
begin
	declare done int default FALSE;
	declare nombre_projet_new int default 0;

	declare id_analytics_cursor int;
	declare nom_page_cursor varchar(255);
	declare nombre_projet_cursor int;
	declare nombre_visite_cursor int;

	declare analytics_cursor cursor for select 
											analytics.id_analytics, 
											analytics.nom_page, 
											analytics.nombre_projet, 
											analytics.nombre_visite
										from analytics;

	declare continue HANDLER for not found set done = TRUE;

	-- DROP TABLE if exists tmp_analytics;
	
	CREATE TEMPORARY TABLE tmp_analytics (
		id_analytics_tmp int(11) DEFAULT NULL, 
		nom_page_tmp varchar(255) DEFAULT "", 
		nombre_projet_tmp int DEFAULT NULL, 
		nombre_visite_tmp int DEFAULT NULL
	);
	
	open analytics_cursor;

										
		read_loop: loop
			fetch analytics_cursor  into  id_analytics_cursor, 
										  nom_page_cursor, 
										  nombre_projet_cursor, 
										  nombre_visite_cursor;

			-- exit handler
			if done then        
				leave read_loop;
			end if;
			
			if nombre_projet_cursor > nombre_visite_cursor then

				SET nombre_projet_new= nombre_projet_cursor / nombre_visite_cursor;

				insert into tmp_analytics
					(id_analytics_tmp, nom_page_tmp, nombre_projet_tmp, nombre_visite_tmp)
				values
					(id_analytics_cursor, nom_page_cursor, nombre_projet_new, nombre_visite_cursor);

			end if;
			
		end loop;

	close analytics_cursor;
	
	select * from tmp_analytics;

	DROP TEMPORARY TABLE tmp_analytics;
end$$
delimiter ;

