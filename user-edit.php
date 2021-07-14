<?php
session_start();

    require_once 'database.php';
    $id = $_GET['id'];
    $select_count = "SELECT * FROM anupom where id = '$id' " ;
    $s = mysqli_query($db , $select_count);
    $assoc = mysqli_fetch_assoc($s);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>anupom | login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 class="text-center">registration form</h2>
        <form action="user_update.php" method="post">
            <div class="form-group">
                <input type="hidden" name="user_id" value="<?php print_r($assoc['id']) ?>">
                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" value="<?php print_r($assoc['name']) ?>" placeholder=" Enter name"
                    name="name">
                <span class="name">
                    <?php
                        if (isset($_SESSION['name'])) {
                    ?>
                        <style>
                            #name {
                                border: 1px solid red;
                            }
                            .name {
                                color: red;
                            }
                            </style>
                            <?php
                            echo $_SESSION['name'];
                                session_unset();
                        }
                        if (isset($_SESSION['namevalid'])) {
                            ?>
                                <style>
                                    #name {
                                        border: 1px solid red;
                                    }
                                    .name {
                                        color: red;
                                    }
                                    </style>
                                    <?php
                                    echo $_SESSION['namevalid'];
                                        session_unset();
                                }
                    ?>
                </span>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" value="<?php print_r($assoc['email']) ?>" placeholder="Enter email" name="email">
                <span class="email">
                    <?php
                        if (isset($_SESSION['email'])) {
                    ?>
                        <style>
                        #email {
                            border: 1px solid red;
                        }
                        .email {
                            color: red;
                        }
                        </style>
                    <?php
                        echo $_SESSION['email'];
                            session_unset();
                    }
                    if (isset($_SESSION['emailvalid'])) {
                        ?>
                            <style>
                            #email {
                                border: 1px solid red;
                            }
                            .email {
                                color: red;
                            }
                            </style>
                        <?php
                            echo $_SESSION['emailvalid'];
                                session_unset();
                        }
                        
                    ?>
                </span>
            </div>
            <div class="form-group">
                <label for="phone">phone:</label>
                <input type="text" class="form-control" id="phone" value="<?php print_r($assoc['phone']) ?>" placeholder="Enter phone" name="phone">
                <span class="phone">
                    <?php
                        if (isset($_SESSION['phone'])) {
                    ?>
                        <style>
                        #phone {
                            border: 1px solid red;
                        }
                        .phone {
                            color: red;
                        }
                        </style>
                    <?php
                        echo $_SESSION['phone'];
                            session_unset();
                        }
                        if (isset($_SESSION['passwordvalid'])) {
                            ?>
                                <style>
                                #phone {
                                    border: 1px solid red;
                                }
                                .phone {
                                    color: red;
                                }
                                </style>
                            <?php
                                echo $_SESSION['passwordvalid'];
                                    session_unset();
                                }
                    ?>
                </span>
            </div>
          <div class="text-center">
                <button type="submit" class="btn btn-primary ">update</button>
          </div>

        </form>
    </div>
</body>

</html>
