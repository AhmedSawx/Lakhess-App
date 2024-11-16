<?php

/*
 * Branding configs for your application
 */

return [
    'logo' => [
        'type' => 'svg',
        'image_src' => '',
        'svg_string' => '<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<rect width="48" height="48" fill="url(#pattern0_30_35)"/>
<defs>
<pattern id="pattern0_30_35" patternContentUnits="objectBoundingBox" width="1" height="1">
<use xlink:href="#image0_30_35" transform="scale(0.00223214)"/>
</pattern>
<image id="image0_30_35" width="448" height="448" xlink:href="data:image/png;base64,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"/>
</defs>
</svg>
',
        'height' => '48',
    ],
    'background' => [
        'color' => '#ffffff',
        'image' => '',
        'image_overlay_color' => '#000000',
        'image_overlay_opacity' => '0.5',
    ],
    'color' => [
        'text' => '#212936',
        'button' => '#09090b',
        'button_text' => '#ffffff',
        'input_text' => '',
        'input_border' => '#212936',
    ],
    'alignment' => [
        'heading' => 'center',
        'container' => 'center',
    ],
    'favicon' => [
        'light' => '/auth/img/favicon.png',
        'dark' => '/auth/img/favicon-dark.png',
    ],
];
