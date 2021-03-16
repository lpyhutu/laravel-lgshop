<?php

namespace App\Encapsulation;

class CheckCode
{

    private $width;
    private $height;
    private $code;
    private $img;

    /**
     * @param int $width 宽
     * @param int $height 高
     * @return void
     */
    function __construct($width = 80, $height = 30)
    {
        $this->width = $width;
        $this->height = $height;
        $this->code = $this->createCode();
    }
    /**
     * @return string 获取验证码
     */
    function getCode()
    {
        return strtolower($this->code);
    }
    /**
     * @return void 创建画布
     */
    private function createBack()
    {
        $this->img = imagecreatetruecolor($this->width, $this->height);
        $bgcolor = imagecolorallocate($this->img, mt_rand(150, 255), mt_rand(150, 255), mt_rand(150, 255));
        imagefill($this->img, 0, 0, $bgcolor);
        $bordercolor = imagecolorallocate($this->img, 0, 0, 0);
        imagerectangle($this->img, 0, 0, $this->width - 1, $this->height - 1, $bordercolor);
    }
    /**
     * @return void 输出文字
     */
    private function outstring()
    {
        for ($index = 0; $index < strlen($this->code); $index++) {
            $x = 10 + 15 * $index;
            $char = $this->code[$index];
            $color = imagecolorallocate($this->img, mt_rand(0, 155), mt_rand(0, 155), mt_rand(0, 155));
            imagefttext($this->img, 20, mt_rand(-15, 15), $x, 25, $color, 'c://WINDOWS//Fonts//simsun.ttc', $char);
        }
    }
    /**
     * @return void 添加干扰素
     */
    private function setdisturbcolor()
    {
        //添加干扰点
        for ($num = 0; $num < 40; $num++) {
            $color = imagecolorallocate($this->img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
            imagesetpixel($this->img, mt_rand(0, 100), mt_rand(0, 30), $color);
        }
        //添加线条
        for ($num = 0; $num < 1; $num++) {
            $color = imagecolorallocate($this->img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
            imageline($this->img, 0, mt_rand(0, 30), 100, mt_rand(0, 28), $color);
        }
    }
    /**
     * @return void 输出图像
     */
    private function printimg()
    {
        if (imagetypes() & IMG_GIF) {
            header("Content-type: image/gif");
            imagegif($this->img);
        } elseif (function_exists("imagejpeg")) {
            header("Content-type: image/jpeg");
            imagegif($this->img);
        } elseif (imagetypes() & IMG_PNG) {
            header("Content-type: image/png");
            imagegif($this->img);
        } else {
            die("No image support in this PHP server");
        }
    }
    /**
     * 执行
     */
    function outimg()
    {
        $this->createback();
        $this->outstring();
        $this->setdisturbcolor();
        $this->printimg();
    }
    /**
     * @return string 创建验证码
     */
    private function createCode()
    {
        $str = "3456789abcdefghjkmnpqrstuvxyABCDEFGHJKLMNPQRSTWXY";
        $strNew = str_shuffle($str);
        $code = substr($strNew, 0, 4);
        return $code;
    }
}
