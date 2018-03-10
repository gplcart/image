<?php

/**
 * @package Image
 * @author Iurii Makukh
 * @copyright Copyright (c) 2017, Iurii Makukh
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GPL-3.0+
 */

namespace gplcart\modules\image;

use gplcart\core\Module;

/**
 * Main class for Image module
 */
class Main
{

    /**
     * Module class instance
     * @var \gplcart\core\Module $module
     */
    protected $module;

    /**
     * @param Module $module
     */
    public function __construct(Module $module)
    {
        $this->module = $module;
    }

    /**
     * Implements hook "library.list"
     * @param array $libraries
     */
    public function hookLibraryList(array &$libraries)
    {
        $libraries['simpleimage'] = array(
            'name' => 'SimpleImage', // @text
            'description' => 'A PHP class that simplifies working with images', // @text
            'type' => 'php',
            'module' => 'image',
            'url' => 'https://github.com/claviska/SimpleImage',
            'download' => 'https://github.com/claviska/SimpleImage/archive/3.3.0.zip',
            'version' => '3.3.0',
            'vendor' => 'claviska/simpleimage'
        );
    }

    /**
     * Implements hook "image.style.action.handlers"
     * @param array $handlers
     */
    public function hookImageStyleActionHandlers(array &$handlers)
    {
        $handlers = array_merge($handlers, $this->getActionHandlers());
    }

    /**
     * Returns an array of image style actions
     * @return array
     */
    public function getActionHandlers()
    {
        return gplcart_config_get(__DIR__ . '/config/actions.php');
    }

}
