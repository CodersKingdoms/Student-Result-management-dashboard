<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type=text/css rel="stylesheet" href="add.css">
    <title>Document</title>
    <style>
    body {
        height: 100%;
    }

    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        margin-top: 25px;
        margin-bottom: 20px;
        margin-left: 20px;
        margin-right: 20px;
        text-decoration: none;
    }

    a {
        color: blue;
        font-weight: bold;
    }

    form {
        margin-top: 50px;
        margin-left: 20px;
        margin-bottom: 32px;
        padding: 20px;
        border: 2px solid black;
    }
    </style>
</head>

<body>
    <h1>Admin Dashboard</h1>
    <h3>ADD STUDENT Record</h3>
    <div class="great">
        <form action="con1.php" method="post">


            <label for="id"> Roll no </label>
            <input type="text" id="id" name="id" placeholder="Enter Id ">
            <br>
            <label for="english"> Marks in Enshish out of 100 : </label>
            <input type="number" id="english" name="english" placeholder="Enter Marks in English">
            <br>
            <label for="Science"> Marks in Science out of 100 :</label>
            <input type="number" id="science" name="science" placeholder="Enter Marks in Science">
            <br>
            <label for="Maths"> Marks in Math out of 100 :</label>
            <input type="number" name="maths" placeholder="Enter Marks in Maths">
            <br>
            <label for="Social science"> Marks in Social Science out of 100 :</label>
            <input type="number" name="sst" placeholder="Enter Marks in sst">
            <br>
            <button class="button-29" role="button" type="submit" value="SUBMIT">submit</button>




        </FORM>
        <img src="exam-results.png" alt="student" width="300px" height="300px">
    </div>
    <button class="button"><a href="admin.php">HOME</a></button>
    <button class="button"><a href="view.php">VIEW</a></button>
    <button class="button"><a href="main.html">LOGOUT</a></button>
</body>

</html>