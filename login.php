<?php
include_once 'header.php';
?>
    <section class="signup-form">
        <h2>Log In</h2>
        <div class="includes/signup-form-form">
            <form action="includes/login.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username/Email...">
            <input type="password" name="pwd" placeholder="Passord...">
            <button type="submit" name="submit">Log In</button>
            </form>
        </div>
<?php
    if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
        echo"<p>fill in all fields!</p>";
    }
    elseif ($_GET["error"] == "wronglogin") {
        echo"<p>Incorrect login!</p>";
    }
    
}
?> 
</section>
<?php
include_once 'footer.php';
?>