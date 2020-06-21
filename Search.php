<?php
require_once 'connect.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Search</title>
</head>
<body>
    <h1>Search User</h1>
    <a href="index.php">Home</a>
    <form action="" method="post">
        <input type="text" name="login" placeholder="Login">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="surname" placeholder="Surname">
        <input type="submit" name="search" value="Search">
    </form>

    <?php
        $log = $_POST['login'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];

        if(isset($_POST['search'])){
            $query = "SELECT * FROM users WHERE login='$log' && name='$name' && surname='$surname'";
            $result = mysqli_query($link,$query);
                for($data = []; $arr = mysqli_fetch_assoc($result);$data[] = $arr);
                ?>
                <table style="margin:auto;width:500px;border:1px solid grey;">
                    <tr>


                        <th>Id</th>
                        <th>Login</th>
                        <th>Name</th>
                        <th>Surname</th>

                        <th>Role</th>

                    </tr>
                    <?php foreach ($data as $user) {?>

                        <tr>
                            <td><?= $user['id'] ?></td>
                            <td><?= $user['login'] ?></td>
                            <td><?= $user['name'] ?></td>
                            <td><?= $user['surname'] ?></td>
                            <td><?= $user['role'] ?></td>

                        </tr>
                    <?php }?>
                </table>
        <?php }else{
            echo"<span>Введите Данные</span>";
        }?>

</body>
</html>
