<?php

/**
 * @package Image
 * @author Iurii Makukh
 * @copyright Copyright (c) 2017, Iurii Makukh
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GPL-3.0+
 */

namespace gplcart\modules\image\handlers;

/**
 * Image action validators for Image module
 */
class Validator
{

    /**
     * @param array $value
     * @return bool
     */
    public function noArguments(array $value)
    {
        return empty($value);
    }

    /**
     * @param array $value
     * @return bool
     */
    public function bestFit(array $value)
    {
        return count($value) == 2 && count(array_filter($value, 'ctype_digit')) == 2;
    }

    /**
     * @param array $value
     * @return bool
     */
    public function flip(array $value)
    {
        return count($value) == 1 && in_array($value[0], array('x', 'y', 'both'), true);
    }

    /**
     * @param array $value
     * @return bool
     */
    public function overlay(array $value)
    {
        if (count($value) != 5) {
            return false;
        }

        list($overlay, $anchor, $opacity, $xoffset, $yoffset) = $value;

        return is_file(gplcart_file_absolute_path($overlay))//
                && in_array($anchor, array('center', 'top', 'bottom', 'left', 'right', 'top left', 'top right', 'bottom left', 'bottom right'))//
                && (is_numeric($opacity) && (0 <= $opacity) && ($opacity <= 1))//
                && ctype_digit($xoffset)//
                && ctype_digit($yoffset);
    }

    /**
     * @param array $value
     * @return bool
     */
    public function rotate(array $value)
    {
        if (count($value) != 2) {
            return false;
        }

        list($angle, $color) = $value;

        return filter_var($angle, FILTER_VALIDATE_INT) !== false//
                && (-360 <= $angle) && ($angle <= 360)//
                && ($this->isHex($color) || $color === 'transparent');
    }

    /**
     * @param array $value
     * @return bool
     */
    public function border(array $value)
    {
        return count($value) == 2 && $this->isHex($value[0]) && ctype_digit($value[1]);
    }

    /**
     * @param array $value
     * @return bool
     */
    public function blur(array $value)
    {
        return count($value) == 2 && in_array($value[0], array('selective', 'gaussian')) && ctype_digit($value[1]);
    }

    /**
     * @param array $value
     * @return bool
     */
    public function brighten(array $value)
    {
        return count($value) == 1 && ctype_digit($value[0]) && (0 <= $value[0]) && ($value[0] <= 100);
    }

    /**
     * @param array $value
     * @return bool
     */
    public function contrast(array $value)
    {
        return count($value) == 1//
                && filter_var($value[0], FILTER_VALIDATE_INT) !== false//
                && (-100 <= $value[0]) && ($value[0] <= 100);
    }

    /**
     * @param array $value
     * @return bool
     */
    public function darken(array $value)
    {
        return count($value) == 1 && ctype_digit($value[0]) && (0 <= $value[0]) && ($value[0] <= 100);
    }

    /**
     * @param array $value
     * @return bool
     */
    public function duotone(array $value)
    {
        return count($value) == 2 && $this->isHex($value[0]) && $this->isHex($value[1]);
    }

    /**
     * @param array $value
     * @return bool
     */
    public function opacity(array $value)
    {
        return count($value) == 1 && is_numeric($value[0]) && (0 <= $value[0]) && ($value[0] <= 1);
    }

    /**
     * @param array $value
     * @return bool
     */
    public function pixelate(array $value)
    {
        return count($value) == 1 && ctype_digit($value[0]);
    }

    /**
     * @param array $value
     * @return bool
     */
    public function color(array $value)
    {
        return count($value) == 1 && $this->isHex($value[0]);
    }

    /**
     * Whether the value is a HEX color code
     * @param string $value
     * @return bool
     */
    protected function isHex($value)
    {
        return preg_match('/#([a-fA-F0-9]{3}){1,2}\b/', $value) === 1;
    }

}
