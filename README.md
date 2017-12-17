# ColorLine GPX Tool Oslo - Kiel
Tool I created in 2013, to get ready-to-use gpx files to geotag photos made on the ColorLine route Kiel-Oslo and Oslo-Kiel. Provided as is.

The idea behind this tool is to make it simple to geotag photos made on this route. As the route and time schedule of the ships do not differ that much from day to day, this is enough for approximate geo-tagging, it will of course not be 100% right. Note: the tool uses a base-route ripped from a marine tracker tool in 2013, I have no idea if this route still is correct, chances are nothing changed. 

# Usage

* Copy the files to any webserver / local server running PHP 4+
* Run index.php
* Fill in the dates you want the gpx-file for
* Enjoy

# Alternative Usage

If you don't feel like going through the hassle of copying the files and such, you can also use the .xml-files to generate gpx files for your dates by hand. 

For Kiel-Oslo: 
* Open `route_kieloslo.xml` in any text- or code-editor.
* Search for 2013-07-24, and replace this with the date the journey started using the search and replace tool.
* Do the same with 2013-07-25, this should be that date you arrived in Oslo.

For Oslo-Kiel
* Open `route_oslokiel.xml` in any text- or code-editor.
* Search for 2013-07-24, and replace this with the date the journey started using the search and replace tool.
* Do the same with 2013-07-25, this should be that date you arrived in Kiel.

You can then change the file extension to `.gpx` to be able to use the files in geo-tag software.

Note: Yes, I took gps-information for both directions on the same dates. 
