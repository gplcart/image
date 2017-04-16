<?php

/**
 * @package Image
 * @author Iurii Makukh
 * @copyright Copyright (c) 2017, Iurii Makukh
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GPL-3.0+
 */

namespace gplcart\modules\image\handlers;

use gplcart\core\Library;

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
     */
    public function __construct(Library $library)
    {
        $library->load('simpleimage');

        $this->image = new \claviska\SimpleImage;
    }

    /**
     * @param string $source
     * @param string $target
     */
    public function autoOrient(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->autoOrient()->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     */
    public function bestFit(&$source, $target, array $action)
    {
        try {
            list($width, $height) = $action['value'];
            $this->image->fromFile($source)->bestFit($width, $height)->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     */
    public function flip(&$source, $target, array $action)
    {
        try {
            $direction = reset($action['value']);
            $this->image->fromFile($source)->flip($direction)->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     */
    public function overlay(&$source, $target, array $action)
    {
        try {
            list($overlay, $anchor, $opacity, $xOffset, $yOffset) = $action['value'];
            $this->image->fromFile($source)->overlay($overlay, $anchor, $opacity, $xOffset, $yOffset)->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     */
    public function rotate(&$source, $target, array $action)
    {
        try {
            list($angle, $backgroundColor) = $action['value'];
            $this->image->fromFile($source)->rotate($angle, $backgroundColor)->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     */
    public function border(&$source, $target, array $action)
    {
        try {
            list($color, $thickness) = $action['value'];
            $this->image->fromFile($source)->border($color, $thickness)->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     */
    public function fill(&$source, $target, array $action)
    {
        try {
            list($color) = $action['value'];
            $this->image->fromFile($source)->fill($color)->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     */
    public function blur(&$source, $target, array $action)
    {
        try {
            list($type, $passes) = $action['value'];
            $this->image->fromFile($source)->blur($type, $passes)->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     */
    public function brighten(&$source, $target, array $action)
    {
        try {
            list($percentage) = $action['value'];
            $this->image->fromFile($source)->brighten($percentage)->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     */
    public function colorize(&$source, $target, array $action)
    {
        try {
            list($color) = $action['value'];
            $this->image->fromFile($source)->colorize($color)->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     */
    public function contrast(&$source, $target, array $action)
    {
        try {
            list($percentage) = $action['value'];
            $this->image->fromFile($source)->contrast($percentage)->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     */
    public function darken(&$source, $target, array $action)
    {
        try {
            list($percentage) = $action['value'];
            $this->image->fromFile($source)->darken($percentage)->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     */
    public function desaturate(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->desaturate()->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     */
    public function duotone(&$source, $target, array $action)
    {
        try {
            list($lightColor, $darkColor) = $action['value'];
            $this->image->fromFile($source)->duotone($lightColor, $darkColor)->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     */
    public function edgeDetect(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->edgeDetect()->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     */
    public function emboss(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->emboss()->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     */
    public function invert(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->invert()->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     */
    public function opacity(&$source, $target, array $action)
    {
        try {
            list($opacity) = $action['value'];
            $this->image->fromFile($source)->opacity($opacity)->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     * @param array $action
     */
    public function pixelate(&$source, $target, array $action)
    {
        try {
            list($size) = $action['value'];
            $this->image->fromFile($source)->pixelate($size)->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     */
    public function sepia(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->sepia()->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     */
    public function sharpen(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->sharpen()->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

    /**
     * @param string $source
     * @param string $target
     */
    public function sketch(&$source, $target)
    {
        try {
            $this->image->fromFile($source)->sketch()->toFile($target);
            $source = $target;
        } catch (\Exception $ex) {
            return false;
        }
        return true;
    }

}
