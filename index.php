<?php

use Aws\S3\S3Client;
use League\Flysystem\AwsS3v3\AwsS3Adapter;
use League\Flysystem\Filesystem;

require __DIR__ . '/vendor/autoload.php';

$credentials = new Aws\Credentials\Credentials('access_key', 'secret_key');

$client = new Aws\S3\S3Client([
  'endpoint' => 'http://localhost:9000',
  'credentials' => $credentials,
  'region' => 'us-west-2',
  'version' => 'latest',
  'use_path_style_endpoint' => true,
]);

// The internal adapter
$adapter = new League\Flysystem\AwsS3v3\AwsS3Adapter(
    $client,
    'my-bucket'
);

// The FilesystemOperator
$filesystem = new League\Flysystem\Filesystem($adapter);
$filesystem->addPlugin(new Etime\Flysystem\Plugin\AWS_S3\PresignedUrl());

$myFile = 'kitty.jpeg';

$url = $filesystem->getPresignedUrl($myFile);

echo $url;
