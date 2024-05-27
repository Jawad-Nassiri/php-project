<?php


// var_dump($_FILES['profile-pic']);


// echo($_FILES['profile-pic']['name']);
// echo($_FILES['profile-pic']['size']);
// echo($_FILES['profile-pic']['tmp_name']);




// save a file

move_uploaded_file($_FILES['profile-pic']['tmp_name'], 'image/pro.png');

