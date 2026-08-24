<?php
// Check if the cookie exists
if (isset($_COOKIE["username"])) {
    echo "Username: " . $_COOKIE["username"];
} else {
    echo "Cookie not found.";
}
?>
<?php
setcookie("username", "Dev", time() + (30 * 24 * 60 * 60));

echo "Cookie created successfully.";
?>
<?php
if (isset($_COOKIE["username"])) {
    echo "Welcome, " . $_COOKIE["username"];
} else {
    echo "No cookie found.";
}
?>