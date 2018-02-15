<?php

/**
 * @package Image
 * @author Iurii Makukh
 * @copyright Copyright (c) 2017, Iurii Makukh
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GPL-3.0+
 */

namespace gplcart\modules\image\handlers;

use claviska\SimpleImage;
use Exception;
use gplcart\core\Library;
use LogicException;

/**
 * Image action methods for Image module
 */
class Action
{

    /**
     * SimpleImage class instance
     * @var \claviska\SimpleImage $lib
     */
    protected $image;

    /**
     * @param Library $library
     * @throws LogicException
     */
    public function __construct(Library $library)
    {
        $library->load('simpleimage');

        if (!class_exists('claviska\\SimpleImage')) {
            throw new LogicException('Class claviska\\SimpleImage does not exist');
        }

        $this->image = new SimpleImage;
    }

    /**
     * @param string $source
     * @param string $target
     * @return bool
     */
    public function autoOrient(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->autoOrient()->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     * @return bool
     */
    public function bestFit(&$source, $target, array $action)
    {
        try {
            list($width, $height) = $action['value'];
            $this->image->fromFile($source)->bestFit($width, $height)->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     * @return bool
     */
    public function flip(&$source, $target, array $action)
    {
        try {
            $direction = reset($action['value']);
            $this->image->fromFile($source)->flip($direction)->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     * @return bool
     */
    public function overlay(&$source, $target, array $action)
    {
        try {
            list($overlay, $anchor, $opacity, $xOffset, $yOffset) = $action['value'];
            $this->image->fromFile($source)->overlay($overlay, $anchor, $opacity, $xOffset, $yOffset)->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     * @return bool
     */
    public function rotate(&$source, $target, array $action)
    {
        try {
            list($angle, $backgroundColor) = $action['value'];
            $this->image->fromFile($source)->rotate($angle, $backgroundColor)->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     * @return bool
     */
    public function border(&$source, $target, array $action)
    {
        try {
            list($color, $thickness) = $action['value'];
            $this->image->fromFile($source)->border($color, $thickness)->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     * @return bool
     */
    public function fill(&$source, $target, array $action)
    {
        try {
            list($color) = $action['value'];
            $this->image->fromFile($source)->fill($color)->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     * @return bool
     */
    public function blur(&$source, $target, array $action)
    {
        try {
            list($type, $passes) = $action['value'];
            $this->image->fromFile($source)->blur($type, $passes)->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     * @return bool
     */
    public function brighten(&$source, $target, array $action)
    {
        try {
            list($percentage) = $action['value'];
            $this->image->fromFile($source)->brighten($percentage)->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     * @return bool
     */
    public function colorize(&$source, $target, array $action)
    {
        try {
            list($color) = $action['value'];
            $this->image->fromFile($source)->colorize($color)->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     * @return bool
     */
    public function contrast(&$source, $target, array $action)
    {
        try {
            list($percentage) = $action['value'];
            $this->image->fromFile($source)->contrast($percentage)->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     * @return bool
     */
    public function darken(&$source, $target, array $action)
    {
        try {
            list($percentage) = $action['value'];
            $this->image->fromFile($source)->darken($percentage)->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @return bool
     */
    public function desaturate(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->desaturate()->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     * @return bool
     */
    public function duotone(&$source, $target, array $action)
    {
        try {
            list($lightColor, $darkColor) = $action['value'];
            $this->image->fromFile($source)->duotone($lightColor, $darkColor)->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @return bool
     */
    public function edgeDetect(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->edgeDetect()->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @return bool
     */
    public function emboss(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->emboss()->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @return bool
     */
    public function invert(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->invert()->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     * @return bool
     */
    public function opacity(&$source, $target, array $action)
    {
        try {
            list($opacity) = $action['value'];
            $this->image->fromFile($source)->opacity($opacity)->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     * @return bool
     */
    public function pixelate(&$source, $target, array $action)
    {
        try {
            list($size) = $action['value'];
            $this->image->fromFile($source)->pixelate($size)->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @return bool
     */
    public function sepia(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->sepia()->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @return bool
     */
    public function sharpen(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->sharpen()->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @return bool
     */
    public function sketch(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->sketch()->toFile($target);
            $source = $target;
        } catch (Exception $ex) {
            return false;
        }

        return true;
    }

}
