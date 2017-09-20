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
class Image extends Module
{

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Implements hook "library.list"
     * @param array $libraries
     */
    public function hookLibraryList(array &$libraries)
    {
        $libraries['simpleimage'] = array(
            'name' => /* @text */'SimpleImage',
            'description' => /* @text */'A PHP class that simplifies working with images',
            'type' => 'php',
            'module' => 'image',
            'url' => 'https://github.com/claviska/SimpleImage',
            'download' => 'https://github.com/claviska/SimpleImage/archive/3.3.0.zip',
            'version' => '3.3.0',
            'files' => array(
                'vendor/claviska/simpleimage/src/claviska/SimpleImage.php'
            )
        );
    }

    /**
     * Implements hook "imagestyle.action.handlers"
     * @param array $handlers
     */
    public function hookImagestyleActionHandlers(array &$handlers)
    {
        $handlers = array_merge($handlers, $this->getActionHandlers());
    }

    /**
     * Returns an array of image style actions
     * @return array
     */
    public function getActionHandlers()
    {
        static $handlers = null;

        if (isset($handlers)) {
            return $handlers;
        }

        $handlers = require __DIR__ . '/config/actions.php';
        return $handlers;
    }

    /**
     * Implements hook "module.enable.after"
     */
    public function hookModuleEnableAfter()
    {
        $this->getLibrary()->clearCache();
    }

    /**
     * Implements hook "module.disable.after"
     */
    public function hookModuleDisableAfter()
    {
        $this->getLibrary()->clearCache();
    }

    /**
     * Implements hook "module.install.after"
     */
    public function hookModuleInstallAfter()
    {
        $this->getLibrary()->clearCache();
    }

    /**
     * Implements hook "module.uninstall.after"
     */
    public function hookModuleUninstallAfter()
    {
        $this->getLibrary()->clearCache();
    }

}
