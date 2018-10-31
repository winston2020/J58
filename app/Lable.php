<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class Lable extends Model
{

    public static function BcKeyword($count=null)
    {
        $filearr = Storage::files('data/BcKeyword');
        $data =  file(public_path(array_random($filearr)));
        $res = array_random($data,$count);
        if (is_array($res)){
            foreach ($res as $item){
                $newres[]=self::clear($item);
            }
        }else{
            $newres = self::clear($res);
        }
        return $newres;
    }

    public static function Title($count=null)
    {
        $filearr = Storage::files('data/Title');
        $data =  file(public_path(array_random($filearr)));
        $res = array_random($data,$count);
        if (is_array($res)){
            foreach ($res as $item){
                $newres[]=self::clear($item);
            }
        }else{
            $newres = self::clear($res);
        }
        return $newres;
    }

    public static function City($count=null)
    {
        $filearr = Storage::files('data/City');
        $data =  file(public_path(array_random($filearr)));
        $res = array_random($data,$count);
        if (is_array($res)){
            foreach ($res as $item){
                $newres[]=self::clear($item);
            }
        }else{
            $newres = self::clear($res);
        }
        return $newres;
    }

    public static function Content($count=null)
    {
        $filearr = Storage::files('data/Content');
        $data =  file(public_path(array_random($filearr)));
        $res = array_random($data,$count);
        if (is_array($res)){
            foreach ($res as $item){
                $newres[]=self::clear($item);
            }
        }else{
            $newres = self::clear($res);
        }
        return $newres;
    }

    public static function ImgUrl($count=null)
    {
        $filearr = Storage::files('data/Img');
        $data =  array_random($filearr);
        return $data;
    }

    public static function Nav($count=null)
    {
        $filearr = Storage::files('data/Nav');
        $data =  file(public_path(array_random($filearr)));
        $res = array_random($data,$count);
        if (is_array($res)){
            foreach ($res as $item){
                $newres[]=self::clear($item);
            }
        }else{
            $newres = self::clear($res);
        }
        return $newres;
    }

    public static function Author($count=null)
    {
        $filearr = Storage::files('data/Author');
        $data =  file(public_path(array_random($filearr)));
        $res = array_random($data,$count);
        if (is_array($res)){
            foreach ($res as $item){
                $newres[]=self::clear($item);
            }
        }else{
            $newres = self::clear($res);
        }
        return $newres;
    }

    public static function 泛目录格式链接($count=null)
    {
        $filearr = Storage::files('data/NavLink');
        $data =  file(public_path(array_random($filearr)));
        $res = array_random($data,$count);
        if (is_array($res)){
            foreach ($res as $item){
                $newres[]=self::clear($item);
            }
        }else{
            $newres = self::clear($res);
        }
        return $newres;
    }

    public static function LinkUrl($count=null)
    {
        $filearr = Storage::files('data/Link');
        $data =  file(public_path(array_random($filearr)));
        $res = array_random($data,$count);
        if (is_array($res)){
            foreach ($res as $item){
                $newres[]=self::clear($item);
            }
        }else{
            $newres = self::clear($res);
        }
        return $newres;
    }

    public static function NormalKeyword($count=null)
    {
        $filearr = Storage::files('data/Normalkeyword');
        $data =  file(public_path(array_random($filearr)));
        $res = array_random($data,$count);
        if (is_array($res)){
            foreach ($res as $item){
                $newres[]=self::clear($item);
            }
        }else{
            $newres = self::clear($res);
        }
        return $newres;
    }

    public static function 随机时间(){
        $start_time = date("Y-m-d H:i:s");
        $end_time = date("Y-m-d",strtotime("-1 day"));
        $start_time = strtotime($start_time);
        $end_time = strtotime($end_time);
        return date('Y-m-d H:i:s', mt_rand($start_time,$end_time));
    }

    public static function clear($str)
    {
        return str_replace(array("\r\n", "\r", "\n" ,"\t"), "", $str);
    }

}
