# Welcome to the E Commerce Woo Plugin WordPress

![Plugin Logo](plugin_logo.png)

👋 Duplicate your theme’s page.php file, and name it woocommerce.php. This file should be found like this: wp-content/themes/YOURTHEME/woocommerce.php. Open up your newly created woocommerce.php in a text editor, or the editor of your choice. <br />
Next you need to find the loop (see The_Loop). The loop usually starts with a: <br />
`<?php if ( have_posts() ) :` <br />
and usually ends with: <br />
`<?php endif; ?>` <br />
This varies between themes. Once you have found it, delete it. In its place, put: <br />
`<?php woocommerce_content(); ?>` <br />
This will make it use WooCommerce’s loop instead. Save the file. You’re done. <br />
`Note: When creating woocommerce.php in your theme’s folder, you will not be able to override the woocommerce/archive-product.php custom template as woocommerce.php has priority over archive-product.php. This is intended to prevent display issues.`

## What is the E Commerce Woo Plugin WordPress?

Used to add woocommerce support to themes using after_setup_theme command

## Key Features

- 🚀 **Feature 1:** Feature.
- 🎨 **Feature 1:** Feature.
- 📦 **single-product 1:** Single Product Details.
- 📊 **Feature 1:** Feature.
- ⚙️ **Feature 1:** Feature.

## Getting Started

Getting started with the XYZ Plugin is a breeze:

1. **From the WooCommerce Plugin's Tools -> Import - WooCommerce products (CSV):** There is a many Sample Shop Documents in ( WooCommerce - Plugins - Sample-data ) folder.
2. **From the WooCommerce Plugin's Pages -> Visit Shop Page:** Görünüm & Menüler Shop - Shop Page.
3. **From the WooCommerce Plugin's Settings -> Accounts and Privacy Menu:** Members are enabled to create a new account.

## Installation

The "templates" folder in the WooCommerce Plugin installation files is copied to the "themes" folder and the folder's name is changed to "woocommerce".
