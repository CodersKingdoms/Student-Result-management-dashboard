<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type=text/css rel="stylesheet" href="add.css">
    <title>Document</title>
</head>

<body>
    <h1>Admin Dashboard</h1>
    <h3>ADD STUDENT Record</h3>
    <div class="great">
        <form action="connect.php" method="post">
            <fieldset>

                <label for="id"> Roll no.</label>
                <br>
                <input type="text" id="id" name="id" placeholder="Enter Id ">
                <br>
                <label for="name"> Name : </label>
                <br>
                <input type="text" id="name" name="name" placeholder="Enter Name ">
                <br>
                <label for="email"> Email : </label>
                <br>
                <input type="email" name="email" placeholder="Enter email">
                <br>
                <label for="Gender"> Gender </label>
                <br>

                <input type="radio" id="Male" name="genderr" value="Male"><label for="Male">MALE</label><br>
                <input type="radio" id="Female" name="genderr" value="Female"><label for="Female">Female</label><br>
                <input type="radio" id="Other" name="genderr" value="Other"><label for="Other">Other</label><br>
                <label for="mobile">Telephone : </label><br>
                <input type="tel" id="mobile" name="telephone" placeholder="Enter Telephone">
                <br>
                <label for type="password">Password:</label><br>
                <input type="password" id="password" name="password" placeholder="Enter Password">

                <br><br>
                <br>
                <!-- <input type="submit" value="SUBMIT"> !-->
                <button class="button-29" role="button" type="submit" value="SUBMIT">submit</button>





            </fieldset>

        </form>
        <img src="studying.png" alt="student" width="300px" height="300px">
    </div>
    <footer>
        <button class="button"><a href="main.html">LOGOUT</a></button>
        <button class="button"><a href="view.php">VIEW</a></button>
        <button class="button"><a href="addmarks.php">Add marks</a></button>
        <button class="button"><a href="admin.php">HOME</a></button>
    </footer>
</body>

</html>