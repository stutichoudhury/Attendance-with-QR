<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <style>
        body {
            background-image: url(https://www.wcitv.com/wp-content/uploads/2019/04/iStock-987365514.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Helvetica, Arial, sans-serif;
            text-align: center;
            margin-top: 50px;
        }

        table {
            margin: 0 auto;
        }

        th {
            padding: 10px;
        }

        h1 {
            font-size: 36px;
            margin-top: 0;
        }

        h4 {
            font-size: 24px;
        }

        button {
            padding: 15px 30px;
            font-size: 18px;
            background-color: rgb(165, 181, 249);
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #d2a470;
        }

        a {
            color: black;
            text-decoration: none;
        }

        a:hover {
            color: rgb(128, 128, 0);
        }
    </style>
</head>
<body>
    <table border="0" width="80%" height="700px">
        <!-- Row1 -->
        <!-- <tr>
            <th colspan="5" style="font-family: Monoton; font-size: 30px;">
                Attendance with QR
            </th>
        </tr> -->

        <!-- Row2 -->
        <tr>
            <th colspan="5">
                <font color="FFEBCD" size="20">
                    <h1>Welcome to our website</h1>
                    <h4><font color="yellow" size="10">Attendance with QR</font></h4>
                    <p>
                        <font color="pink" size="10">You are</font><br><br>
                        <a href="teacher.php"><button><font color="black">Teacher</font></button></a>
                        <a href="admin.php"><button><font color="black">Admin</font></button></a>
                        <a href="process.php"><button><font color="black">Student</font></button></a> <!-- Added student button and linked it to student.php -->
                    </p>
                    <p><font color="cyan" size="10">Thanks for visiting</font></p>
                </font>
            </th>
        </tr>

        <!-- Row3 -->
        <tr>
            <th colspan="5">&nbsp;</th>
        </tr>

        <!-- Row4 -->
        <tr>
            <th colspan="5">&nbsp;</th>
        </tr>

        <!-- Row5 -->
        <tr>
            <th colspan="5">&nbsp;</th>
        </tr>

        <!-- Row6 -->
        <tr>
            <th colspan="5">&nbsp;</th>
        </tr>
    </table>
</body>
</html>
