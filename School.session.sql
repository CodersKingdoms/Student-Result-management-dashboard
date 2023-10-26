use student_info;
create table IF NOT EXISTS student(
    id int(11) NOT NULL AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    age int(11) NOT NULL,
    PRIMARY KEY (id)
);
insert INTO student(name, age)
VALUES('Aarushi', 18);
select *
from student;