<!-- <?php
session_start();
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
        <form action="register_post.php" method="post">
            <div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" value="<?php if (isset($_SESSION['namevalue'])) {
                     echo $_SESSION['namevalue'] ?? "" ;
                } ?>" placeholder=" Enter name"
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
                <input type="text" class="form-control" id="email" value="<?php if (isset($_SESSION['emailvalue'])) {
                     echo $_SESSION['emailvalue'];
                } ?>" placeholder="Enter email" name="email">
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
                <input type="text" class="form-control" id="phone" value="<?php if (isset($_SESSION['phonevalue'])) {
                     echo $_SESSION['phonevalue'];
                } ?>" placeholder="Enter phone" name="phone">
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
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" id="password" value="<?php if (isset($_SESSION['passwordvalue'])) {
                    echo $_SESSION['passwordvalue'];
                } ?>" placeholder="Enter password" name="password">

                <span class="password">
                    <?php
                        if (isset($_SESSION['password'])) {
                    ?>
                        <style>
                        #password {
                            border: 1px solid red;
                        }
                        .password {
                            color: red;
                        }
                        </style>
                    <?php
                        echo $_SESSION['password'];
                            session_unset();
                    }
                    ?>
                </span>

            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</body>

</html> -->
