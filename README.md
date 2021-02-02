# BaiduAip SDK For Composer
### BaiduAidSDK Composer版
**Composer安装：**
```php
  composer require efarsoft/baidu-aip
```


```php
  use BaiduAip\AipOcr;

    $client = new AipOcr($appId, $appKey, $appSecret);
    $image = file_get_contents( './test.jpg'); 
    $result = $client->businessLicense($image);
    var_dump( $result);

```
### 其他用法请参阅 [https://ai.baidu.com/ai-doc/OCR/gkibizxd5]


