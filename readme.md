# A simple PHP CAPTCHA script

_Copyright 2011 Cory LaViska for A Beautiful Site, LLC. (http://abeautifulsite.net/)_

_Dual licensed under the MIT / GPLv2 licenses_


## Demo

http://labs.abeautifulsite.dev/simple-php-captcha/


## Requirements

* Requires PHP GD library
* Background images must be in PNG format
* Fonts can be either TTF or OTF format
* Uses the $_SESSION['_CAPTCHA'] namespace


## Usage


### Without Settings

	$_SESSION['captcha'] = captcha();

### With Settings

	$_SESSION['captcha'] = captcha( array(
		'code' => '',
		'min_length' => 5,
		'max_length' => 5,
		'png_backgrounds' => array('default.png', ...),
		'fonts' => array('times_new_yorker.ttf', ...),
		'characters' => 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',
		'min_font_size' => 24,
		'max_font_size' => 30,
		'color' => '#000',
		'angle_min' => 0,
		'angle_max' => 15,
		'shadow' => true,
		'shadow_color' => '#CCC',
		'shadow_offset_x' => -2,
		'shadow_offset_y' => 2
	));

Once you call the captcha() function, the image is displayed like this:

	<img src="$_SESSION['captcha']['image_src']" alt="CAPTCHA security code" />

To validate the captcha code:

	if( $_REQUEST['code'] === $_SESSION['captcha']['code'] ) {
		// codes match
	} else {
		// codes do not match
	}