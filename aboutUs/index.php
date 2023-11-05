<!DOCTYPE html>
<?php include 'C:\MAMP\htdocs\shared\ui\head.phtml' ?>
<html>
    <body>
        <?php include 'C:\MAMP\htdocs\shared\ui\header.phtml' ?>
        <div class="contant_container">
            <?php include 'C:\MAMP\htdocs\shared\ui\sidebar.phtml' ?>
            <div class="contant">
                <?php include 'C:\MAMP\htdocs\shared\ui\aboutUs_content.phtml' ?>
                <?php
                    if (isset($_SESSION['username'])): ?>
                    <?php 
                        $href = "/admin/edit?content=aboutUs_page";
                        include 'C:\MAMP\htdocs\shared\ui\editButton.phtml'
                     ?>
                    <?php endif;
                ?>
            <div>       
        </div>   
        <?php include 'C:\MAMP\htdocs\shared\ui\footer.phtml' ?>
    </body>    
</html>