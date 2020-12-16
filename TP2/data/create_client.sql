-- ###################################################################
-- # Application : SQL script
-- # File        : create_client.sql
-- # Revision    : fevrier 2016 (Anne-Laure Ligozat)
-- # Author      : Anne-Laure Ligozat
-- # Function    : Create the client relation
-- ###################################################################

-- If table already exists
DROP TABLE IF EXISTS client;

CREATE TABLE client(
n_client INTEGER,
nom_client VARCHAR(20),
prenom_client VARCHAR(20),
debit_client FLOAT,
CONSTRAINT pk_client PRIMARY KEY(n_client));

grant all privileges on client to tpphp;
