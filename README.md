# Bandcamp BBCode parser for Invision Power Board (IPB) v4+

Bandcamp's embed code is using the album or the track ID. This ID is not available in the URL so creating a custom BBCode within the default IPB system is tricky and not very convenient for the users. Here is a small 1-file plugin that does the trick very easily.

## Current limitation

To avoid to have multiple player's styles, I chose to force the style to a small one so all the style options you or your members might use will be ignored.

## How to install this plugin?

1. Go the AdminCP > System > Plugins
2. Click on Install a new plugin
3. Choose the file bandcamp.xml in the "install_file" folder and click on the "Install" button.
4. And it's done!

## How to use?

That's pretty simple. On your Bandcamp page for a track or an album, click on the "Share / Embed" link, then choose any style (will be ignored as explained above). Now click on the "wordpress.com" button and copy/paste the BBCode into your message.

## Documentation

### Plugins location within IPB 

The plugins are located here: IPB_ROOT/plugins/
This module will be located here: IPB_ROOT/plugins/bandcamp.

If you clone the current repository, do it in the plugin's directory and rename the folder to "bandcamp".

### install_file/bandcamp.xml

This file is the export version of this module. It's only here for you to directly upload the plugin. It's not part of the module source code.