# Pico Gutenberg Fix

This plugin will resolve errors with some WordPress themes where wide blocks do not display full width with the [Pico plugin](https://wordpress.org/plugins/pico/) activated.

## When to Use

If your site normally looks like this with full and wide width blocks:

![Screenshot of Working Site](https://tmp.f8.n0.cdn.getcloudapp.com/items/4guyqrrm/Screen%20Shot%202020-05-21%20at%2012.27.07%20PM.png?v=eee726fb22dee850d00f99721e721907)

But it looks like this after installing the Pico plugin:

![Screenshot of Broken Site](https://tmp.f8.n0.cdn.getcloudapp.com/items/DOuQZddY/Screen%20Shot%202020-05-21%20at%2012.26.58%20PM.png?v=c96d231bd59c715d397ae37bb4bd5583)

Then you want to install this plugin. It will correct the issue.

## To Install

- Download this repo
- Upload as a new plugin
- Activate
- Done

## For More Technical Issues

The Pico plugin wraps `the_content` with a `<div id="pico"></div>`. With the WordPress block editor, many themes full and wide width support will not work properly with an extra div wrapped around the content. This plugin.
