drop procedure if exists getTemoignagesNotValided;
delimiter $$
create procedure getTemoignagesNotValided()
begin
	declare done int default FALSE;

	declare id_temoignage_cursor int;
	declare accroche_temoignage_cursor varchar(150);
	declare date_temoignage_cursor datetime;

	declare temoignage_cursor cursor for select 
											temoignage.id_temoignage, 
											temoignage.accroche_temoignage, 
											temoignage.date_temoignage
											from temoignage
											where temoignage.validation_temoignage=0
											order by temoignage.date_temoignage;


	declare continue HANDLER for not found set done = TRUE;
	
	CREATE TABLE tmp_temoignage (
		id_temoignage_tmp int(11) DEFAULT NULL, 
		accroche_temoignage_tmp varchar(150) DEFAULT NULL, 
		date_temoignage_tmp datetime
	);
	
	open temoignage_cursor;
										
		read_loop: loop
			fetch temoignage_cursor  into  id_temoignage_cursor, 
											accroche_temoignage_cursor, 
											date_temoignage_cursor;

			if done then        
				leave read_loop;
			end if;
			
			insert into tmp_temoignage
				(id_temoignage_tmp, accroche_temoignage_tmp, date_temoignage_tmp)
			values
				(id_temoignage_cursor, accroche_temoignage_cursor, date_temoignage_cursor);
		
		end loop;

	close temoignage_cursor;
	
end$$
delimiter ;



drop procedure if exists getTemoignagesValided;
delimiter $$
create procedure getTemoignagesValided()
begin
	declare done int default FALSE;

	declare id_temoignage_cursor int;
	declare accroche_temoignage_cursor varchar(150);
	declare date_temoignage_cursor datetime;

	declare temoignage_cursor cursor for select 
											temoignage.id_temoignage, 
											temoignage.accroche_temoignage, 
											temoignage.date_temoignage
											from temoignage
											where temoignage.validation_temoignage=1
											order by temoignage.date_temoignage desc;


	declare continue HANDLER for not found set done = TRUE;
	
	open temoignage_cursor;
										
		read_loop: loop
			fetch temoignage_cursor  into  id_temoignage_cursor, 
											accroche_temoignage_cursor, 
											date_temoignage_cursor;

			if done then        
				leave read_loop;
			end if;
			
			insert into tmp_temoignage
				(id_temoignage_tmp, accroche_temoignage_tmp, date_temoignage_tmp)
			values
				(id_temoignage_cursor, accroche_temoignage_cursor, date_temoignage_cursor);
		
		end loop;

	close temoignage_cursor;


	select * from tmp_temoignage;

	DROP TABLE tmp_temoignage;
end$$
delimiter ;



