<?php

return array(
    'factories' => array(
        'AYAH' => function () {
            require_once __DIR__ .'/../src/AYAH/PlayThru/ayah.php';
            return new AYAH();
        },
    )
);
