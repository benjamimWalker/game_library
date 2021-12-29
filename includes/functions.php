<?php
function thumb($arq): string
{
    $path = "images/$arq";

    if (is_null($arq) || !file_exists($path)) {
        return 'images/indisponivel.png';
    }
    return $path;
}