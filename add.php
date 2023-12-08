<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST["sub"])) {
    include "conn.php";
    $url = mysqli_real_escape_string($con, $_POST["url"]);
    $des = mysqli_real_escape_string($con, $_POST["description"]);
    $sql = "INSERT INTO `imgs` (`url`, `description`) VALUES ('$url', '$des')";
    if (mysqli_query($con, $sql)) {
      echo "<p style='text-align: center; color: green;'>تم رفع الصورة بنجاح</p>";
    }
  }
} ?>
<html dir="rtl" >
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        h1 {
            text-align: center;
            color: #333333;
        }
        form {
            width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #cccccc;
            background-color: #ffffff;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input {
            width: 100%;
            height: 30px;
            box-sizing: border-box;
            border: 1px solid #999999;
            padding: 5px;
        }
        button {
            display: block;
            width: 100%;
            height: 40px;
            background-color: #333333;
            color: #ffffff;
            border: none;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>رفع صورة على قاعدة بيانات</h1>
    <form action="add.php" method="POST">
        <label for="image_url">رابط الصورة</label>
        <input type="url" id="url" name="url" required>
        <label for="image_description">وصف الصورة</label>
        <input type="text" id="description" name="description" required>
        <button name="sub" type="submit">رفع الصورة</button>
    </form>
</body>
</html>
