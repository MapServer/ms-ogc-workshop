
$Id: README.txt,v 1.1.1.1 2005-12-29 19:06:35 tkralidi Exp $

MapServer and OGC Web Services Workshop
=======================================

Contact

Tom Kralidis
Senior Systems Scientist
Environment Canada
+01-905-336-4409
tom.kralidis@ec.gc.ca

INSTALLATION -- UNIX
--------------------

* Note that this UNIX support has not been extensively tested.  If you find any issues, please email me.

1./

- download this zipfile (latest is always at: http://devgeo.cciw.ca/ms_ogc_workshop/index.html)
- unzip http://devgeo.cciw.ca/ms_ogc_workshop/ms_ogc_workshop.zip into the root of your file structure, i.e.:

$ lwp-download http://devgeo.cciw.ca/ms_ogc_workshop/ms_ogc_workshop.zip /tmp/ms_ogc_workshop.zip
$ unzip /tmp/ms_ogc_workshop.zip

The above package will unzip into install into the /ms4w directory structure.

2./ Include the file /ms4w/http.d/httpd_ms_ogc_workshop.conf in your Apache configuration:

i.e. in your httpd.conf file:

include /ms4w/httpd.d/httpd_ms_ogc_workshop.conf

You should then be able to open up the project homepage, at:

http://127.0.0.1/ms_ogc_workshop/index.html


INSTALLATION -- WINDOWS
-----------------------

1./

You will require the MapServer for Windows (MS4W) package.  The downloads page is at:

http://www.maptools.org/ms4w/index.phtml?page=downloads.html

a./
- download the ms4w 1.2 zipfile: http://www.maptools.org/dl/ms4w/ms4w_1.2.zip
- unzip http://devgeo.cciw.ca/ms_ogc_workshop/ms_ogc_workshop.zip into the root of your drive (e.g. C:\)
 - make sure "Use Folder Names" is checked

The above package will install MapServer software, as well as an instance of the Apache Web Server.  At this point, you can run C:\ms4w\Apache\bin\Apache.exe, which will start the web server, and point your web browser to http://127.0.0.1/, and you will see the ms4w homepage with some links.

b./
- download this zipfile (latest is always at: http://devgeo.cciw.ca/ms_ogc_workshop/index.html)
  - http://devgeo.cciw.ca/ms_ogc_workshop/ms_ogc_workshop.zip
- unzip into the root of your drive (e.g. C:\)
 - make sure "Use Folder Names" is checked

The above package will install into the /ms4w directory structure.

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
