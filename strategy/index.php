<?php

require_once 'autoloader.php';

$strategyRar = new \Strategy\CompressRar();
$strategyTar = new \Strategy\CompressTar();
$strategyZip = new \Strategy\CompressZip();

$compressContext = new \Strategy\CompressContext($strategyRar);
$compressContext->compress('DIR/FILES');
echo "\n";

$compressContext->setCompressStrategy($strategyTar);
$compressContext->compress('DIR/FILES');
echo "\n";

$compressContext->setCompressStrategy($strategyZip);
$compressContext->compress('DIR/FILES');
echo "\n";
