<?php

namespace App\Encapsulation;


class UploadPictures
{
    private $file;
    private $folderName;
    private $filename;
    /**
     * @param mixed $in_file 上传的文件
     * @param mixed $in_folderNmae 文件名一
     * @param mixed $in_filename 文件名二
     * @return void
     */
    function __construct($in_file, $in_folderNmae, $in_filename)
    {
        $this->file = $in_file;
        $this->folderName = $in_folderNmae;
        $this->filename = $in_filename;
    }
    /**
     * @return string 返回文件名一
     */
    function getFolderName()
    {
        return $this->folderName . "/" . date("Ym/d", time());
    }
    /**
     * @return string 文件上传路径
     */
    private function uploadPath()
    {
        return public_path() . '/' . $this->getFolderName();
    }
    /**
     * @return string 获取图片后缀
     */
    private function suffix()
    {
        return  strtolower($this->file->getClientOriginalExtension())  ?:  'png';
    }
    /**
     * @return string 获取文件名
     */
    function getFileName()
    {

        $filename = $this->filename . '_' . time() . '_' . rand(1, 100000) . '.' . $this->suffix();
        $this->file->move($this->uploadPath(), $filename);
        return $filename;
    }
}
