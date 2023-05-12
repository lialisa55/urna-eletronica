create database eleicoes;
use eleicoes;
create table tb_eleitor(
codigo char(4) primary key,
nome varchar(30) not null,
senha varchar(20) not null);

insert into tb_eleitor values ('2214', 'Mayara', '12345');

create table tb_candidatos(
codigo varchar(5) primary key,
nome varchar(30) not null,
partido varchar(30) not null,
caminhoIMG varchar(30) not null,
propaganda varchar(255) not null
);

insert into tb_candidatos values ('1', 'Claudio', 'Folclore', 'coelho-de-estimacao-2.jpg', 'blablablablablalbala');