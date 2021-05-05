select * from student;

select * from student order by student_id DESC;

select student_id ,name from student;

show tables;

CREATE TABLE employee (
  emp_id INT PRIMARY KEY,
  first_name VARCHAR(40),
  last_name VARCHAR(40),
  birth_day DATE,
  sex VARCHAR(1),
  salary INT,
  super_id INT,
  branch_id INT
);

CREATE TABLE branch (
  branch_id INT PRIMARY KEY,
  branch_name VARCHAR(40),
  mgr_id INT,
  mgr_start_date DATE,
  FOREIGN KEY(mgr_id) REFERENCES employee(emp_id) ON DELETE SET NULL
);

ALTER TABLE employee
ADD FOREIGN KEY(branch_id)
REFERENCES branch(branch_id)
ON DELETE SET NULL;

ALTER TABLE employee
ADD FOREIGN KEY(super_id)
REFERENCES employee(emp_id)
ON DELETE SET NULL;

CREATE TABLE client (
  client_id INT PRIMARY KEY,
  client_name VARCHAR(40),
  branch_id INT,
  FOREIGN KEY(branch_id) REFERENCES branch(branch_id) ON DELETE SET NULL
);

CREATE TABLE works_with (
  emp_id INT,
  client_id INT,
  total_sales INT,
  PRIMARY KEY(emp_id, client_id),
  FOREIGN KEY(emp_id) REFERENCES employee(emp_id) ON DELETE CASCADE,
  FOREIGN KEY(client_id) REFERENCES client(client_id) ON DELETE CASCADE
);

CREATE TABLE branch_supplier (
  branch_id INT,
  supplier_name VARCHAR(40),
  supply_type VARCHAR(40),
  PRIMARY KEY(branch_id, supplier_name),
  FOREIGN KEY(branch_id) REFERENCES branch(branch_id) ON DELETE CASCADE
);

-- Corporate
INSERT INTO employee VALUES(200, 'David2', 'Wallace2', '1967-11-17', 'M', 450000, NULL, NULL);

INSERT INTO branch VALUES(1, 'Corporate', 100, '2006-02-09');

UPDATE employee
SET branch_id = 1
WHERE emp_id = 100;

INSERT INTO employee VALUES(101, 'Jan', 'Levinson', '1961-05-11', 'F', 110000, 100, 1);

-- Scranton
INSERT INTO employee VALUES(102, 'Michael', 'Scott', '1964-03-15', 'M', 75000, 100, NULL);

INSERT INTO branch VALUES(2, 'Scranton', 102, '1992-04-06');

UPDATE employee
SET branch_id = 2
WHERE emp_id = 102;

INSERT INTO employee VALUES(103, 'Angela', 'Martin', '1971-06-25', 'F', 63000, 102, 2);
INSERT INTO employee VALUES(104, 'Kelly', 'Kapoor', '1980-02-05', 'F', 55000, 102, 2);
INSERT INTO employee VALUES(105, 'Stanley', 'Hudson', '1958-02-19', 'M', 69000, 102, 2);

-- Stamford
INSERT INTO employee VALUES(106, 'Josh', 'Porter', '1969-09-05', 'M', 78000, 100, NULL);

INSERT INTO branch VALUES(3, 'Stamford', 106, '1998-02-13');

UPDATE employee
SET branch_id = 3
WHERE emp_id = 106;

INSERT INTO employee VALUES(107, 'Andy', 'Bernard', '1973-07-22', 'M', 65000, 106, 3);
INSERT INTO employee VALUES(108, 'Jim', 'Halpert', '1978-10-01', 'M', 71000, 106, 3);


-- BRANCH SUPPLIER
INSERT INTO branch_supplier VALUES(2, 'Hammer Mill', 'Paper');
INSERT INTO branch_supplier VALUES(2, 'Uni-ball', 'Writing Utensils');
INSERT INTO branch_supplier VALUES(3, 'Patriot Paper', 'Paper');
INSERT INTO branch_supplier VALUES(2, 'J.T. Forms & Labels', 'Custom Forms');
INSERT INTO branch_supplier VALUES(3, 'Uni-ball', 'Writing Utensils');
INSERT INTO branch_supplier VALUES(3, 'Hammer Mill', 'Paper');
INSERT INTO branch_supplier VALUES(3, 'Stamford Lables', 'Custom Forms');

