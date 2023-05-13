create database eleicoes;

use eleicoes;

create table tb_eleitor(
	titulo varchar(20) Primary Key,
    nome varchar(50),
    email varchar(50),
    senha varchar(20),
    endereco varchar(50),
    cidade varchar(25),
    estado char(2)    
);

create table tb_deputadoE(
	codigo int(5) Primary Key,
    nome varchar(50),
    partido varchar(50),
    imagem varchar(50),
    votos int(10)
);

create table tb_deputadoF(
	codigo int(4) Primary Key,
    nome varchar(50),
    partido varchar(50),
    imagem varchar(50),
    votos int(10)
);

create table tb_senador(
	codigo int(2) Primary Key,
    nome varchar(50),
    partido varchar(50),
    imagem varchar(50),
    votos int(10)
);

create table tb_governador(
	codigo int(2) Primary Key,
    nome varchar(50),
    partido varchar(50),
    imagem varchar(50),
    votos int(10)
);

create table tb_presidente(
	codigo int(2) Primary Key,
    nome varchar(50),
    partido varchar(50),
    imagem varchar(50),
    votos int(10)
);

insert into tb_presidente values(12, 'Ciro Gomes', 'PDT', 'img/ciro.png', 0);
insert into tb_presidente values (13, 'Luis Inácio Lula da Silva', 'PT', 'img/lula.png', 0);
insert into tb_presidente values (15, 'Simone Tebet', 'MDB', 'img/tebet.png', 0);
insert into tb_presidente values (22, 'Jair Messias Bolsonaro', 'PL', 'img/bolsonaro.png', 0);

insert into tb_governador values (10, 'Tarcísio', 'Republicanos', 'img/tarcisio.png', 0);
insert into tb_governador values (80, 'Carol Vigliar', 'UP', 'img/carol.png', 0);
insert into tb_governador values (45, 'Rodrigo Garcia', 'PSDB', 'img/rodrigo.png', 0);
insert into tb_governador values (21, 'Gabriel Golombo', 'PCB', 'img/gabriel.png', 0);

insert into tb_senador values (290, 'Antônio Carlos', 'PCO', 'img/antonio.png', 0);
insert into tb_senador values (287, 'Janaina Paschoal', 'PRTB', 'img/janaina,png', 0);
insert into tb_senador values (300, 'Ricardo Mellão', 'NOVO', 'img/ricardo.png', 0);
insert into tb_senador values (123, 'Aldo Rebelo', 'PDT', 'img/aldo.png', 0);

insert into tb_deputadof values (1250, 'Abner Joas Tofanelli', 'PDT', 'img/abner.png', 0);
insert into tb_deputadof values (3501, 'Abraham Bragança De Vasconcellos Weintraub', 'PMB', 'img/abraham.png', 0);
insert into tb_deputadof values (2803, 'Pastor Abraao', 'PRTB', 'img/abraao.png', 0);
insert into tb_deputadof values (4344, 'Adalberto Maluf', 'PV', 'img/adalberto.png', 0);

insert into tb_deputadoe values (40999, 'Abdul Jarour', 'PSB', 'img/abdul.png', 0);
insert into tb_deputadoe values (35735, 'Campos', 'PMB', 'img/campos.png', 0);
insert into tb_deputadoe values (10110, 'Abelardo', 'REPUBLICANOS', 'img/abelardo.png', 0);
insert into tb_deputadoe values (40321, 'Abidan Henrique', 'PSB', 'img/abidan.png', 0);