<?php
/*
Plugin Name: Snipcart
Plugin URI: https://snipcart.com
Description: Easily sell with Snipcart. Adds "Product" post type and settings.
Author: Snipcart Team
Version: 0.1
Author URI: https://snipcart.com
*/
/*
Copyright (c) 2013 Antoine Leclair <antoineleclair@gmail.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

include('register_type.php');
include('metabox.php');
include('addtocart.php');

add_action('init', 'snipcart_register_product_type');
add_action('add_meta_boxes', 'snipcart_add_product_meta_box');
add_action('save_post', 'snipcart_save_product', 10, 2);
add_filter('the_content', 'snipcart_add_addtocart_button');
