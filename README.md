# Task 4: Web-UI-Forms

## 1. Introduction 
To do this task, we have used PHP for the frontend and the mysql for the backend. A simple form is created with 4 input fields such as, name, id, language and framework along with 5 buttons to ask the request from our database. Buttons are insert(PUT request), delete(DELETE request), search by id(GET by id), search by name(GET by name), display(GET request).

Initially we would check for the connection of our database, if the database is not connected to the server it would give error which we have handeled.

![image](https://user-images.githubusercontent.com/52740449/227535657-a5480239-7123-4f84-a1f0-3ff6f5eace03.png)


## 2. Requests

### 2.1 PUT request.

A simple query to insert all the values into our database. 

Let's test this button, initally the database would be empty. 

![image](https://user-images.githubusercontent.com/52740449/227535069-c5c25c4e-ad7d-4954-961f-cd619329431b.png)

Let's add some fields into the database. It gives back the result as Inserted Successfully.
![image](https://user-images.githubusercontent.com/52740449/227535364-9807aeb0-8097-48ba-adc3-fed44041b064.png)

Click on the display button to see the entered values. 

![image](https://user-images.githubusercontent.com/52740449/227535980-10a6abaf-7425-46da-9650-6dc576ddf469.png)

let's also check our mysql database whether our entered value are present in the database or not.

![image](https://user-images.githubusercontent.com/52740449/227536039-046c1779-0409-47ec-a21a-5824764adb92.png)

### 2.2 DELETE request

A simple query to delete all courses having same id.

Initially our db has two rows, let's delete row with id = 123, enter 123 into id field and press delete.

![image](https://user-images.githubusercontent.com/52740449/227536436-6d730f2c-2ffc-4fca-9d18-b43cbf7a37fc.png)

We have sucessfully removed the course with id 123.

![image](https://user-images.githubusercontent.com/52740449/227536629-a8df955b-2450-4519-a5cb-6dde1df7e821.png)

The row with id 123 is also removed from the database.

![image](https://user-images.githubusercontent.com/52740449/227538747-f5d8bdd0-0d3b-4c55-a7a6-4d2bee806857.png)

### 2.3 GET Request 

Let's test out the GET request for particular rows with id 456. Initially our DB contains two rows. 

![image](https://user-images.githubusercontent.com/52740449/227537191-bd314284-887b-47fd-a3b7-d605497dfc6e.png)

Enter 456 into the id field and click on Search by id button.

![image](https://user-images.githubusercontent.com/52740449/227537389-adec8fdd-94e6-4910-9ed9-421fb3d66648.png)

Let's test out for getting courses with same name.

Initially our database has 3 rows, with same name as 'my pentos'. Let's search for that course.

![image](https://user-images.githubusercontent.com/52740449/227537903-9c0ef2fe-f447-40b6-9ff1-1ec14cc1bf31.png)

Enter my pentos and click on search by name.

![image](https://user-images.githubusercontent.com/52740449/227538068-be4e3d7b-1f75-464b-97ca-0eeb65fcb336.png)


