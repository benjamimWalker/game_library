<?php
function thumb($arq): string
{
    $path = "images/$arq";

    if (is_null($arq) || !file_exists($path)) {
        return 'images/indisponivel.png';
    }
    return $path;
}

function back(): string
{
    return '<span class="material-icons">arrow_back</span></a>';
}

function msg_success($m)
{
    return "<div class='success'><i class='material-icons'>check_circle</i> $m</div>";
}

function msg_warning($m)
{
    return "<div class='warning'><i class='material-icons'>info</i> $m</div>";

}

function msg_error($m)
{
    return "<div class='error'><i class='material-icons'>error</i> $m</div>";

}