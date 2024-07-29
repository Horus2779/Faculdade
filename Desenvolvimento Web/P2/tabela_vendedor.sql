CREATE DATABASE prova;
USE prova;

CREATE TABLE php (
    id int unsigned not null auto_increment,
    Nome varchar(20) not null,
    Data_nascimento date not null,
    telefone varchar(11) not null,
    CPF varchar(11) not null,
    Endereço varchar(50) not null,
    Email varchar(30) not null,
    Data_de_admissão date not null,
    Regional int not null,
    PRIMARY KEY (id)
);
