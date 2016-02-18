#SOURCE 'Filepath\file.sql'
drop database ins_DB;
create database ins_DB;
use ins_DB;

#drop table if exists ins_reg;
create table ins_reg(id char(8),name char(20),phone bigint(10) ,email char(50) Primary key  ,college char(50));