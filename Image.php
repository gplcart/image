<?php

/**
 * @package Image
 * @author Iurii Makukh
 * @copyright Copyright (c) 2017, Iurii Makukh
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GPL-3.0+
 */

namespace gplcart\modules\image;

use gplcart\core\Module,
    gplcart\core\Library;

/**
 * Main class for Image module
 */
class Image extends Module
{

    /**
     * Library class instance
     * @var \gplcart\core\Library $library
     */
    protected $library;

    /**
     * @param Library $library
     */
    public function __construct(Library $library)
    {
        parent::__construct();

        $this->library = $library;
    }

    /**
     * Module info
     * @return array
     */
    public function info()
    {
        return array(
            'name' => 'Image',
            'version' => '1.0.0-dev',
            'description' => 'Advanced image style actions for GPL Cart',
            'author' => 'Iurii Makukh ',
            'core' => '1.x',
            'license' => 'GPL-3.0+',
            'php' => '>= 5.6',
        );
    }

    /**
     * Implements hook "library.list"
     * @param array $libraries
     */
    public function hookLibraryList(array &$libraries)
    {
        $libraries['simpleimage'] = array(
            'name' => 'SimpleImage',
            'description' => 'A PHP class that simplifies working with images',
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
        $config = include __DIR__ . '/config/actions.php';
        $handlers = array_merge($handlers, $config);
    }

    /**
     * Implements hook "module.enable.after"
     */
    public function hookModuleEnableAfter()
    {
        $this->library->clearCache();
    }

    /**
     * Implements hook "module.disable.after"
     */
    public function hookModuleDisableAfter()
    {
        $this->library->clearCache();
    }

    /**
     * Implements hook "module.install.after"
     */
    public function hookModuleInstallAfter()
    {
        $this->library->clearCache();
    }

    /**
     * Implements hook "module.uninstall.after"
     */
    public function hookModuleUninstallAfter()
    {
        $this->library->clearCache();
    }

}
