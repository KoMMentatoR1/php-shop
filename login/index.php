<!DOCTYPE html>
<?php include 'C:\MAMP\htdocs\shared\ui\head.phtml' ?>
<html>
    <body>
        <?php include 'C:\MAMP\htdocs\shared\ui\header.phtml' ?>
        <div class="contant_container">
            <?php include 'C:\MAMP\htdocs\shared\ui\sidebar.phtml' ?>
            <div class="contant">
                <div class="info_container">
                    <h2 class="content_header">Авторизация</h2>
                    <form class="form" action="../backend/login.php" method="post">
                        <div class="form_container">
                            <label for="login">
                                <div class="label">
                                    Логин    
                                </div>
                                <input required placeholder="Введите логин" id="login" class="input" name="login" />
                            </label> 
                            <label for="password">
                                <div class="label">
                                    Пароль      
                                </div>
                                <input required placeholder="Введите пароль" id="password" class="input" name="password" type="password" />
                            </label>
                        </div>
                        <?php
                            if (isset($_GET['error'])) {
                                echo "<h3 class='error'>" . $_GET['error'] . "</h3>";
                            }
                        ?>
                        <button class="form_button" type="submit">Войти</button>
                    </form>
                </div>   
            <div>
        </div>   
        <?php include 'C:\MAMP\htdocs\shared\ui\footer.phtml' ?>
    </body>   
</html>