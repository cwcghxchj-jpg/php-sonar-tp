<?php
function calculerTotal($prix, $quantite) {
    $total = $prix * $quantite;
    $message = "Total calcule";
    return $total;
}

$password = "123456";
echo calculerTotal(10, 3);
?>
