<?php
/**
 * This will set up a local database on your computer with XAMPP
 * Make sure you have the server and the db running in XAMPP
 * I left my password blank, if you have a password on yours you will have to change $password below
 */

$servername = "localhost";
$dbName = "TAdb";

$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password);

if ($conn -> connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE " . $dbName;

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully <br>";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$table1 = "CREATE TABLE CourseTable (course int, section int, profEmail varchar(200), id int NOT NULL AUTO_INCREMENT, numAssigned int, numNeeded int, primary key (id))";
$table2 = "CREATE TABLE StudentTable (email varchar(200) NOT NULL, fName varchar(50), lName varchar(50), resumeID int, password varchar (200)," .
          "transcriptID int, gpa float, courseIDs varchar(200), uid int, taB4 ENUM('Y','N'), id int NOT NULL AUTO_INCREMENT, numOfSemesters int, grad enum('undergrad','grad'), fulfilled enum('Y', 'N') default 'N', primary key (id, email))";
$table3 = "CREATE TABLE studentToCourse(studentId int, courseId varchar(200))";
$table4 = "CREATE TABLE professor(profEmail varchar(200) NOT NULL, fName varchar(50), lName varchar(50), password varchar (200), id int NOT NULL AUTO_INCREMENT, primary key (id, profEmail))";
$table5 = "CREATE TABLE professorToCourse(profEmail varchar(200) NOT NULL, courseIDs varchar(200))";
$table6 = "CREATE TABLE filesTable(id int NOT NULL AUTO_INCREMENT, email varchar(200) NOT NULL, file longblob, primary key (id,email))";

if ($conn->query($table1) === TRUE) {
    echo "Table ". $table1 . " created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($table2) === TRUE) {
    echo "Table ". $table2 . " created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($table3) === TRUE) {
    echo "Table ". $table3 . " created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($table4) === TRUE) {
    echo "Table ". $table4 . " created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($table5) === TRUE) {
    echo "Table ". $table6 . " created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error;
}

if ($conn->query($table6) === TRUE) {
    echo "Table ". $table6 . " created successfully <br>";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
