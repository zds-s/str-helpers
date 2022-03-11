# php字符串常用操作封装库
## 介绍

---
将常用的一些字符串操作封装到一起方便调用

---

## 安装

---
```shell
# -vvv是方便为了看下载进度
composer require death_satan/str-helpers -vvv
```
---

## 方法列表

| 方法名               | 参数                                                                  | 作用                    | 创建时间        |
|-------------------|---------------------------------------------------------------------|-----------------------|-------------|
| lowercase         | string $string                                                      | 字符串全部转小写              | 2022-03-11  |
| uppercase         | string $string                                                      | 字符串全部转大写              | 2022-03-11  |
| caramelize        | string $camelCaps                                                   | 驼峰转蛇形                 | 2022-03-11  |
| toClassify        | string $string                                                      | 下划线转大驼峰               | 2022-03-11  |
| toCamelize        | string $string                                                      | 下划线转小驼峰               | 2022-03-11  |
| toPinYinConvert   | string $string,int $option = PINYIN_DEFAULT                         | 汉字转拼音                 | 2022-03-11  |
| toPinYinPermalink | string $string,string $delimiter = '-',int $option = PINYIN_DEFAULT | 汉字转拼音链接式              | 2022-03-11  |
| toPinYinAbbr      | string $string,string $delimiter = '-',int $option = PINYIN_DEFAULT | 汉字转拼音首字母式             | 2022-03-11  |
| toPinYinSentence  | string $string,string $delimiter = '-',int $option = PINYIN_DEFAULT | 汉字转拼音(带字符整段)          | 2022-03-11  |
| toPinYinName      | string $string,int $option = PINYIN_DEFAULT                         | 汉字转拼音(姓名)             | 2022-03-11  |
| random            | int $rand = 32                                                      | 随机生成字符串               | 2022-03-11  |
| afterLast         | string $string,string $find                                         | 返回字符串中指定值最后一次出现后的所有内容 | 2022-03-11  |
| finish            | string $string,string $end                                          | 将指定的字符串修改为以指定的值结尾的形式： | 2022-03-11  |
| start             | string $string,string $start                                        | 将给定的值添加到字符串的开始位置      | 2022-03-11  |
| startWith         | string $string,string $start                                        | 判断给定的字符串是否为给定值的开头     | 2022-03-11  |



