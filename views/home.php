<?php
session_start();
echo "welcome" . $_SESSION["username"];
echo '<a href="/logout">logout</a>';