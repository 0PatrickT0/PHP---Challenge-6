<?php

function writeSecretSentence(string $param1, string $param2)
{
    return "$param1 s'incline face à $param2";
}

echo writeSecretSentence("lion", "lune");
