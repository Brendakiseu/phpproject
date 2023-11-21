<?php
include_once 'header.php';
?>
    <section class="index-intro">
                    <?php
                    if (isset($_SESSION["useruid"])){
                        echo "<p>Hello there," . $_SESSION["useruid"] ."</p>";
                        
                    }
                    ?>

        <h1>Welcome to Connecthub<h1>
        <p>Your personalised gateway to a world of possibilities!We are thrilled to have you here, where a tailored online experience awaits.
        To unlock the full potential of our platform,we invite you to sign in and join our vibrant community.<p>
        <p>Signing in is quick and easy. If you are new,join us by creating an account,and if you are returning,simply log in and pick up where you left off.
            Your journey on our platform is about to become more rewarding!<p>
    
 <img src=https://www.shutterstock.com/image-vector/network-isolated-on-white-background-260nw-1177010272.jpg>
        </section>
<?php
include_once 'footer.php';
?>

