<?php

function createArray(...$jurusan) {
    return array_filter($jurusan, 'ctype_upper');
}

print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));
