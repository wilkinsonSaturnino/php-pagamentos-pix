<?php

# Conteúdo da página
if (isset($_SESSION['login'])) {
    if (isset($_GET['pagina'])) {
        $pagina = $_GET['pagina'];
    } else {
        $pagina = 'pagamentos';
    }
} else {
    $pagina = 'home';
}
