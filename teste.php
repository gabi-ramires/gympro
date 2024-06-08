<?php

$pass = 'gabs123';
$hash = '$2y$10$NV84kcgtQmxFOmlxLZXGFesI984uNKvWncd0YIiOf/pFL6YjSJ/zS';



if(password_verify($pass, $hash)) {
    echo 'Senha correta!';
} else {
    echo "Senha incorreta!";
}