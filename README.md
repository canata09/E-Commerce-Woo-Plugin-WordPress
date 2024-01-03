# Welcome to the WooCommerce Plugin WordPress

![Plugin Logo](plugin_logo.png)

## What is the E Commerce Woo Plugin WordPress?

👋 Create "templates" folder in the "themes" folder and change the folder's name to "woocommerce".

## Creating Theme Support for WooCommerce

You can find detailed setup instructions for adding WooCommerce support to themes using the after_setup_theme command in the [Theme Support Guide](backups/functions.php).

## Installation

To customize the layout of a specific WooCommerce page in your theme, you can override the WooCommerce template files in your theme. [Folders Dir Docs](docs/THEME_DIR.MD).
Here's the step-by-step pseudocode:

1. **Installation:** Identify the WooCommerce template file that corresponds to the page you want to customize. These files are located in the `wp-content/plugins/woocommerce/templates` directory of your WordPress installation.
2. **Activation:** Copy the template file to your theme's directory, maintaining the same directory structure. For example, if you're customizing the single product page, you would copy `wp-content/plugins/woocommerce/templates/single-product.php` to `wp-content/themes/your-theme/woocommerce/single-product.php`.
3. **Exploration:** Open the copied file in your theme's directory and make your desired changes.

## Information About Using E-Commerce Pages

From the WooCommerce Plugin's Pages -> Visit Shop Page  <br />
Görünüm & Menüler Shop - Shop Page.  <br />
In order to design a Login System, it is necessary to install the conditional statement on the home page.
```
<?php if ( is_user_logged_in() ) : ?>
    <a href="<?php echo get_permalink(get_option("woocommerce_myaccount_page_id")); ?>"> My Account </a>
    <a href="<?php echo wp_logout_url(get_permalink(get_option("woocommerce_myaccount_page_id"))); ?>"> Logout </a>
<?php else : ?>
    <a href="<?php echo get_permalink(get_option("woocommerce_myaccount_page_id")); ?>"> Login/Register </a>
<?php endif; ?>
```
Try

## Key Features

- 🚀 **Ana tanım tabloları:** admin, anahtarlar, iskonto, kullanıcılar, listebaslik, listedetay, musteri, musterigrup, musteriekgrup, stok, stokgrup, stokekgrup.
- 🎨 **Hareket Tabloları:** siparisbaslik, siparisdetay, stokhareket, sepet, odeme ve session.
- 📦 **Feature 3:** Try
- 📊 **Feature 4:** Try
- ⚙️ **Feature 5:** Try

## Testing

From the WooCommerce Plugin's <br />
Tools -> Import - WooCommerce products (CSV) <br />
There is a many Sample Shop Documents in " WordPress Directory - Plugins - WooCommerce - Sample-data " folder. <br />

## Additional Contributing

Duplicate your theme’s page.php file, and name it woocommerce.php. [Additional Contributing Docs](docs/woocommerce.php).
This file should be found like this: wp-content/themes/YOURTHEME/woocommerce.php. Open up your newly created woocommerce.php in a text editor, or the editor of your choice. Next you need to find the loop (see The_Loop). The loop usually starts with a:
```
<?php if ( have_posts() ) :
and usually ends with:
<?php endif; ?>
```
This varies between themes. Once you have found it, delete it. In its place, put:
```
<?php woocommerce_content(); ?>
```
This will make it use WooCommerce’s loop instead. Save the file. You’re done. <br />
Note: When creating woocommerce.php in your theme’s folder, you will not be able to override the woocommerce/archive-product.php custom template as woocommerce.php has priority over archive-product.php. This is intended to prevent display issues.

## Stay Connected

We're excited to have you on board and can't wait to see how the XYZ Plugin transforms your creative and development endeavors. Happy coding!

*— The XYZ Plugin Team*
