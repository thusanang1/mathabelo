<?php
// Run once on a PHP host with outbound HTTPS enabled: /download-assets.php
$files = [
 'cattle-processing.png' => 'https://mathabelo.vercel.app/images/cattle-processing.png',
 'goat-sheep-processing.png' => 'https://mathabelo.vercel.app/images/goat-sheep-processing.png',
 'pork-processing.png' => 'https://mathabelo.vercel.app/images/pork-processing.png',
 'dog-food.png' => 'https://mathabelo.vercel.app/images/dog-food.png',
 'limitless-foods-logo.jpeg' => 'https://hebbkx1anhila5yf.public.blob.vercel-storage.com/WhatsApp%20Image%202026-10-28%20at%204.11.23%20PM-QJT0dxSDon2YsUwNazBKUgwRkr7T0f.jpeg'
];
$dir = __DIR__ . '/assets/images/';
header('Content-Type: text/plain; charset=utf-8');
foreach ($files as $name => $url) {
  $context = stream_context_create(['http'=>['timeout'=>25,'user_agent'=>'MathabeloAssetInstaller/1.0'],'ssl'=>['verify_peer'=>true,'verify_peer_name'=>true]]);
  $data = @file_get_contents($url, false, $context);
  if ($data !== false && strlen($data) > 1000) {
    file_put_contents($dir . $name, $data);
    echo "Downloaded: {$name}\n";
  } else echo "Could not download: {$name}\n";
}
echo "\nIf all files downloaded, update image references to the .png files if preferred. Remove this installer after use.\n";
