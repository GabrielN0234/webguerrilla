CREATE DATABASE PROYECTO2_REDES2
USE PROYECTO2_REDES2
-----------------Definicion de tablas------------------------

CREATE TABLE rankingItem (
    rankingID int AUTO_INCREMENT,
    PRIMARY  KEY(rankingID),
    guerrillaID int,
    constraint guerrillaIDFK FOREIGN KEY(guerrillaID) REFERENCES guerrilla(guerrillaID),
    rank int NOT null
);
CREATE TABLE resources (
    resourcesID int AUTO_INCREMENT,
    PRIMARY  KEY(resourcesID),
    oil int NOT null,
    money_ int NOT null,
    people int NOT null
);
drop table resources
CREATE TABLE buildings (
    buildingsID int AUTO_INCREMENT,
    PRIMARY  KEY(buildingsID),
    bunker int NOT null
);
CREATE TABLE army (
    armyID int AUTO_INCREMENT,
    PRIMARY  KEY(armyID),
    assault int NOT null,
    enginner int NOT null,
    tank int NOT null
);

CREATE TABLE attackResult (
    attackResultID int AUTO_INCREMENT,
    PRIMARY  KEY(attackResultID),
    guerrillaID int,
    FOREIGN KEY(guerrillaID) REFERENCES guerrilla(guerrillaID),
    resourcesID int,
    FOREIGN KEY(resourcesID) REFERENCES resources(resourcesID),
    buildingsID int,
    FOREIGN KEY(buildingsID) REFERENCES buildings(buildingsID),
    armyID int,
    FOREIGN KEY(armyID) REFERENCES army(armyID)

);
drop table guerrilla
CREATE TABLE guerrilla (
    guerrillaID int AUTO_INCREMENT,
    PRIMARY  KEY(guerrillaID),
    nombre varchar(10) NOT null,
    email varchar(20) NOT null,
    faction varchar(20) NOT null,
    timestamp_ int,
    rank int,

    resourcesID int,
    constraint resourcesIDFK FOREIGN KEY(resourcesID) REFERENCES resources(resourcesID),

    buildingsID int,
    constraint buildingsIDFK FOREIGN KEY(buildingsID) REFERENCES buildings(buildingsID),
	armyID int,
    constraint armyIDFK FOREIGN KEY(armyID) REFERENCES army(armyID)
);

----------------------------------------delete-------------------------------------------
DELETE FROM guerrilla
WHERE guerrillaID>0;
DELETE FROM buildings
WHERE buildingsID>0;
DELETE FROM army
WHERE armyID>0;
DELETE FROM resources
WHERE resourcesID>0;

----------------------------------------Select-----------------------------------------
select * from rankingItem;
select * from resources;
select * from buildings;
select * from army;
select * from attackResult;
select * from guerrilla;
---------------------------------------------Alter----------------------------------
ALTER TABLE guerrilla AUTO_INCREMENT = 1;
ALTER TABLE army AUTO_INCREMENT = 1;
ALTER TABLE buildings AUTO_INCREMENT = 1;
ALTER TABLE resources AUTO_INCREMENT = 1;
ALTER TABLE rankingItem AUTO_INCREMENT = 1;
ALTER TABLE attackResult AUTO_INCREMENT = 1;

------------------------------inserts-------------------------------------------
insert into resources( oil,money_ ,people)values(300,300,300)
insert into resources( oil,money_ ,people)values(300,300,300)
insert into resources( oil,money_ ,people)values(300,300,300)
insert into resources( oil,money_ ,people)values(300,300,300)
insert into resources( oil,money_ ,people)values(300,300,300)
INSERT INTO buildings  (bunker)  VALUES  (0);
INSERT INTO buildings  (bunker)  VALUES  (0);
INSERT INTO buildings  (bunker)  VALUES  (0);
INSERT INTO buildings  (bunker)  VALUES  (0);
INSERT INTO buildings  (bunker)  VALUES  (0);
INSERT INTO army  (assault, enginner, tank)  VALUES  (0, 0, 0);
INSERT INTO army  (assault, enginner, tank)  VALUES  (0, 0, 0);
INSERT INTO army  (assault, enginner, tank)  VALUES  (0, 0, 0);
INSERT INTO army  (assault, enginner, tank)  VALUES  (0, 0, 0);
INSERT INTO army  (assault, enginner, tank)  VALUES  (0, 0, 0);
INSERT INTO guerrilla (nombre, email, faction, timestamp_, rank,resourcesID,buildingsID,armyID) 
	VALUES  ('arturo','arturo@gmail.com', 'mec', 1, 1,1,1,1);
INSERT INTO guerrilla (nombre, email, faction, timestamp_, rank,resourcesID,buildingsID,armyID) 
	VALUES  ('gabriel','gabriel@gmail.com', 'china', 1, 2,2,2,2);
INSERT INTO guerrilla (nombre, email, faction, timestamp_, rank,resourcesID,buildingsID,armyID) 
	VALUES  ('carlos','carlos@gmail.com', 'usmc', 1, 3,3,3,3);
INSERT INTO guerrilla (nombre, email, faction, timestamp_, rank,resourcesID,buildingsID,armyID) 
	VALUES  ('jordan','jordan@gmail.com', 'usmc', 1, 4,4,4,4);
