CREATE TABLE tbleuser(
    id int (10) NOT NULL auto_increment,
    FULLNAME VARCHAR(200) DEFAULT NULL,
    MOBILENO BIGINT(20) DEFAULT NULL,
    EMAIL VARCHAR(20) DEFAULT NULL,
    PASSWORD VARCHAR(20) DEFAULT NULL,
    REGDATE TIMESTAMP  DEFAULT CURRENT_TIMESTAMP()
    )