DROP DATABASE IF EXISTS bugMe;
CREATE DATABASE bugMe;
USE bugMe;

CREATE TABLE Users (
  
  firstname char(35) NOT NULL default '',
  lastname char(35) NOT NULL default '',
  id int(11) NOT NULL auto_increment,
  password char(20) NOT NULL default '',
  email char(40) NOT NULL default '',
  date_joined DATE,
  PRIMARY KEY  (id)
);

CREATE TABLE Issues (

id int(10) NOT NULL auto_increment,
title char(20) NOT NULL default'',
description char(200) NOT NULL default'',
type char(20) NOT NULL default'',
priority char(20) NOT NULL default'',
assigned_to char(40) NOT NULL default'',
created_by char(40) NOT NULL default'',
created DATE,
updated DATE,
PRIMARY KEY (id)
);

INSERT INTO Users VALUES('Christopher','Robinson',621000,MD5('password123'),
'admin@bugme.com','30/10/2018'
);