-- CLIENT
INSERT INTO client VALUES(400, 'Dunmore Highschool', 2);
INSERT INTO client VALUES(401, 'Lackawana Country', 2);
INSERT INTO client VALUES(402, 'FedEx', 3);
INSERT INTO client VALUES(403, 'John Daly Law, LLC', 3);
INSERT INTO client VALUES(404, 'Scranton Whitepages', 2);
INSERT INTO client VALUES(405, 'Times Newspaper', 3);
INSERT INTO client VALUES(406, 'FedEx', 2);

-- WORKS_WITH
INSERT INTO works_with VALUES(105, 400, 55000);
INSERT INTO works_with VALUES(102, 401, 267000);
INSERT INTO works_with VALUES(108, 402, 22500);
INSERT INTO works_with VALUES(107, 403, 5000);
INSERT INTO works_with VALUES(108, 403, 12000);
INSERT INTO works_with VALUES(105, 404, 33000);
INSERT INTO works_with VALUES(107, 405, 26000);
INSERT INTO works_with VALUES(102, 406, 15000);
INSERT INTO works_with VALUES(105, 406, 130000);


select * from works_with;
select * from client;
select * from BRANCH SUPPLIER;
select * from employee;

INSERT INTO student VALUES('Jack', 'Biology');
INSERT INTO student VALUES('Kate', 'Sociology');
INSERT INTO student(name,major) VALUES( 'Jack','Biology');
INSERT INTO student(name,major) VALUES( 'Kate','Sociology');
INSERT INTO student(name,major) VALUES( 'Jack','Biology');
INSERT INTO student(name,major) VALUES( 'Mike','CS');
INSERT INTO student VALUES( 'Jack', 'Biology');
INSERT INTO student VALUES( 'Mike', 'Computer Science');

update student set major = 'GP' where student_id =4;
update student set major = 'GP' where major like "G%";#所有G开头的字符串
select * from student;
UPDATE test.student
	SET major='geometry'
	WHERE student_id=1;
UPDATE test.student
	SET major='George'
	WHERE student_id=2;
UPDATE test.student SET major='geography'
	WHERE student_id=3;
UPDATE test.student
	SET major='Georgia'
	WHERE student_id=4;
UPDATE test.student
	SET major='geographical'
	WHERE student_id=5;
UPDATE test.student
	SET major='geology'
	WHERE student_id=6;
UPDATE test.student【【
	SET major='geometrical'
	WHERE student_id=7;
UPDATE test.student
	SET major='geotechnical'
	WHERE student_id=8;
select * from student;#
select * from student where major like "G%";#
select * from student where major like "%y%";#
select * from student where major like "%log%";#
select * from student where major like "%ic%";#
select * from student where major like "__";#两个字符
select * from branch_supplier;
select * from client;
select * from works_with;
select * from branch_supplier;
select * from employee;
select * from employee order by salary desc;
select * from employee order by first_name,sex,last_name;
#重全名
select first_name as forname,last_name as surname from employee;
select distinct sex from employee;
select distinct first_name from employee;
select count(first_name) from employee;
select sum(salary) from employee;
select avg(salary) from employee;
select count(emp_id) from employee where sex="f" and birth_day >7971-01-01;
select * from employee where sex="f" and birth_day >7971-01-01;
select sum(total_sales),emp_id from works_with group by emp_id;
select sum(total_sales),client_id from works_with group by client_id;
select * from client where client_name like "%LLC";
select * from client where client_name like "%INC";
select * from client where client_name like "%INC";
select * from branch_supplier;
select * from branch_supplier where supplier_name like '%labl%';
select * from employee where birth_day like '____-10%';#10月出生的
select * from employee where birth_day like '196_-%';#196X出生的



select * from client;
select * from works_with;
select * from branch;
select * from branch_supplier;
select * from employee;
desc client;
show create table client;
desc works_with;
show create table works_with;
desc branch;
show create table branch;
desc branch_supplier;
show create table branch_supplier;
desc employee;
show create table employee;

FOREIGN KEY*******************

on DELETE*******************