INSERT INTO guerrilla (nombre, email, faction, timestamp_, rank,resourcesID,buildingsID,armyID) 
	VALUES  ('faubricio','faubricio@gmail.com', 'china', 1, 5,5,5,5);    

----------------------procedimientos de insercion -------------------

CREATE PROCEDURE sp_insertRankingItem
(guerrillaID int,rank int) 
INSERT INTO rankingItem
(guerrillaID,rank)  VALUES  (guerrillaID,rank);

CREATE PROCEDURE sp_insertResources
(oil int, money_ int, people int) 
INSERT INTO resources 
(oil, money_,people)  VALUES  (oil, money_,people);

CREATE PROCEDURE sp_insertBuildings
(bunker int) 
INSERT INTO buildings  
(bunker)  VALUES  (bunker);

CREATE PROCEDURE sp_insertArmy
(assault int,enginner int,tank int) 
INSERT INTO army  
(assault, enginner, tank)  VALUES  (assault, enginner, tank);

CREATE PROCEDURE sp_insertAttackResult
(guerrillaID int,resources int,buildings int,army int) 
INSERT INTO attackResult
(guerrillaID, resources, buildings,army)  VALUES  (guerrillaID, resources, buildings,army);

CREATE PROCEDURE sp_insertarGuerrilla
(nombre varchar(10), email varchar(20),faction varchar(20), timestamp_ int,rank int,resourcesID int ,buildingsID int, armyID int ) 
INSERT INTO guerrilla 
(nombre, email, faction, timestamp_, rank,resourcesID,buildingsID,armyID)  VALUES  (nombre,email, faction, timestamp_, rank,resourcesID,buildingsID,armyID);

drop procedure sp_insertarGuerrilla

-------------------procedimientos de seleccion---------------------

CREATE PROCEDURE sp_selectRankingItem
select * from rankingItem
where 1;

CREATE PROCEDURE sp_insertResources
select * from resources
where 1;

CREATE PROCEDURE sp_insertArmy
select * from army
where 1;

CREATE PROCEDURE sp_insertAttackResult
select * from attackResult
where 1;

CREATE PROCEDURE sp_insertarGuerrilla
select * from guerrilla
where 1;
-----------------------------procedure perfil----------------------------
call sp_perfil('arturo')

delimiter $$
create procedure sp_perfil(nombres varchar(10))
select a.guerrillaID, a.nombre, a.faction,  r.oil ,r.money_ ,r.people 
from guerrilla a join resources r
on a.nombre=nombres and a.guerrillaID=r.resourcesID

DELIMITER ;

-------------------------------sp_compra------------------------------------
call sp_compra(1,5,5,5,5)
drop procedure sp_compra
select * from army
select * from buildings
	delimiter $$
    create procedure sp_compra(id int,assault int,enginner int, tank int,bunker int)
		update army,buildings,resources
		set army.assault=army.assault+assault, 
        army.enginner=army.enginner+enginner,
        army.tank= army.tank+tank,
        buildings.bunker=buildings.bunker+bunker,
        resources.oil=resources.oil-(assault+enginner+tank+bunker),
        resources.money_=resources.money_-(assault+enginner+tank+bunker),
        resources.people=resources.people-(assault+enginner+tank+bunker)
        where armyID=id and buildingsID=id and resourcesID=id;
-------------------------------sp_venta------------------------------------
call sp_venta(1,25,20,1)
drop procedure sp_venta
select * from resources

	delimiter $$
    create procedure sp_venta(id int,oil int,money_ int, people int)
		update resources
		set resources.oil=resources.oil-oil, 
        resources.money_=resources.money_-money_,
        resources.people= resources.people-people
        
        where resources.resourcesID=id;        
-----------------------------procedure armamento----------------------------
call sp_armamento(3)
drop procedure sp_armamento
delimiter $$
create procedure sp_armamento(id int)
select a.guerrillaID, a.nombre, a.faction,  r.assault ,r.enginner ,r.tank, b.bunker
from guerrilla a join army r join buildings b
on a.guerrillaID=id and r.armyID=id and b.buildingsID=id

DELIMITER ;
-----------------------------procedure ataque----------------------------
call sp_ataque(3)
drop procedure sp_ataque

delimiter $$
create procedure sp_ataque(id int)
SET @total=0, @assault=0, @enginner=0, @tank=0; 
	SELECT @assault := r.assault, @enginner := r.enginner, @tank := r.tank   
	FROM guerrilla a join army r join buildings b
	ON a.guerrillaID=id and r.armyID=id and b.buildingsID=id;
	SET @total=(@assault*80)+(@enginner*30)+(@tank*500);
DELIMITER ;


------------------------------------sp_increment---------------------------------------------
    SET @total=(@assault*80)+(@enginner*30)+(@tank*500);
    
    SELECT @assault := r.assault, r.enginner, r.tank  
	FROM guerrilla a join army r join buildings b
	ON a.guerrillaID=3 and r.armyID=3 and b.buildingsID=3;
    
    CALL sp_defensa (3)
    
    
	create procedure sp_increment()
	BEGIN

	create temporary table Temp select resourcesID,oil,money_,people from resources;
	while exists(select * from Temp) do
	begin
		set rowcount=1;
		select oil=oil+300,money_=money_+300,people=people+300 from Temp;
		DROP TABLE Temp;
	END;
    end while;
END$$
	DELIMITER ;