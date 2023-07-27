DROP DATABASE IF EXISTS Bus_Shcheduling_Booking_System;
CREATE DATABASE IF NOT EXISTS Bus_Shcheduling_Booking_System;

USE Bus_Shcheduling_Booking_System;
/*Table passenger*/
 
  CREATE TABLE IF NOT EXISTS Passenger(
  P_Id varchar(15) NOT NULL,
  F_Name varchar(40) NOT NULL,
  L_Name varchar(40) NOT NULL,
  Address varchar(50) NOT NULL,
  NIC varchar(12) NOT NULL,
  DOB date NOT NULL,
  Age int,
  Email varchar(25) NOT NULL,
  Password varchar(12) NOT NULL,
  CONSTRAINT Passenger_pk PRIMARY KEY (P_Id)
  );



  /*Table Passenger Phone*/
  CREATE TABLE Passenger_Mobile(
  P_Id varchar(15) NOT NULL,
  P_Mobile_No int NOT NULL,

  CONSTRAINT Passenger_Mobile_No_PK PRIMARY KEY (P_Mobile_NO),
  CONSTRAINT Passenger_Mobile_No_FK FOREIGN KEY (P_Id) REFERENCES Passenger(P_Id) );







  /*Table Admin*/
  CREATE TABLE Administrator(
  Admin_Id varchar(15) NOT NULL,
  F_Name varchar(40) NOT NULL,
  L_Name varchar(40) NOT NULL,
  Admin_Password varchar(12) NOT NULL,
  Email varchar(25) NOT NULL,

  CONSTRAINT Administrator_PK PRIMARY KEY (Admin_Id)
  );





  /*Admin phone numbers Table*/
  CREATE TABLE Administrator_Mobile_No(

  Admin_Id varchar(15) NOT NULL,
  Administrator_Mobile_No int NOT NULL,

  CONSTRAINT Administrator_Mobile_No_PK PRIMARY KEY (Admin_Id),
  CONSTRAINT Administrator_Mobile_No_Fk FOREIGN KEY (Admin_Id) REFERENCES Administrator(Admin_Id) 
  );




/*Table Route*/
CREATE TABLE Route(
    Route_No varchar(10) NOT NULL,
	Route_Name varchar(50) NOT NULL,
	P_Id varchar(15),

	CONSTRAINT Route_No_PK PRIMARY KEY (Route_No),
	CONSTRAINT Route_Fk FOREIGN KEY (P_Id) REFERENCES Passenger (P_Id));







