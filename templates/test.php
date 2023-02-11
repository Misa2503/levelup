<?Php 

/* Template Name: Test Template */
get_header();

?>
<form action="register.php" method="post">
    <input type="text" name="username" class="input input_username" placeholder="Username">
    <p class="error-message-username"></p><br>
    <input type="email" name="email" class="input input_email" placeholder="Email">
    <p class="error-message-email"></p><br>
    <input type="password" name="password" class="input input_password" placeholder="Password">
    <p class="error-message-password"></p><br>

    <input type="submit" class="register" value="Register"><br>
    <p class="error-message"></p>
</form>

<?php get_footer(); ?>