<?php
echo "hell world";
echo "这里创建文件 vi 文件名, git add 文件名跟踪";
namespace model;
include "model.php";
spl_autoload_reqister(function ($className)
{include str_replace("\\","/",$className.".php")});
use function model\
?>

