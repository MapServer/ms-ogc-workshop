#!/usr/bin/perl

use strict;
use warnings;
use mapscript;

my $req = new mapscript::OWSRequest() or die "$!\n";

$req->loadParams();

my $map = new mapscript::mapObj() or die "$!\n";

$map->msIO_installStdoutToBuffer();

$map->OWSDispatch( $req );

print "Content-type: text/plain\n\n";
print "$map->msIO_getStdoutBufferString()";