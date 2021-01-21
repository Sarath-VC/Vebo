DROP TABLE aminities;

CREATE TABLE `aminities` (
  `a_id` int(6) NOT NULL AUTO_INCREMENT,
  `a_type` varchar(50) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_image` longblob NOT NULL,
  `dept_id` varchar(50) NOT NULL,
  `aflag` int(1) NOT NULL,
  `v_id` int(5) NOT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO aminities VALUES("1","Projector","Espone","\0\0\0\0\0\0\0\0\0�\0\06\0\0\0\0\0\0\0\0�\0\01\0\0\0\0\0\0\0 \0�?\0\00\0\0\0\0\0(\0\0�o\0\0\0\0\0�\0\0�p\0\0  \0\0\0�\0\0�r\0\000\0\0\0h\0\0�u\0\0\0\0\0\0h\0\0|\0\0\0\0\0\0�\0\0w�\0\0  \0\0\0\0�\0\0?�\0\000\0\0\0\0�\0\0�\0\0\0\0\0 \0h\0\0��\0\0\0\0\0 \0�	\0\0��\0\0  \0\0\0 \0�\0\0�\0\000\0\0\0 \0�%\0\0\'�\0\0@@\0\0\0 \0(B\0\0��\0\0HH\0\0\0 \0�T\0\0�%\0``\0\0\0 \0��\0\0z\0��\0\0\0 \0(\0\'\0�PNG



DROP TABLE bookingstatus;

CREATE TABLE `bookingstatus` (
  `e_id` int(5) NOT NULL AUTO_INCREMENT,
  `ref_no` varchar(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `start_time` time NOT NULL,
  `finish_date` date NOT NULL,
  `finish_time` time NOT NULL,
  `purpose` varchar(1000) NOT NULL,
  `b_status` varchar(50) DEFAULT NULL,
  `cell_id` varchar(10) NOT NULL,
  `user_id` int(50) NOT NULL,
  `bflag` int(1) NOT NULL,
  `reminder` varchar(50) NOT NULL,
  PRIMARY KEY (`e_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO bookingstatus VALUES("1","vebeve1505969976","testq","2017-09-21","09:09:00","2017-09-21","09:09:00","testtt","Completed","1505969976","316","1","No Reminder");



DROP TABLE cart;

CREATE TABLE `cart` (
  `cart_id` int(5) NOT NULL AUTO_INCREMENT,
  `cart_no` int(10) NOT NULL,
  `v_id` int(5) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO cart VALUES("1","192230224","1");



DROP TABLE cell;

CREATE TABLE `cell` (
  `c_id` int(10) NOT NULL AUTO_INCREMENT,
  `cell_id` varchar(10) NOT NULL,
  `v_id` int(5) NOT NULL,
  `a_id` int(6) NOT NULL,
  `cell_status` varchar(25) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO cell VALUES("1","1505969976","4","0","Completed");



DROP TABLE department;

CREATE TABLE `department` (
  `dept_id` int(50) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(50) NOT NULL,
  `dflag` int(1) NOT NULL,
  PRIMARY KEY (`dept_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

INSERT INTO department VALUES("1","CS","1");
INSERT INTO department VALUES("2","EC","1");
INSERT INTO department VALUES("3","EI","1");
INSERT INTO department VALUES("4","IEEE","1");
INSERT INTO department VALUES("5","IT","1");
INSERT INTO department VALUES("6","CIVIL","1");
INSERT INTO department VALUES("7","MCA","1");



DROP TABLE executive;

CREATE TABLE `executive` (
  `exe_id` int(50) NOT NULL AUTO_INCREMENT,
  `exe_fname` varchar(50) DEFAULT NULL,
  `exe_lname` varchar(50) DEFAULT NULL,
  `exe_dob` date DEFAULT NULL,
  `exe_gender` varchar(50) DEFAULT NULL,
  `exe_address` varchar(50) DEFAULT NULL,
  `exe_email` varchar(50) DEFAULT NULL,
  `exe_contact` bigint(50) DEFAULT NULL,
  `exe_image` longblob,
  `dept_id` varchar(50) DEFAULT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `eflag` int(1) NOT NULL,
  PRIMARY KEY (`exe_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO executive VALUES("3","Prasanth","TK","1973-10-12","Male","TK house","prasanthtk@gmail.com","9876543210","\0\0\0\0\0\0\0\0\0�\0\06\0\0\0\0\0\0\0\0�\0\01\0\0\0\0\0\0\0 \0�?\0\00\0\0\0\0\0(\0\0�o\0\0\0\0\0�\0\0�p\0\0  \0\0\0�\0\0�r\0\000\0\0\0h\0\0�u\0\0\0\0\0\0h\0\0|\0\0\0\0\0\0�\0\0w�\0\0  \0\0\0\0�\0\0?�\0\000\0\0\0\0�\0\0�\0\0\0\0\0 \0h\0\0��\0\0\0\0\0 \0�	\0\0��\0\0  \0\0\0 \0�\0\0�\0\000\0\0\0 \0�%\0\0\'�\0\0@@\0\0\0 \0(B\0\0��\0\0HH\0\0\0 \0�T\0\0�%\0``\0\0\0 \0��\0\0z\0��\0\0\0 \0(\0\'\0�PNG



DROP TABLE feedback;

CREATE TABLE `feedback` (
  `feed_id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `fflag` int(1) NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE log;

CREATE TABLE `log` (
  `logid` int(5) NOT NULL AUTO_INCREMENT,
  `content` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `user_id` int(50) NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE login;

CREATE TABLE `login` (
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `lflag` int(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=323 DEFAULT CHARSET=latin1;

INSERT INTO login VALUES("1","admin","newadmin","ADMIN","2");
INSERT INTO login VALUES("315","PrasanthTK","prasanth","BA","1");
INSERT INTO login VALUES("316","HanaS","hanasannu","CR","1");
INSERT INTO login VALUES("317","ShaheerM","Pass14word","CR","1");
INSERT INTO login VALUES("318","sarathvc","Pass79word","AS","0");
INSERT INTO login VALUES("319","sasi","sasiPass68word","FAC","0");
INSERT INTO login VALUES("320","sarathvc","sarathvcsaps86wdor","AS","0");
INSERT INTO login VALUES("321","sarathvc","sarathvcsaps9wdor","CH","1");
INSERT INTO login VALUES("322","sarathvcs","sarathvcssaps56wdor","EC","1");



DROP TABLE map;

CREATE TABLE `map` (
  `map_id` int(5) NOT NULL AUTO_INCREMENT,
  `x` int(5) NOT NULL,
  `y` int(5) NOT NULL,
  `width` int(5) NOT NULL,
  `height` int(5) NOT NULL,
  `v_id` int(5) NOT NULL,
  `dept_id` int(50) NOT NULL,
  `description` varchar(20) NOT NULL,
  `mflag` int(1) NOT NULL,
  PRIMARY KEY (`map_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

INSERT INTO map VALUES("5","50","243","280","158","2","7","Third Floor","1");



DROP TABLE student;

CREATE TABLE `student` (
  `stud_id` int(50) NOT NULL AUTO_INCREMENT,
  `stud_fname` varchar(50) DEFAULT NULL,
  `stud_lname` varchar(50) DEFAULT NULL,
  `stud_year` varchar(50) DEFAULT NULL,
  `stud_gender` varchar(50) DEFAULT NULL,
  `stud_dob` date DEFAULT NULL,
  `stud_address` varchar(50) DEFAULT NULL,
  `stud_email` varchar(50) NOT NULL,
  `stud_contact` bigint(12) NOT NULL,
  `stud_image` longblob,
  `dept_id` varchar(50) NOT NULL,
  `user_id` varchar(50) NOT NULL,
  `sflag` int(1) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO student VALUES("3","Hana","S","","Female","1973-10-12","blaaaaaa","hanas.annu@gmail.com","9876543211","\0\0\0\0\0\0\0\0\0�\0\06\0\0\0\0\0\0\0\0�\0\01\0\0\0\0\0\0\0 \0�?\0\00\0\0\0\0\0(\0\0�o\0\0\0\0\0�\0\0�p\0\0  \0\0\0�\0\0�r\0\000\0\0\0h\0\0�u\0\0\0\0\0\0h\0\0|\0\0\0\0\0\0�\0\0w�\0\0  \0\0\0\0�\0\0?�\0\000\0\0\0\0�\0\0�\0\0\0\0\0 \0h\0\0��\0\0\0\0\0 \0�	\0\0��\0\0  \0\0\0 \0�\0\0�\0\000\0\0\0 \0�%\0\0\'�\0\0@@\0\0\0 \0(B\0\0��\0\0HH\0\0\0 \0�T\0\0�%\0``\0\0\0 \0��\0\0z\0��\0\0\0 \0(\0\'\0�PNG



DROP TABLE venue;

CREATE TABLE `venue` (
  `v_id` int(5) NOT NULL AUTO_INCREMENT,
  `v_name` varchar(50) NOT NULL,
  `v_type` varchar(50) NOT NULL,
  `v_capacity` int(50) NOT NULL,
  `v_description` varchar(1000) NOT NULL,
  `v_image` longblob NOT NULL,
  `dept_id` int(50) NOT NULL,
  `v_frontimage` longblob,
  `v_audienceimage` longblob,
  `vflag` int(1) NOT NULL,
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO venue VALUES("1","Ramanujan hall","Seminar Hall","150"," Seminar hall in d block","�PNG
INSERT INTO venue VALUES("2","D101","Lab","60","Software hub 1","\0\0\0\0\0\0\0\0\0�\0\06\0\0\0\0\0\0\0\0�\0\01\0\0\0\0\0\0\0 \0�?\0\00\0\0\0\0\0(\0\0�o\0\0\0\0\0�\0\0�p\0\0  \0\0\0�\0\0�r\0\000\0\0\0h\0\0�u\0\0\0\0\0\0h\0\0|\0\0\0\0\0\0�\0\0w�\0\0  \0\0\0\0�\0\0?�\0\000\0\0\0\0�\0\0�\0\0\0\0\0 \0h\0\0��\0\0\0\0\0 \0�	\0\0��\0\0  \0\0\0 \0�\0\0�\0\000\0\0\0 \0�%\0\0\'�\0\0@@\0\0\0 \0(B\0\0��\0\0HH\0\0\0 \0�T\0\0�%\0``\0\0\0 \0��\0\0z\0��\0\0\0 \0(\0\'\0�PNG
INSERT INTO venue VALUES("3","D102","Class Room","120","BLAA","\0\0\0\0\0\0\0\0\0�\0\06\0\0\0\0\0\0\0\0�\0\01\0\0\0\0\0\0\0 \0�?\0\00\0\0\0\0\0(\0\0�o\0\0\0\0\0�\0\0�p\0\0  \0\0\0�\0\0�r\0\000\0\0\0h\0\0�u\0\0\0\0\0\0h\0\0|\0\0\0\0\0\0�\0\0w�\0\0  \0\0\0\0�\0\0?�\0\000\0\0\0\0�\0\0�\0\0\0\0\0 \0h\0\0��\0\0\0\0\0 \0�	\0\0��\0\0  \0\0\0 \0�\0\0�\0\000\0\0\0 \0�%\0\0\'�\0\0@@\0\0\0 \0(B\0\0��\0\0HH\0\0\0 \0�T\0\0�%\0``\0\0\0 \0��\0\0z\0��\0\0\0 \0(\0\'\0�PNG