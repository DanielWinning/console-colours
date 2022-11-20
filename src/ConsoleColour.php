<?php

namespace WinningSoftware\ConsoleColours;

class ConsoleColour
{
    public const FG_BLACK = "\033[30m";
    public const FG_RED = "\033[31m";
    public const FG_GREEN = "\033[32m";
    public const FG_YELLOW = "\033[33m";
    public const FG_BLUE = "\033[34m";
    public const FG_MAGENTA = "\033[35m";
    public const FG_CYAN = "\033[36m";
    public const FG_WHITE = "\033[37m";
    public const FG_BRIGHT_BLACK = "\033[90m";
    public const FG_BRIGHT_RED = "\033[91m";
    public const FG_BRIGHT_GREEN = "\033[92m";
    public const FG_BRIGHT_YELLOW = "\033[93m";
    public const FG_BRIGHT_BLUE = "\033[94m";
    public const FG_BRIGHT_MAGENTA = "\033[95m";
    public const FG_BRIGHT_CYAN = "\033[96m";
    public const FG_BRIGHT_WHITE = "\033[97m";

    public const BG_BLACK = "\033[40m";
    public const BG_RED = "\033[41m";
    public const BG_GREEN = "\033[42m";
    public const BG_YELLOW = "\033[43m";
    public const BG_BLUE = "\033[44m";
    public const BG_MAGENTA = "\033[45m";
    public const BG_CYAN = "\033[46m";
    public const BG_WHITE = "\033[47m";
    public const BG_BRIGHT_BLACK = "\033[100m";
    public const BG_BRIGHT_RED = "\033[101m";
    public const BG_BRIGHT_GREEN = "\033[102m";
    public const BG_BRIGHT_YELLOW = "\033[103m";
    public const BG_BRIGHT_BLUE = "\033[104m";
    public const BG_BRIGHT_MAGENTA = "\033[105m";
    public const BG_BRIGHT_CYAN = "\033[106m";
    public const BG_BRIGHT_WHITE = "\033[107m";

    public const RESET = "\033[0m";
    public const BOLD = "\033[1m";
    public const UNDERLINE = "\033[4m";
    public const SLOW_BLINK = "\033[5m";

    public const TEXT = [
        'BLACK' => self::FG_BLACK,
        'RED' => self::FG_RED,
        'GREEN' => self::FG_GREEN,
        'YELLOW' => self::FG_YELLOW,
        'BLUE' => self::FG_BLUE,
        'MAGENTA' => self::FG_MAGENTA,
        'CYAN' => self::FG_CYAN,
        'WHITE' => self::FG_WHITE,
        'BRIGHT_BLACK' => self::FG_BRIGHT_BLACK,
        'BRIGHT_RED' => self::FG_BRIGHT_RED,
        'BRIGHT_GREEN' => self::FG_BRIGHT_GREEN,
        'BRIGHT_YELLOW' => self::FG_BRIGHT_YELLOW,
        'BRIGHT_BLUE' => self::FG_BRIGHT_BLUE,
        'BRIGHT_MAGENTA' => self::FG_BRIGHT_MAGENTA,
        'BRIGHT_CYAN' => self::FG_BRIGHT_CYAN,
        'BRIGHT_WHITE' => self::FG_BRIGHT_WHITE,
        'BOLD' => self::BOLD,
        'UNDERLINE' => self::UNDERLINE,
        'RESET' => self::RESET,
        'SLOW_BLINK' => self::SLOW_BLINK,
    ];

    public const BG = [
        'BLACK' => self::BG_BLACK,
        'RED' => self::BG_RED,
        'GREEN' => self::BG_GREEN,
        'YELLOW' => self::BG_YELLOW,
        'BLUE' => self::BG_BLUE,
        'MAGENTA' => self::BG_MAGENTA,
        'CYAN' => self::BG_CYAN,
        'WHITE' => self::BG_WHITE,
        'BRIGHT_BLACK' => self::BG_BRIGHT_BLACK,
        'BRIGHT_RED' => self::BG_BRIGHT_RED,
        'BRIGHT_GREEN' => self::BG_BRIGHT_GREEN,
        'BRIGHT_YELLOW' => self::BG_BRIGHT_YELLOW,
        'BRIGHT_BLUE' => self::BG_BRIGHT_BLUE,
        'BRIGHT_MAGENTA' => self::BG_BRIGHT_MAGENTA,
        'BRIGHT_CYAN' => self::BG_BRIGHT_CYAN,
        'BRIGHT_WHITE' => self::BG_BRIGHT_WHITE,
    ];

    public static function text(array $modifiers): string
    {
        $modifierString = '';

        foreach ($modifiers as $modifier) {
            if (\array_key_exists(strtoupper($modifier), self::TEXT)) {
                $modifierString .= self::TEXT[strtoupper($modifier)];
            }
        }

        return $modifierString;
    }

    public static function bg(string $colour): string
    {
        $modifierString = '';

        if (\array_key_exists(strtoupper($colour), self::BG)) {
            $modifierString .= self::BG[strtoupper($colour)];
        }

        return $modifierString;
    }
}