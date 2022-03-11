<?php

namespace DeathSatan\StrHelpers;

use Doctrine\Inflector\InflectorFactory;
use Doctrine\Inflector\Language;
use Overtrue\Pinyin\Pinyin;

class Helpers
{
    /**
     * 字符串全部转小写
     * @param string $str
     * @return string
     */
    public static function lowercase(string $string): string
    {
        return strtolower($string);
    }

    private static function inflector()
    {
        return InflectorFactory::createForLanguage(Language::ENGLISH)
                ->build();
    }

    /**
     * 字符串全部转大写
     * @param string $str
     * @return string
     */
    public static function uppercase(string $string):string
    {
        return strtoupper($string);
    }

    /**
     * 驼峰转蛇形
     * @param string $camelCaps
     * @return string
     */
    public static function caramelize(string $camelCaps): string
    {
        return self::inflector()->tableize($camelCaps);
    }

    /**
     * 下划线转大驼峰
     * @param string $string
     * @return string
     */
    public static function toClassify(string $string): string
    {
        return self::inflector()->Classify($string);
    }

    /**
     * 下划线转小驼峰
     * @param string $string
     * @return string
     */
    public static function toCamelize(string $string):string
    {
        return self::inflector()->camelize($string);
    }

    private static function PinYin()
    {
        return new Pinyin();
    }

    /**
     * 汉字转拼音
     * @param string $string
     * @param int $option
     * @return array
     */
    public static function toPinYinConvert(string $string,int $option = PINYIN_DEFAULT): array
    {
        return self::PinYin()->convert($string,$option);
    }

    /**
     * 汉字转拼音链接式
     * @param string $string
     * @param $delimiter
     * @param $option
     * @return string
     */
    public static function toPinYinPermalink(string $string,string $delimiter = '-',int $option = PINYIN_DEFAULT): string
    {
        return self::PinYin()->permalink($string,$delimiter,$option);
    }

    /**
     * 汉字转拼音首字母式
     * @param string $string
     * @param string $delimiter
     * @param int $option
     * @return string
     */
    public static function toPinYinAbbr(string $string,string $delimiter = '-',int $option = PINYIN_DEFAULT):string
    {
        return self::PinYin()->abbr($string,$delimiter,$option);
    }

    /**
     * 汉字转拼音(带字符整段)
     * @param string $string
     * @param string $delimiter
     * @param int $option
     * @return string
     */
    public static function toPinYinSentence(string $string,string $delimiter = '-',int $option = PINYIN_DEFAULT):string
    {
        return self::PinYin()->sentence($string,$delimiter,$option);
    }

    /**
     * 汉字转拼音(姓名)
     * @param string $string
     * @param int $option
     * @return array
     */
    public static function toPinYinName(string $string,int $option = PINYIN_DEFAULT): array
    {
        return self::PinYin()->name($string,$option);
    }

    /**
     * 随机生成字符串
     * @param int $rand
     * @return string
     */
    public static function random(int $rand = 32): string
    {
        return random_bytes($rand);
    }

    /**
     * 返回字符串中指定值最后一次出现后的所有内容
     * @param string $string
     * @param string $find
     * @return false|string
     */
    public static function afterLast(string $string,string $find):string
    {
        return substr($string,strrpos($string,$find));
    }

    /**
     * 将指定的字符串修改为以指定的值结尾的形式：
     * @param string $string
     * @param string $end
     * @return string
     */
    public static function finish(string $string,string $end): string
    {
        $end_count = strlen($end);
        $end_str = substr($string,0-$end_count);
        if ($end===$end_str){
            return $string;
        }else{
            return $string.$end;
        }
    }

    /**
     * 将给定的值添加到字符串的开始位置
     * @param string $string
     * @param string $start
     * @return string
     */
    public static function start(string $string,string $start):string
    {
        if (self::startWith($string,$start)){
            return $string;
        }else{
            return $start.$string;
        }
    }

    /**
     * 判断给定的字符串是否为给定值的开头
     * @param string $string
     * @param string $start
     * @return bool
     */
    public static function startWith(string $string,string $start):bool
    {
        $start_count = strlen($start);
        $start_str = substr($string,0,$start_count);
        return $start===$start_str;
    }

}