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

```php
  //demo 文字识别
  use BaiduAip\AipOcr;
  $client = new AipOcr($appId, $appKey, $appSecret);
  $image = file_get_contents('example.jpg');
  
  // 调用通用文字识别, 图片参数为本地图片
  $client->basicGeneral($image);

  // 如果有可选参数
  $options = array();
  $options["language_type"] = "CHN_ENG";
  $options["detect_direction"] = "true";
  $options["detect_language"] = "true";
  $options["probability"] = "true";

  // 带参数调用通用文字识别, 图片参数为本地图片
  $client->basicGeneral($image, $options);
  $url = "https//www.x.com/sample.jpg";

  // 调用通用文字识别, 图片参数为远程url图片
  $client->basicGeneralUrl($url);

  // 如果有可选参数
  $options = array();
  $options["language_type"] = "CHN_ENG";
  $options["detect_direction"] = "true";
  $options["detect_language"] = "true";
  $options["probability"] = "true";

  // 带参数调用通用文字识别, 图片参数为远程url图片
  $client->basicGeneralUrl($url, $options);
```


### 其他用法请参阅 [https://ai.baidu.com/ai-doc/OCR/gkibizxd5]


