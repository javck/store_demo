<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Voyager;

class Element extends Model
{
    protected $fillable = ['i_mode','q_mode','video','title_pos','icon','position','pic','alt','url','url_txt','mode','page','title','subtitle' ,'content','sort','enabled','price'];

    public function getEnabled(){
        if ($this->enabled == '1') {
            return '是';
        }else{
            return '否';
        }
    }



    public function getPartContent(){
        if (strlen($this->content)>=30) {
            return mb_substr($this->content,0,25,"UTF-8") . "...";
        }else{
            return $this->content;
        }
    }

    public function getPicAttribute($value){
        if(substr( $value, 0, 4 ) === "http" || substr( $value, 0, 5 ) === "https" ){
            return $value;
        }else{
            return Voyager::image($value);
        }
    }

    public function getPicName(){
        $info = pathinfo($this->pic);
        $file_name =  basename($this->pic,'.'.$info['extension']);
        return $file_name;
    }

    public function getUrlAttribute($value)
    {
        if (isset($value)) {
            return $value;
        }else{
            return '#';
        }
    }

    /**
     * 限制查詢只包括某頁面的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param page 頁面
     */
    public function scopePage( $query , $page )
    {
        if ($page != 'none') {
            return $query->where('page', $page);
        }else{
            return $query;
        }

    }

    /**
     * 限制查詢模式為某個模式的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param mode 類型
     */
    //限制查詢模式為某個模式的工作。
    public function scopeMode( $query , $mode )
    {
        if ($mode != 'none') {
            return $query->where('mode', $mode);
        }else{
            return $query;
        }

    }

    /**
     * 限制查詢只位於某位置的元素。
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @param position 位置
     */
    public function scopePosition( $query , $position )
    {
        if ($position != 'none') {
            return $query->where('position', $position);
        }else{
            return $query;
        }

    }

    //基本查詢組合Scope
    public function scopeBasic( $query )
    {
        return $query->where('enabled',true)->orderBy('sort','asc');
    }
}
