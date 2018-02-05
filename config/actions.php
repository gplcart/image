<?php

/**
 * @package Image
 * @author Iurii Makukh
 * @copyright Copyright (c) 2017, Iurii Makukh
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GPL-3.0+
 */
return array(
    'auto_orient' => array(
        'name' => 'Auto-orientation', // @text
        'description' => 'Rotates an image so the orientation will be correct based on its exif data', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'autoOrient'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'noArguments')
        )
    ),
    'best_fit' => array(
        'name' => 'Best fit', // @text
        'description' => 'Proportionally resize the image to fit inside a specific width and height. 2 integers separated by comma: maximum width and height', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'bestFit'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'bestFit')
        )
    ),
    'flip' => array(
        'name' => 'Flip', // @text
        'description' => 'Flip the image horizontally or vertically. Parameters: "x" or "y" or "both"', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'flip'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'flip')
        )
    ),
    'overlay' => array(
        'name' => 'Overlay', // @text
        'description' => 'Place an image on top of the current image. 5 values separated by comma: path to image to overly (relative to file directory); one of the values - "center", "top", "bottom", "left", "right", "top left", "top right", "bottom left", "bottom right"; opacity (decimal); horizontal offset in pixels (integer); vertical offset in pixels (integer)', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'overlay'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'overlay')
        )
    ),
    'rotate' => array(
        'name' => 'Rotate', // @text
        'description' => 'Rotates the image. 2 values separated by comma: angle of rotation (-360 - 360); background color (HEX code or "transparent") to use for the uncovered zone area after rotation', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'rotate'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'rotate')
        )
    ),
    'border' => array(
        'name' => 'Border', // @text
        'description' => 'Draws a border around the image. 2 values separated by comma: HEX border color, thickness of the border (pixels)', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'border'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'border')
        )
    ),
    'fill' => array(
        'name' => 'Fill', // @text
        'description' => 'Fills the image with a solid color. Parameters: HEX color code', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'fill'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'color')
        )
    ),
    'blur' => array(
        'name' => 'Blur', // @text
        'description' => 'Applies the blur filter. 2 values separated by comma: blur algorithm to use - "selective" or"gaussian"; number of time to apply the filter, enhancing the effect (default 1)', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'blur'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'blur')
        )
    ),
    'brighten' => array(
        'name' => 'Brightness', // @text
        'description' => 'Applies the brightness filter to brighten the image. Parameters: percentage integer to brighten the image (0 - 100)', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'brighten'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'brighten')
        )
    ),
    'colorize' => array(
        'name' => 'Colorize', // @text
        'description' => 'Applies the colorize filter. Parameters: HEX color code', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'colorize'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'color')
        )
    ),
    'contrast' => array(
        'name' => 'Contrast', // @text
        'description' => 'Applies the contrast filter. Parameters: percentage integer to adjust (-100 - 100)', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'contrast'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'contrast')
        )
    ),
    'darken' => array(
        'name' => 'Darkness', // @text
        'description' => 'Applies the brightness filter to darken the image. Parameters: percentage integer to darken the image (0 - 100)', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'darken'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'darken')
        )
    ),
    'desaturate' => array(
        'name' => 'Desaturate', // @text
        'description' => 'Applies the desaturate (grayscale) filter', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'desaturate'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'noArguments')
        )
    ),
    'duotone' => array(
        'name' => 'Duotone', // @text
        'description' => 'Applies the duotone filter to the image. 2 HEX codes separated by comma: the lightest and darkest colors', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'duotone'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'duotone')
        )
    ),
    'edge_detect' => array(
        'name' => 'Edge detect', // @text
        'description' => 'Applies the edge detect filter', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'edgeDetect'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'noArguments')
        )
    ),
    'emboss' => array(
        'name' => 'Emboss', // @text
        'description' => 'Applies the emboss filter', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'emboss'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'noArguments')
        )
    ),
    'invert' => array(
        'name' => 'Invert', // @text
        'description' => "Inverts the image's colors", // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'invert'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'noArguments')
        )
    ),
    'opacity' => array(
        'name' => 'Opacity', // @text
        'description' => "Changes the image's opacity level. 1 decimal value (0 - 1)", // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'opacity'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'opacity')
        )
    ),
    'pixelate' => array(
        'name' => 'Pixelate', // @text
        'description' => 'Applies the pixelate filter. Parameters: the size of the blocks in pixels (default 10)', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'pixelate'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'pixelate')
        )
    ),
    'sepia' => array(
        'name' => 'Sepia', // @text
        'description' => 'Simulates a sepia effect by desaturating the image and applying a sepia tone', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'sepia'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'noArguments')
        )
    ),
    'sharpen' => array(
        'name' => 'Sharpen', // @text
        'description' => 'Sharpens the image', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'sharpen'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'noArguments')
        )
    ),
    'sketch' => array(
        'name' => 'Sketch', // @text
        'description' => 'Applies the mean remove filter to produce a sketch effect', // @text
        'handlers' => array(
            'process' => array('gplcart\\modules\\image\\handlers\\Action', 'sketch'),
            'validate' => array('gplcart\\modules\\image\\handlers\\Validator', 'noArguments')
        )
    )
);
