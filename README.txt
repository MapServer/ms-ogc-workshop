
$Id: README.txt,v 1.5 2010-02-03 17:45:53 tkralidi Exp $

MapServer and OGC Web Services Workshop
=======================================

Contact

Tom Kralidis
Senior Systems Scientist
Environment Canada
+01-416-739-4907
tom.kralidis@ec.gc.ca

INSTALLATION -- UNIX
--------------------

* Note that this UNIX support has not been extensively tested.  If you find any issues, please email me.

1./

- download this zipfile (latest is always at: http://www.maptools.org/ms4w/index.phtml?page=downloads.html)
- unzip package into the root of your file structure, i.e.:

$ lwp-download http://dl.maptools.org/dl/ms-ogc-workshop/ms_ogc_workshop-10.10.zip /tmp/ms_ogc_workshop.zip
$ unzip /tmp/ms_ogc_workshop.zip

The above package will unzip into install into the /ms4w directory structure.

2./ Include the file /ms4w/http.d/httpd_ms_ogc_workshop.conf in your Apache configuration:

i.e. in your httpd.conf file:

include /ms4w/httpd.d/httpd_ms_ogc_workshop.conf

You should then be able to open up the project homepage, at:

http://127.0.0.1/ms_ogc_workshop/index.html


INSTALLATION -- WINDOWS MS4W
----------------------------

1./

You will require the MapServer for Windows (MS4W) package.  The downloads page is at:

http://www.maptools.org/ms4w/index.phtml?page=downloads.html

a./
- download/install the latest ms4w package.

The above package will install MapServer software, as well as an instance of the Apache Web Server.  At this point, you can run C:\ms4w\Apache\bin\Apache.exe, which will start the web server, and point your web browser to http://127.0.0.1/, and you will see the ms4w homepage with some links.

b./
- download the MapServer OGC Web Services Workshop this zip file form http://www.maptools.org/ms4w/index.phtml?page=downloads.html
- Extract the packages below to the root of the drive where your MS4W is installed on (e.g. C:\ )
- make sure "Use Folder Names" is checked


c./
- Start the Apache web server by double clicking \ms4w\Apache\bin\Apache.exe
- Open your web browser (such as Mozilla/Firefox, Opera or Microsort Internet Explorer)

You should then be able to open up the project homepage, at:

http://127.0.0.1/ms_ogc_workshop/index.html


2./

OTHER HELPFUL RESOURCES

If you wish, you can download and print the OGC WMS Cookbook from:

http://www.opengeospatial.org/docs/2003/20031113_wmscookbook.pdf

3./

If you wish, you can download and print the CGDI Best Practices Guide from:

http://www.geoconnections.org/publications/Technical_Manual/Technical_Manual_1.1_e.pdf (EN)
http://www.geoconnections.org/publications/Technical_Manual/Technical_Manual_1.1_f.pdf (FR)

or the Developers' Guide to the CGDI:

http://www.geoconnections.org/publications/Technical_Manual/html_e/cgdiindex.html (EN)
http://www.geoconnections.org/publications/Technical_Manual/html_f/cgdiindex.html

or CGDI online training:

http://www.geoconnections.org/publications/training_manual/e/ (EN)
http://www.geoconnections.org/publications/training_manual/f/index.htm (FR)

If you have any questions or comments, feel free to contact me.


INSTALLATION -- WINDOWS OSGEO4W
-------------------------------

1./

Starting from version 1.0.9, the workshop is available through the osgeo4w installer
(http://wiki.osgeo.org/wiki/OSGeo4W)

Steps are:
 
  - download/install the http://download.osgeo.org/osgeo4w/osgeo4w-setup.exe 
  - select the the OGC Workshop when installing (It is part of the Web_Applications 
    category)
  

WORKSHOP CONTENT
================

NOTES:

- This package is designed for an ms4w based install, which uses the Apache Web Server (http://httpd.apache.org/).  MapServer with Microsoft IIS support is NOT be supported in this package.  You can configure ms4w with IIS support on your own if you wish, however.

OUTLINE
-------

- workshop will be combination of instruction, hands-on training and discussion
- workshop is not bound to outline below, i.e. if there are specific issues of importance throughout the workshop, they will be addressed

- Introduction
 - Web Services
 - Interoperability
- Applying OGC services using MapServer
 - WMS Server (Cascading)
 - WMS Client
 - WFS Server (Cascading)
 - WFS Client
 - SLD (Style layer descriptors and how to optimize their use)
 - Web Map Context Documents
 - Filter Encoding
 - WCS
- Future steps
- open discussion / forum

If you have any questions or comments, feel free to contact me.

