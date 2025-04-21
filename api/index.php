<?php
$trackId = $_GET['trackid'] ?? 'not_provided';
$format = $_GET['format'] ?? 'text';

echo "Track ID: $trackId\n";
echo "Format: $format\n";