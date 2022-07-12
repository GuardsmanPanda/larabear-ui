<?php

namespace GuardsmanPanda\LarabearUi\Web\Www\Shared\Service;

use RuntimeException;

class HeroIconService {
    private static array $icons = [
        'pencil' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />',
        'translate' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"></path>',
    ];

    public static function getIconPath(string $icon): string {
        if (!isset(self::$icons[$icon])) {
            throw new RuntimeException('Unknown icon: ' . $icon);
        }
        return self::$icons[$icon];
    }
}
