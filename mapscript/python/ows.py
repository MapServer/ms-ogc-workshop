#!/usr/bin/env python

import sys
import mapscript

req = mapscript.OWSRequest()
req.loadParams()

mapscript.msIO_installStdoutToBuffer()

map.OWSDispatch( req )

print 'Content-type: text/plain'
print
print mapscript.msIO_getStdoutBufferString()