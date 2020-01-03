<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="GET">
    <table class="table">
    <tr>
    <td>
         employee name
    </td>
    <td>
        <input type="text" class="form-control"  name="ename">
    </td>
    </tr>
    <tr>
    <td>
        mobile no
    </td>
    <td>
         <input type="text" class="form-control" name="emob">
    </td>
    </tr>
    <tr>
    <td>
        email id
    </td>
    <td>
        <input type="text" class="form-control" name="eeid">
    </td>
    </tr>
    <tr>
    <td>
        place
    </td>
    <td>
        <input type="text" class="form-control" name="eplace">
    </td>
    ></tr>
    <tr>
    <td>
        employee code
    </td>
    <td>
        <input type="text" class="form-control" name="emp">
    </td>
    </tr>
    <tr>
    <td>
        company name
    </td>
     <td>
         <input type="text" class="form-contol" name="cmp">
     </td>
    </tr>
    <tr>
    <td>
        salary
    </td>
    <td>
        <input type="text" class="form-control" name="sal">
    </td>
    </tr>
    <tr>
    <td>
        destination
    </td>
    <td>
         <input type="text" class="form-control" name="edes">
    </td>
    </tr>
    <tr>
    <td>
         user name
    </td>
    <td>
        <input type="text" class="form-control" name="eusr">
    </td>
    </tr>
    <tr>
    <td>
        password
    </td>
    <td>
        <input type="text" class="form-control" name="epswd">
    </td>
    </tr>
    <tr>
    <td>
        conform password
    </td>
    <td>
        <input type="text" class="form-control" name="eco">
    </td>
    </tr>
    <tr>
    <td>
    </td>
    <td>
        <input type="submit" class="btn btn-danger" name="esub">
    </td>
    </tr>
    </table>
    </form>
</body>
</html>
<?php
if(isset($_GET["esub"]))
{
    $employeename=$_GET["ename"];
    echo $employeename;
    $mobileno=$_GET["emob"];
    echo $mobileno;
    $emailid=$_GET["eeid"];
    echo $emailid;
    $place=$_GET["eplace"];
    echo $place;
    $employeecode=$_GET["emp"];
    echo $employeecode;
    $companyname=$_GET["cmp"];
    echo $companyname;
    $salary=$_GET["sal"];
    echo $salary;
    $destination=$_GET["edes"];
    echo $destination;
    $username=$_GET["eusr"];
    echo $username;
    $password=$_GET["epswd"];
    echo $password;
    $conformpassword=$_GET["eco"];
    echo $conformpassword;
    $submit=$_GET["esub"];
    echo $submit;
}
?>