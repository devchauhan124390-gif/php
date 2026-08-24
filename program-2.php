<?php
// Create a cookie
setcookie("username", "Dev", time() + 3600, "/");

// Redirect using header
header("Location: welcome.php");
exit();
<?php
if (isset($_COOKIE["username"])) {
    echo "Welcome, " . $_COOKIE["username"];
} else {
    echo "Cookie not found.";
}
