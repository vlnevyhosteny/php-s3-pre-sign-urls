# S3 Cloudfront Pre-Sign URLs

## Start

Install deps: 

```console
$ compose i
```

Start MinIO:

```console
$ docker-compose up -d
```

Start app: 

```console
$ php -S 127.0.0.1:8000
```

## TODO: 

 - `sistemi-etime/flysystem-plugin-aws-s3-v3` should be updated to support latest version of `league/flysystem` 
 - setup CloudFront according to https://docs.aws.amazon.com/sdk-for-php/v3/developer-guide/cloudfront-example-signed-url.html
