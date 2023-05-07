DROP TABLE IF EXISTS USERS;
DROP TABLE IF EXISTS MODULES;
DROP TABLE IF EXISTS TEMPLATE;

CREATE TABLE USERS (
    username varchar(50) primary key,
    password varchar(50) not null,
    firstName varchar(50) not null,
    lastName varchar(50) not null,
    email varchar(50) unique,
    photo varchar(50) unique
);

CREATE TABLE MODULES (
    moduleName varchar(50) primary key,
    templateCount int not null default 0
);

CREATE TABLE TEMPLATE (
    id int primary key,
    templateName varchar(50),
    moduleName varchar(50) not null,
    question varchar(50) not null unique,
    answer varchar(50) not null unique,
     foreign key(moduleName) references MODULES(moduleName)
);

CREATE TABLE LOGS (
    username varchar(50),
    moduleName varchar(50),
    tamplateID int,
    askTime datetime default now(),
    nextAskTime datetime,
    foreign key(username) references USERS(username),
    foreign key(moduleName) references MODULES(moduleName),
	foreign key(tamplateID) references TEMPLATE(id)
);

CREATE INDEX USERNAME ON LOGS(username);
CREATE INDEX MODULENAME ON LOGS(moduleName);

CREATE USER 'spacerepetation'@'localhost' IDENTIFIED BY 'sprite';

grant all on spacerepetation to 'spacerepetation'@'localhost';
grant insert, update, delete, select on spacerepetation.users to 'spacerepetation'@'localhost';
grant insert, update, delete, select on spacerepetation.MODULES to 'spacerepetation'@'localhost';
grant insert, update, delete, select on spacerepetation.TEMPLATE to 'spacerepetation'@'localhost';
grant insert, select on spacerepetation.LOGS to 'spacerepetation'@'localhost';

--Procedure
