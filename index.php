<!DOCTYPE html>
<?php include 'C:\MAMP\htdocs\shared\ui\head.phtml' ?>
<html>
    <body>
        <?php include 'C:\MAMP\htdocs\shared\ui\header.phtml' ?>
        <?php include 'C:\MAMP\htdocs\shared\ui\footer.phtml' ?>
        <div class="contant_container">
            <?php include 'C:\MAMP\htdocs\shared\ui\sidebar.phtml' ?>
            <div class="contant">
                <?php include 'C:\MAMP\htdocs\shared\ui\main_content.phtml' ?>
                <?php
                    if (isset($_SESSION['username'])) {
                        $href = "/admin/edit?content=main_page";
                        include 'C:\MAMP\htdocs\shared\ui\editButton.phtml';
                    }
                ?>
            <div>       
        </div>   
    </body>    
</html>