/*Table Booking*/
CREATE TABLE Booking (
    Booking_Id varchar(15) NOT NULL,
	Start_Point varchar(20) NOT NULL,
	End_Point varchar (20) Not Null,
	Date date,
	P_Id varchar(15),
	Route_No varchar(10),
	
	CONSTRAINT Booking_Pk PRIMARY KEY (Booking_Id),
	CONSTRAINT Booking_Fk1 FOREIGN KEY(P_Id) REFERENCES Passenger(P_Id),
	CONSTRAINT Booking_Fk2 FOREIGN KEY(Route_No) REFERENCES Route(Route_No));






	/*Table Ticket*/
	CREATE TABLE Ticket (
	Ticket_Id varchar(15) NOT NULL,
	Ticket_Price varchar (15) NOT NULL,
	Qunatity int NOT NULL,
	Booking_Id varchar (15),

	CONSTRAINT Ticket_Pk PRIMARY KEY(Ticket_Id),
	CONSTRAINT Ticket_Fk FOREIGN KEY(Booking_Id) REFERENCES Booking(Booking_Id));







	/*Table Payment*/
	CREATE TABLE Payment (
	Payment_Id varchar (10) NOT NULL,
	Payment_amount varchar(10) NOT NUll,
	Payment_Type varchar(20) NOT NULL,
	Payment_date date,
	Admin_Id varchar(15),
	Booking_Id varchar(15),

	CONSTRAINT Payment_PK PRIMARY KEY (Payment_Id),
	CONSTRAINT Payment_FK1 FOREIGN KEY (Admin_Id) REFERENCES Administrator (Admin_Id),
	CONSTRAINT Payment_FK2 FOREIGN KEY (Booking_Id) REFERENCES  Booking (Booking_Id));






	/*Table Bus*/
	CREATE TABLE Bus(
	Bus_Id varchar (15) NOT NULL,
	Bus_No varchar (15) NOT NULL,
	Route_No varchar(10),

	CONSTRAINT Bus_PK PRIMARY KEY (Bus_Id),
	CONSTRAINT Bus_FK FOREIGN KEY (Route_No) REFERENCES Route(Route_No));





	/*Table Feedback*/
	CREATE TABLE Feedback(
	Feedback_No int NOT NULL,
	Message text,
	P_Id varchar(15),

	CONSTRAINT Feedback_PK PRIMARY KEY (Feedback_No),
	CONSTRAINT Feedback_FK FOREIGN KEY (P_ID) REFERENCES Passenger (P_Id));

	/* insert data */
    /*insert values for Passenger Table */

	insert into Passenger values ('P001' , 'Imesh','Gamage','Galle', '991078567V','1999-02-23',
	'24','imeshgamage@gmail.com','imesha@12'),('P002' , 'Ravindu', 'dilshan','Maharagama','200023456V','2000-05-02',
	'23','ravindudil@gmail.com','rd%237'),('P003', 'Kavindu','Perera', 'Malabe','2001672589V','2001-07-18','22',
	'kavindugamage@gmal.com','kavi@78'),('P004','kaveesha','Shehani','Matara','876078278V','1987-09-27','36', 
	'kaveeshasheha56@gmail.com' ,'CMB#555'),('P005','Supun','Fernando', 'Kottawa','200223678V', '2002-10-12','21',
	'supunfer123@gmail.com' ,'Fernando@12'),('P006','Dilani','Niluka', 'Kegalle','823456789V', '1982-03-07','39',
	'dilaniniluka@gmail.com','niluka#78'),('P007','Naveen','Udara','Panadura','973456789V' ,'1997-11-10','26',
	'naveenudara123@gmai.com','NaveeN%12'),('P008','Oliver','Queen','Canada','198556782345','1985-09-08','38',
	'oliverqueen45@gmail.com','oliverQ@1'),('P009','Anne','Marie','Australia','9723678946' ,'1997-04-13','26',
    'annemarie@gmail.com','annemarie97'),('P010','Mohommad','Jed','Bangladesh','20105631458' ,'1995-12-01','28',
	'mohommadajed@gmail.com','MJED@1');



	/*insert values for admin table*/

	insert into Administrator values ('01', 'Shehan','Nimsara','ADP123!','shehannimsara10@gmail.com');

	
	/*insert values for Route table*/

	insert into Route values ('R0138','Kottawa-pettah','P001'),('R0993','Maharagama-malabe','P002'),('R0199','Makumbara-Matara','P003'),('R0170','Kaduwela-Kollupitiya','P004'),('R0174','Borella-Rajagiriya','P005');

   /*insert values for booking table*/

   insert into Booking values ('BID001','Maharagama','Malabe','2023-05-25','P005','R0199'),('BID002','Kaduwela','Kollupitiya','2023-05-15','P002','R0170'),('BID003','Makumbara','Matara','2023-06-01','P006','R0199'),('BID004','Borella','Rajagiriya','2023-06-10','P003','R0174'),('BID005','Kottawa','Pettah','2023-06-25','P004','R0138');
   
   /*insert values for Ticket table*/
   insert into Ticket values ('TID001','900','02','BID004'),('TID002','600','01','BID005'),('TID003','1500','01','BID003'),('TID004','550','03','BID001'),('TID005','550','01','BID002');

   /*insert values for bus table*/
   
   insert into bus values ('BUSID001','NB1002','R0138'),('BUSID002','NB1212','R0993'),('BUSID003','NB7085','R0170'),('BUSID004','NB5078','R0174'),('BUSID005','NB1456','R0199');

   /*insert values for Payment*/
   insert into Payment values ('PID001','1800','Online','2023-05-20','01','BID004'),('PID002','600','Credit/Debit','2023-06-05', '01','BID005'),('PID003','1500','Credit/Debit','2023-05-26','01','BID003'),('PID004', '1650','Online','2023-05-20','01','BID001'),('PID005','550','cash','2023-05-10','01','BID002');
   

   /*insert values for Feedback table*/
   insert into Feedback values ('01','The website is Amazing ,it is easy to navigate
   and had lot of options to choose from.','P004'),('02','I recently used easyway.lk to book a ticket and 
   I was pleasantly surprised by the experience.','P001'),('03','I was able to find a bus that fit my schedules 
   and budget and booking process was quick.','P003'),('04','I had a great experience with easyway.lk and
   would definitely use it again in future.','P005'),('05','My experience with easyway.lk has been outstanding',
   'P002');

   /*insert values Passenger_Mobile_No Table*/

   insert into Passenger_Mobile values ('P001','0709765432'),('P002','0774567890'),('P003','0781256799'),('P004','0726723451'),('P005','0752345236'),('P006','0746789034'),('P007','0785432876'),('P008','250555019'),('P009','614123458'),('P010','67894567');


   /*insert values Administrator_Mobile_No*/

   insert into Administrator_Mobile_No values ('01','0771234562');

   SELECT * FROM Passenger;
   SELECT * FROM Administrator;
   SELECT* FROM Route;
   SELECT* FROM Booking;
   SELECT* FROM Ticket ;
   SELECT* FROM Bus;
   SELECT* FROM Payment;
   SELECT* FROM Feedback;
   SELECT* FROM Passenger_Mobile;
   SELECT* FROM Administrator_Mobile_No;
