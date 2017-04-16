[![Build Status](https://scrutinizer-ci.com/g/gplcart/image/badges/build.png?b=master)](https://scrutinizer-ci.com/g/gplcart/image/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/gplcart/image/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/gplcart/image/?branch=master)

Image is a [GPL Cart](https://github.com/gplcart/gplcart) module that adds advanced image style actions for your GPL Cart site. Based on the [SimpleImage](https://github.com/claviska/SimpleImage) library

**Supported actions**

- Auto-orientation
- Best fit
- Flip
- Overlay (watermark)
- Rotate
- Border
- Fill with color
- Invert colors
- Opacity

Filters:

- Desaturate
- Darken
- Contrast
- Colorize
- Brightness
- Blur
- Duotone
- Edge detect
- Emboss
- Pixelate
- Sepia
- Sharpen
- Sketch

**Requirements**

- PHP >= 5.6

**Installation**

1. Download and extract to `system/modules` manually or using composer `composer require gplcart/image`. IMPORTANT: If you downloaded the module manually, be sure that the name of extracted module folder doesn't contain a branch/version suffix, e.g `-master`. Rename if needed.
2. Go to `admin/module/list` end enable the module
3. Go to `admin/settings/imagestyle` and add new actions to your image styles