<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="admin.css">
    <title>Document</title>
    <style>
    #btn {

        background-color: rgba(121, 9, 68, 1);
        color: rgba(0, 212, 255, 1);
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 5px;
        margin-bottom: 5px;
        margin-left: 20px;
        margin-right: 20px;
        text-decoration: none;
        width: 120px;
        height: 70px;
        border-radius: 50px;
    }
    </style>
</head>

<body>
    <h1>
        <img src="employee-management.png" alt="logo" width="80px" height="80px">
        Admin Dashboard
    </h1>
    <center>
        <div class="det">
            <button onclick="location.href='add.php'">Add Student</button>
            <button onclick="location.href='addmarks.php'">Modify Result</button>
            <button onclick="location.href='view.php'">View Student</button>
        </div>
    </center>
    <footer>
        <button onclick="location.href='main.html'" id="btn">LOGOUT</button>
    </footer>
</body>

</html>