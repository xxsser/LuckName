<?php

class textToArr
{
    protected $path;

    public function setTextPath($str){
        $this->path = $str;
    }

    public function getArray(){
        if(file_exists($this->path)){
            $arr = file($this->path);
            return $arr;
        }else{
            return false;
        }
    }
}