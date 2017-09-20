<?php

/**
 * @copyright 2017 Webrealisierung GmbH
 *
 * @license LGPL-3.0+
 */

/**
 * @author Daniel Steuri <mail@webrealisierung.ch>
 * @package Wr\ColumnsBundle
 */
class WrColumnsService extends \Frontend
{
    private $contr_width = 0;
    private $contr_pid;
    private $clear="";
    public function addContentWidth($objElement, $strBuffer){

        if($this->contr_pid && $this->contr_pid !== $objElement->pid){
            $this->contr_width=0;
        }
        $this->contr_pid = $objElement->pid;
        if($objElement->content_width==="full") {
            $this->contr_width = 0;
            $this->clear="wr_clear";
        }elseif($objElement->content_width==="three-quarters"){
            $this->contr_width += 75;
            $this->checkArticleWidth();
        }elseif($objElement->content_width==="two-thirds"){
            $this->contr_width += 67;
            $this->checkArticleWidth();
        }elseif($objElement->content_width==="half"){
            $this->contr_width += 50;
            $this->checkArticleWidth();
        }elseif($objElement->content_width==="third"){
            $this->contr_width += 33;
            $this->checkArticleWidth();
        }elseif($objElement->content_width==="quarter"){
            $this->contr_width += 25;
            $this->checkArticleWidth();
        }else{
            $this->contr_width = 0;
            $this->clear="wr_clear";
        }
        $strBuffer =  preg_replace('/(class=(?:"([^"]+)"|\'([^\']+)\'))/','class="$2 '.$objElement->content_width.' '.$objElement->content_orientation.' '.$this->clear.'"',$strBuffer,1);
        return $strBuffer;
    }
    public function addArticleWidth($objData){
        $arrCSS = deserialize($objData->cssID, true);
        if(strlen($objData->article_fullwidth)){
            $arrCSS[1] =  trim($arrCSS[1] . " full");
        }
        $arrCSS[1] = trim($arrCSS[1] . " " . $objData->article_bg_color);
        $objData->cssID = serialize($arrCSS);
    }
    private function checkArticleWidth(){
        if($this->contr_width>100){
            $this->clear="wr_clear";
            $this->contr_width += -100;
        }
        /*elseif($this->contr_width===0){
            $this->clear="wr_clear";
        }*/else{
            $this->clear="";
        }
    }
}

