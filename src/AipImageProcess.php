<?php
/*
* Copyright (c) 2017 Baidu.com, Inc. All Rights Reserved
*
* Licensed under the Apache License, Version 2.0 (the "License"); you may not
* use this file except in compliance with the License. You may obtain a copy of
* the License at
*
* Http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
* WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
* License for the specific language governing permissions and limitations under
* the License.
*/
namespace BaiduAip;
use BaiduAip\lib\AipBase;
class AipImageProcess extends AipBase {

    /**
     * 图像无损放大 image_quality_enhance api url
     * @var string
     */
    private $imageQualityEnhanceUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/image_quality_enhance';

    /**
     * 图像去雾 dehaze api url
     * @var string
     */
    private $dehazeUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/dehaze';

    /**
     * 图像对比度增强 contrast_enhance api url
     * @var string
     */
    private $contrastEnhanceUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/contrast_enhance';

    /**
     * 黑白图像上色 colourize api url
     * @var string
     */
    private $colourizeUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/colourize';

    /**
     * 拉伸图像恢复 stretch_restore api url
     * @var string
     */
    private $stretchRestoreUrl = 'https://aip.baidubce.com/rest/2.0/image-process/v1/stretch_restore';


    /**
     * 风格转换
     * @var string
     */
    private $styleTrans = "https://aip.baidubce.com/rest/2.0/image-process/v1/style_trans";

    /**
     * 图像修复
     * @var string
     */
    private $inpainting = "https://aip.baidubce.com/rest/2.0/image-process/v1/inpainting";

    /**
     * 图像清晰度增强
     * @var string
     */
    private $imageDefinitionEnhance = "https://aip.baidubce.com/rest/2.0/image-process/v1/image_definition_enhance";

    /**
     *人像动漫化
     * @var string
     */
    private $selfieAnime = "https://aip.baidubce.com/rest/2.0/image-process/v1/selfie_anime";

    /**
     * 天空分割
     * @var string
     */
    private $skySeg = "https://aip.baidubce.com/rest/2.0/image-process/v1/sky_seg";

    /**
     * @var string 图像色彩增强
     */
    private $colorEnhanceUrl = "https://aip.baidubce.com/rest/2.0/image-process/v1/color_enhance";

    private $removeMoireV1Url = 'https://aip.baidubce.com/rest/2.0/image-process/v1/remove_moire';
    private $customizeStylizationV1Url = 'https://aip.baidubce.com/rest/2.0/image-process/v1/customize_stylization';
    private $docRepairV1Url = 'https://aip.baidubce.com/rest/2.0/image-process/v1/doc_repair';
    private $denoiseV1Url = 'https://aip.baidubce.com/rest/2.0/image-process/v1/denoise';


    /**
     * 图像无损放大接口
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/ok3bclnkg
     */
    public function imageQualityEnhance($image, $options=array()){

        $data = array();
        
        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->request($this->imageQualityEnhanceUrl, $data);
    }

    /**
     * 图像去雾接口
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/8k3bclp1l
     */
    public function dehaze($image, $options=array()){

        $data = array();
        
        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->request($this->dehazeUrl, $data);
    }

    /**
     * 图像对比度增强接口
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/ek3bclnzn
     */
    public function contrastEnhance($image, $options=array()){

        $data = array();
        
        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->request($this->contrastEnhanceUrl, $data);
    }

    /**
     * 黑白图像上色接口
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/Bk3bclns3
     */
    public function colourize($image, $options=array()){

        $data = array();
        
        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->request($this->colourizeUrl, $data);
    }

    /**
     * 拉伸图像恢复接口
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/Rk3bclp97
     */
    public function stretchRestore($image, $options=array()){

        $data = array();
        
        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->request($this->stretchRestoreUrl, $data);
    }


    /**
     * 人像动漫化
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/Mk4i6olx5
     */
    public function selfieAnime($image, $options=array()){

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->request($this->selfieAnime, $data);
    }


    /**
     * 图像清晰度增强
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/5k4i6mzqk
     */
    public function imageDefinitionEnhance($image, $options=array()){

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->request($this->imageDefinitionEnhance, $data);
    }


