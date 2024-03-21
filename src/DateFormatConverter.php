<?php

namespace Fridzema\DateFormatConverter;

class DateFormatConverter
{
    private static array $jsToPhpMapping = [];

    private static array $phpToJsMapping = [];

    public function __construct()
    {
        self::loadMappings();
    }

    /**
     * Loads the mappings from the configuration.
     */
    protected static function loadMappings(): void
    {
        if (empty(self::$jsToPhpMapping) || empty(self::$phpToJsMapping)) {
            self::$jsToPhpMapping = config('date-format-converter.mappings.js_to_php', []);
            self::$phpToJsMapping = config('date-format-converter.mappings.php_to_js', []);
        }
    }

    /**
     * Converts a JavaScript date format to a PHP date format.
     *
     * @param  string  $format  The JavaScript date format to convert.
     * @return string The PHP date format.
     */
    public static function convertJsFormatToPhp(string $format): string
    {
        self::loadMappings();

        return strtr($format, self::$jsToPhpMapping);
    }

    /**
     * Converts a PHP date format to a JavaScript date format.
     *
     * @param  string  $format  The PHP date format to convert.
     * @return string The JavaScript date format.
     */
    public static function convertPhpFormatToJs(string $format): string
    {
        self::loadMappings();

        return strtr($format, self::$phpToJsMapping);
    }
}
