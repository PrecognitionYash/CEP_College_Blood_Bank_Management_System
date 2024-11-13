create database blood_donation; 
use blood_donation;

create table admin_info(
Primary key(admin_id),
admin_id int(10) NOT NULL UNIQUE AUTO_INCREMENT,
admin_username varchar(50) NOT NULL UNIQUE,
admin_name varchar(50) NOT NULL,
admin_password varchar(50) NOT NULL
);

create table donor_details(
Primary key(donor_id),
donor_id int auto_increment NOT NULL,
donor_name varchar(50) NOT NULL,
donor_age int(60) NOT NULL,
donor_number varchar(10) NOT NULL,
donor_gender varchar(10) NOT NULL,
donor_blood varchar(10) NOT NULL,
donor_address varchar(100) NOT NULL
);

insert into admin_info(admin_name,admin_username,admin_password)
values("yash","yash",1234);

create table blood(
primary key(blood_id),
blood_id int auto_increment Not Null,
blood_group varchar(10) NOT NULL
);

insert into blood(blood_group)
values("B+"),("B-"),("A+"),("O+"),("O-"),("A-"),("AB+"),("AB-");
   