    /**
     * 图像风格转换
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/xk3bclo77
     */
    public function __styleTrans($image, $options=array()){

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->request($this->styleTrans, $data);
    }


    /**
     * 天空分割
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/Xk8a1ajdw
     */
    public function skySeg($image, $options=array()){

        $data = array();

        $data['image'] = base64_encode($image);

        $data = array_merge($data, $options);

        return $this->request($this->skySeg, $data);
    }


    /**
     * 图像修复
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/ok3bclome
     */
    public function inpaintingByMask($image, $rectangle, $options=array()){

        $data = array();

        $data['image'] = base64_encode($image);
        $data['rectangle'] = $rectangle;

        $data = array_merge($data, $options);

        return $this->request($this->inpainting, json_encode($data));
    }

    /**
     * 图像色彩增强
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/Tk9l4kll7
     */
    public function colorEnhance($image, $options=array()) {
        $data = array();

        $data['image'] = base64_encode($image);
        $data = array_merge($data, $options);

        return $this->request($this->colorEnhanceUrl, $data);
    }

    /**
     * 图像色彩增强
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/Tk9l4kll7
     */
    public function colorEnhanceUrl($url, $options=array())
    {
        $data = array();

        $data = array_merge($data, $options);
        $data['url'] = $url;

        return $this->request($this->colorEnhanceUrl, $data);
    }

    /**
     * 图片去摩尔纹
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/ql4wdlnc0
     */
    public function removeMoireV1($image, $options=array()){
        $data = array();
        $data['image'] = base64_encode($image);
        $data = array_merge($data, $options);
        return $this->request($this->removeMoireV1Url, $data);
    }

    /**
     * 图片去摩尔纹 - url
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/ql4wdlnc0
     */
    public function removeMoireV1Url($url, $options=array()){
        $data = array();
        $data['url'] = $url;
        $data = array_merge($data, $options);
        return $this->request($this->removeMoireV1Url, $data);
    }


    /**
     * 图片去摩尔纹 - pdf
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/ql4wdlnc0
     */
    public function removeMoireV1Pdf($pdf, $options=array()){
        $data = array();
        $data['pdf_file'] = base64_encode($pdf);
        $data = array_merge($data, $options);
        return $this->request($this->removeMoireV1Url, $data);
    }


    /**
     * 图像风格自定义
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/al50vf6bq
     */
    public function customizeStylizationV1($image, $options=array()){
        $data = array();
        $data['image'] = base64_encode($image);
        $data = array_merge($data, $options);
        return $this->request($this->customizeStylizationV1Url, $data);
    }

    /**
     * 图像风格自定义 - url
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/al50vf6bq
     */
    public function customizeStylizationV1Url($url, $options=array()){
        $data = array();
        $data['url'] = $url;
        $data = array_merge($data, $options);
        return $this->request($this->customizeStylizationV1Url, $data);
    }

    /**
     * 文档图片去底纹
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/Nl6os53ab
     */
    public function docRepairV1($image, $options=array()){
        $data = array();
        $data['image'] = base64_encode($image);
        $data = array_merge($data, $options);
        return $this->request($this->docRepairV1Url, $data);
    }

    /**
     * 文档图片去底纹 - url
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/Nl6os53ab
     */
    public function docRepairV1Url($url, $options=array()){
        $data = array();
        $data['url'] = $url;
        $data = array_merge($data, $options);
        return $this->request($this->docRepairV1Url, $data);
    }

    /**
     * 图像去噪
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/Tl78sby7g
     */
    public function denoiseV1($image, $option, $options=array()){
        $data = array();
        $data['image'] = base64_encode($image);
        $data['option'] = $option;
        $data = array_merge($data, $options);
        return $this->request($this->denoiseV1Url, $data);
    }

    /**
     * 图像去噪 - url
     * 接口使用说明文档: https://ai.baidu.com/ai-doc/IMAGEPROCESS/Tl78sby7g
     */
    public function denoiseV1Url($url, $option, $options=array()){
        $data = array();
        $data['url'] = $url;
        $data['option'] = $option;
        $data = array_merge($data, $options);
        return $this->request($this->denoiseV1Url, $data);
    }


}