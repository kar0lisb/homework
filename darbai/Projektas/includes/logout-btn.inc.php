<?php
    if(isset($_SESSION['user_id'])) { 
        echo '<form action="includes/logout.inc.php" method="post">
                <button class="logOut" type="submit" name="submit">Atsijungti &#187;</button></form>';
            } else {
                header("Location: index.php?login=please-Log-in-first");        
        }
?>