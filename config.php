<?php
/**
 * EasyImage - 简单图床配置
 *
 * @author icret
 * @email  lemonim@qq.com
 * @Github  https://github.com/icret/easyImages
 * @Review 2019-5-21 13:05:20
 * 上传后请打开check.php先检查服务器配置，更改密码等操作
 */

// 设置html为utf8
header('Content-Type:text/html;charset=utf-8');
//将时区设置为上海时区
ini_set('date.timezone', 'Asia/Shanghai');
// 修改内存限制 根据服务器配置选择，低于128M容易出现上传失败，你懂得图片挺占用内存的
ini_set('memory_limit', '512M');
// 定义当前目录
define('APP_ROOT', __DIR__);

$config = array(
    // 网站标题
     'title' => '简单图床 - EasyImage',
    // 网站关键字
     'keywords' => '简单图床,easyimage,无数据库图床,PHP多图长传程序,自适应页面,HTML5,markdown,bbscode,一键复制',
    // 网站描述
     'description' => '简单图床EasyImage是一款支持多文件上传的无数据库图床,可以完美替代PHP多图上传程序，最新html5自适应页面兼容手机电脑，上传后返回图片直链，markdown图片，论坛贴图bbscode链接，简单方便支持一键复制，支持多域名，api上传。',
    // 网站公告
     'tips' => ' 单个文件限制5M，每次最多上传30张图片,本网站仅做演示用，不对图片负任何责任。',
    // 当前域名,末尾不加"/" 如果是异域上传请修改为当前异域域名
     'domain' => 'https://img.545141.com',
    // 存储路径 前后要加"/" 如更改此目录，需要同步修改tinyfilemanager.php中的$directories_users路径
     'path' => '/i/',
    // 最大上传限制 默认为5m 请使用工具转换mb http://www.bejson.com/convert/filesize/
     'maxSize' => 5242880,
    // 是否开启登录上传 开启:true 关闭false
     'mustLogin' => false,
    // 登录密码 此密码非管理密码
     'password' => '7080',
    // 开启管理 开启后务必修改密码 修改方式请见read.php
     'tinyfilemanager' => true,
    // 是否开启API上传
     'apiStatus' => false,
    // 是否开启异域上传 开启true 关闭 false
     'crossdomain' => false,
    // 异域上传域名 末尾需要加'/'
     'CDomains' => 'https://img.545141.com/crossdomain/',
    // 是否开启水印:0关闭，1文字水印，2图片水印 动态gif不能添加水印
     'watermark' => 1,
    // 水印文字内容
     'waterText' => '简单图床 img.545141.com',
    /**
     * 水印位置
     * 0：随机位置，在1~8之间随机选取一个位置
     * 1：顶部居左 2：顶部居中 3：顶部居右 4：左边居中
     * 5：图片中心 6：右边居中  7：底部居左 8：底部居中 9：底部居右
     */
    'waterPosition' => 8,
    // 水印文字颜色 rgba 末尾为透明度0-127 0为不透明
     'textColor' => '47,79,79,0',
    // 水印文字大小
     'textSize' => 16,
    // 字体路径 如果想改变字体，请选择支持中文的 gb2312
     'textFont' => APP_ROOT . '/public/static/hkxzy.ttf',
    // 图片水印路径 支持GIF,JPG,BMP,PNG和PNG alpha
     'waterImg' => 'public/static/watermark.png',
    // 转换图片为指定格式 可选：''|'png'|'jpeg'|'gif'|'bmp';默认值：''
     'imgConvert' => '',
    // 是否通过缩放来压缩，如果要保持源图比例，把参数$percent保持为1，范围 0.1-1 0为关闭
     // 即使原比例压缩，也可大幅度缩小。如果缩小比例，则体积会更小。
     'compress' => 0.99,
    // gif和jpeg的压缩质量 压缩等级0-100，压缩后1最小，100最大
    'imgGifJpgWebp'=> 85,
    // png的压缩质量 压缩等级0-9，压缩后9最小，0最大
    'imagepng' => 3,
    //最大宽度
     'maxWidth' => 10240,
    // 最大高度
     'maxHeight' => 10240,
    // 允许上传的最小宽度
     'minWidth' => 5,
    // 允许上传的最小高度
     'minHeight' => 5,
    // 等比例缩小图片 宽度和高度请设置 image_x image_y 开启true，关闭false 关闭下mage_x和image_y设置不生效
     'imgRatio' => false,
    // 缩减的最大高度
     'image_x' => 1024,
    // 缩减的最大宽度
     'image_y' => 1024,
    // 开启静态文件CDN 开启true 关闭false
     'static_cdn' => false,
    // 开启顶部广告 如果想添加或修改广告请到 public/static/ad_top.html
     'ad_top' => false,
    //  开启底部广告 如果想添加或修改广告请到 public/static/ad_bot.html
     'ad_bot' => false,
    'Version' => '2.0.1.9',
);
