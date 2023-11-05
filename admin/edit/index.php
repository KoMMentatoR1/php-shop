<!DOCTYPE html>
<?php include 'C:\MAMP\htdocs\shared\ui\head.phtml' ?>
<html>
    <body>
        <?php include 'C:\MAMP\htdocs\shared\ui\header.phtml' ?>
        <div class="contant_container">
            <?php include 'C:\MAMP\htdocs\shared\ui\sidebar.phtml' ?>
            <div class="contant">
                <?php session_start();
                if (isset($_SESSION['username'])): ?>
                    <?php
                        if (isset($_GET['content'])):
                    ?>  
                    <textarea class="edit_textaria"><?php
                            $name = $_GET['content'];
                            include 'C:\MAMP\htdocs\backend\get_content.php';
                        ?>     
                    </textarea >
                    <?php else: ?>
                        <h3>Параметр 'id' не был передан в URL</h3>
                    <?php endif; ?>
                <?php else: ?>
                    <h3>Эта страница вам не доступна</h3>
                <?php endif; ?>
                <div class="edit_buttons">
                    <button class="admin_button" id="save">
                        <svg class="svg_save" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" width="30px" height="30px"><path d="M 26.980469 5.9902344 A 1.0001 1.0001 0 0 0 26.292969 6.2929688 L 11 21.585938 L 4.7070312 15.292969 A 1.0001 1.0001 0 1 0 3.2929688 16.707031 L 10.292969 23.707031 A 1.0001 1.0001 0 0 0 11.707031 23.707031 L 27.707031 7.7070312 A 1.0001 1.0001 0 0 0 26.980469 5.9902344 z"/></svg>
                    </button>
                    <button class="admin_button" id="close">
                        <svg class="svg_close" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 50 50" width="50px" height="50px"><path d="M 7.71875 6.28125 L 6.28125 7.71875 L 23.5625 25 L 6.28125 42.28125 L 7.71875 43.71875 L 25 26.4375 L 42.28125 43.71875 L 43.71875 42.28125 L 26.4375 25 L 43.71875 7.71875 L 42.28125 6.28125 L 25 23.5625 Z"/></svg>
                    </button>
                </div>
            <div>       
        </div>   
        <?php include 'C:\MAMP\htdocs\shared\ui\footer.phtml' ?>
    </body>
    <script>
        const close = document.getElementById('close');
        const save = document.getElementById('save');

        close.onclick = () => {
            const content = document.querySelector('.edit_textaria');
            if(content) {
                content.value = obj.data;
            }
        }

        save.onclick = () => {
            const content = document.querySelector('.edit_textaria');
            const updatedContent = content.value;
            const name = '<?php echo $_GET['content']; ?>';

            fetch('../../backend/save_content.php', {
                method: 'POST',
                body: JSON.stringify({ content: updatedContent, name }),
                success: function(responseupdatedContent) {
                    console.log(response);
                }    
            });
            location.reload();
        } 
    </script>    
</html>