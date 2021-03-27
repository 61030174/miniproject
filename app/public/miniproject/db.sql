-- CREATE DATABASE
CREATE DATABASE MyNotes;

-- CREATE TABLE
CREATE TABLE Notes (
  Note_ID INT NOT NULL,
  Date TIMESTAMP NOT NULL,
  Note_Name VARCHAR(100) NOT NULL,
  Detail VARCHAR(2000) NOT NULL,
  PRIMARY KEY (Note_ID)
)Engine=InnoDB;

-- INSERT
INSERT INTO Notes VALUES('101','2021/03/25 00:00:00','Test','ทดลองเขียนโน้ตประมาณหนึ่งบรรทัด');
INSERT INTO Notes VALUES('102','2021/03/25 01:00:00','Test2','ทดลองเขียนโน้ตประมาณหนึ่งบรรทัดครั้งที่2');
