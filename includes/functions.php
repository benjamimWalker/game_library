<?php
function thumb($arq): string
{
    $path = "images/$arq";

    if (is_null($arq) || !file_exists($path)) {
        return 'images/indisponivel.png';
    }
    return $path;
}

function back(): string {
    return '<span class="material-icons">arrow_back</span></a>';
}