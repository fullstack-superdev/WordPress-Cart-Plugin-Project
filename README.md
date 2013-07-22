Snipcart Wordpress Plugin
=========================

This is a plugin for Wordpress to add "products" post type and snipcart settings.

Do not use as of yet, it is still in very infatile stage.

## Development

This section is for developers who contribute to this plugin.

### Locales

When editing PHP files, you have to regenerate the POT file.

    ./tools/generate-pot-file.sh

When the POT file has been generated, you can merge with existing PO files.

    ./tools/merge-po-file.sh fr_CA

When all the PO files are ready, you can generate the MO files.

    ./tools/generate-mo-files.sh

### Building the zip to distribute

This will generate the MO files, then zip the plugin into `snipcart.zip`.

    ./tools/build.sh
