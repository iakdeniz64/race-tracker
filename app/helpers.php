<?php

if (!defined('chance')) {
    function chance(int $percentage): bool
    {
        return rand(0, 99) < $percentage;
    }
}
