<?php
$servername ="localhost";
$username ="root";
$dbname ="Course";
$password ="";
$link = mysqli_connect($servername, $username, $password, $dbname);
$con =mysqli_select_db($link,$dbname);

// check if the database is connected to server or not.
if($con)
{
    echo "<h2 align = 'center'>Connection OK</h2>";

}
else
{    
    die("connection failed because".mysqli_connect_error());
}
?>
<html>
    <head> <title> database operation </title> </head>
    <body>
        <form name ="form1" action ="" method ="post">
            <table align="center">
                <tr>
                    <td> Enter the course name </td>
                    <td> <input type ="text" name ="username"></td>
                </tr>
                <tr>
                    <td> Enter the course id </td>
                    <td> <input type ="text" name ="id"></td>
                </tr>
                <tr>
                    <td> Enter the language used </td>
                    <td> <input type ="text" name ="language"></td>
                </tr>
                <tr>
                    <td> Enter the framework used </td>
                    <td> <input type ="text" name ="framework"></td>
                </tr>
                <tr>
                    <td colspan ="2" align ="center">
                     <input type ="submit" name ="submit1" value ="insert">
                     <input type ="submit" name ="submit2" value ="delete">
                     <input type ="submit" name ="submit3" value ="search by id">
                     <input type ="submit" name ="submit4" value ="search by name">
                     <input type ="submit" name ="submit5" value ="display">
                    </td>
                </tr>
</table>
</form>
</body>
</html>
<?php 
// PUT request simply check if the insert button is clicked, if yes put all the values into the database.
if(isset($_POST["submit1"]))
{
    mysqli_query($link, "insert into course values('$_POST[username]','$_POST[id]','$_POST[language]','$_POST[framework]')");
    echo "<h2 align = 'center'>Record inserted sucessfully</h2>";
}
// DELETE request, simply compare the id entered with the id present in the database, if they match remove that course
if(isset($_POST["submit2"]))
{
     mysqli_query($link,"delete from course where id='$_POST[id]'");
     echo "<h2 align = 'center'>Record deleted sucessfully</h2>";
}
// GET request, match the id with the course id present in the database and return the course which matches the id
if(isset($_POST["submit3"]))
{
    $res = mysqli_query($link,"select * from course where id='$_POST[id]'");
    if(mysqli_num_rows($res)==0)
    {
        echo"<h3 align = 'center'> Bhaiyya Galat ID dalut hoo</h3>";
    }
    else
    {
    echo "<table border = 1 align ='center'>";
    echo"<tr>";
    echo"<th>"; echo "name"; echo "</th>";
    echo"<th>"; echo "id"; echo "</th>";
    echo"<th>"; echo "language"; echo "</th>";
    echo"<th>"; echo "framework"; echo "</th>";
    echo "</tr>";
while($row = mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["name"]; echo"</td>";
echo "<td>"; echo $row["id"]; echo"</td>";
echo "<td>"; echo $row["language"]; echo"</td>";
echo "<td>"; echo $row["framework"]; echo"</td>";
echo"</tr>";
}
echo "</table>";
}
}
// GET request, here we will search for all courses and return a list of courses whose id matches with the entered name. 
if(isset($_POST["submit4"]))
{
    $res = mysqli_query($link,"select * from course where name='$_POST[username]'");
    if(mysqli_num_rows($res)==0)
    {
        echo"<h3 align = 'center'> Bhaiyya Galat Name dalut hoo</h3>";
    }
    else
    {
    echo "<table border = 1 align ='center'>";
    echo"<tr>";
    echo"<th>"; echo "name"; echo "</th>";
    echo"<th>"; echo "id"; echo "</th>";
    echo"<th>"; echo "language"; echo "</th>";
    echo"<th>"; echo "framework"; echo "</th>";
    echo "</tr>";
while($row = mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["name"]; echo"</td>";
echo "<td>"; echo $row["id"]; echo"</td>";
echo "<td>"; echo $row["language"]; echo"</td>";
echo "<td>"; echo $row["framework"]; echo"</td>";
echo"</tr>";
}
echo "</table>";
}
}
// GET request, simply display the values from the database.
if(isset($_POST["submit5"]))
{
    $res = mysqli_query($link, "select * from course");
    echo "<table border = 1 align ='center'>";
    echo"<tr>";
    echo"<th>"; echo "name"; echo "</th>";
    echo"<th>"; echo "id"; echo "</th>";
    echo"<th>"; echo "language"; echo "</th>";
    echo"<th>"; echo "framework"; echo "</th>";
    echo "</tr>";
    while($row = mysqli_fetch_array($res))
    {
    echo "<tr>";
    echo "<td>"; echo $row["name"]; echo"</td>";
    echo "<td>"; echo $row["id"]; echo"</td>";
    echo "<td>"; echo $row["language"]; echo"</td>";
    echo "<td>"; echo $row["framework"]; echo"</td>";
    echo"</tr>";
    }
    echo "</table>";
}
?>

                