<?php

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Destino al Éxito',
    'description' => '¡Pronto podrás encontrar todo lo que necesitas para alcanzar tus metas y lograr el éxito.!',
    'whatsapp' => 'https://api.whatsapp.com/send?phone=523314390428&text=Me%20interesa%20saber%20m%C3%A1s%20sobre%20el%20concurso',
    'collections' => [
        'contestants' => [
            'path' => 'participantes/{filename}',
        ],
        'jury' => [
            'path' => 'jurado/{filename}',
        ],
        'text' => [
            'path' => 'legal/{filename}',
        ],
    ],
];
