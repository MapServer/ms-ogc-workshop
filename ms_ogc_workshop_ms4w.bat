REM run this file on the svn files to prepare for an ms4w release.

textreplace -sf httpd_ms_ogc_workshop.conf -df httpd_ms_ogc_workshop.conf -map @osgeo4w@ /ms4w

textreplace -sf client\gml\demo.map -df client\gml\demo.map  -map @osgeo4w@ /ms4w
textreplace -sf service\config.map -df service\config.map -map @osgeo4w@ /ms4w
textreplace -sf service\exercise.map -df  service\exercise.map  -map @osgeo4w@ /ms4w
textreplace -sf service\exercise_answer.map -df service\exercise_answer.map -map @osgeo4w@ /ms4w
textreplace -sf service\config.map -df service\config.map -map @osgeo4w@ /ms4w
textreplace -sf common\imagepath.inc -df common\imagepath.inc -map @osgeo4w@ /ms4w

textreplace -sf index.html -df index.html -map @osgeo4w@ /ms4w
textreplace -sf client\default\demo_init.html -df client\default\demo_init.html -map @osgeo4w@ /ms4w
textreplace -sf client\gml\demo_init.html -df client\gml\demo_init.html -map @osgeo4w@ /ms4w
textreplace -sf client\webservices\demo_init.html -df client\webservices\demo_init.html -map @osgeo4w@ /ms4w
textreplace -sf client\wfs\demo_init.html -df client\wfs\demo_init.html -map @osgeo4w@ /ms4w
textreplace -sf client\wfs-filter\demo_init.html -df client\wfs-filter\demo_init.html -map @osgeo4w@ /ms4w
textreplace -sf client\wfs-filter\demo_init_answer.html  -df client\wfs-filter\demo_init_answer.html -map @osgeo4w@ /ms4w
textreplace -sf client\wms\demo_init.html  -df client\wms\demo_init.html -map @osgeo4w@ /ms4w
textreplace -sf client\wms\satellite\demo_init.html  -df client\wms\satellite\demo_init.html -map @osgeo4w@ /ms4w
textreplace -sf client\wms\satellite\demo_init_answer.html  -df client\wms\satellite\demo_init_answer.html -map @osgeo4w@ /ms4w
textreplace -sf filter\index.html  -df  filter\index.html  -map @osgeo4w@ /ms4w
textreplace -sf service\index.html  -df  service\index.html -map @osgeo4w@ /ms4w