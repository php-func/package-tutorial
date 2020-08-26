<?php

namespace Thinkverse;

class Repeat
{
    /**
     * Repeat the given sentence.
     *
     * @param string|null $sentence
     * @return string
     */
    public static function sentence(?string $sentence = null): string
    {
        return $sentence ?? 'No sentence given.';
    }
}
