<?php
require 'vendor/autoload.php';
use dflydev\markdown\MarkdownParser;
$markdownParser = new MarkdownParser();
echo $markdownParser->transformMarkdown("[GOOGLE](https://google.com)");
?>