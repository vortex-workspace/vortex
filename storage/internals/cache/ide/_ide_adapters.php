<?php 
/** @noinspection ALL */
/** @formatter:off */
/** @phpcs:ignoreFile */

namespace Stellar\Adapters {
    /** @mixin \Stellar\Storage */
    class StorageAdapter {
                public static function fromS3(null|string $drive = null, null|string $bucket = null, null|string $region = null, null|string $endpoint = null, null|bool $use_ssl = null): \AwsStorage\S3Drive
        {
            /** @var \Stellar\Adapters\StorageAdapter $adapter **/
            return $adapter->fromS3($drive, $bucket, $region, $endpoint, $use_ssl);
        }

    }
}


