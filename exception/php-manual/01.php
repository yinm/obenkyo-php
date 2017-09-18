<?php

function inverse($x)
{
    if (!$x) {
        throw new Exception('ゼロによる除算');
    }

    return 1 / $x;
}

try {
    echo inverse(5) . "\n";
    echo inverse(0) . "\n";
} catch (Exception $e) {
    echo '補足した例外: ', $e->getMessage() . "\n";
}

echo "Hello world\n";