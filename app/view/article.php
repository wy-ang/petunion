<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../static/common/js/layui/css/layui.css">
    <link rel="stylesheet" href="../../static/common/js/highlight/styles/monokai-sublime.css">
    <link rel="stylesheet" href="../../static/website/common/css/common.css">
    <script src="../../static/common/js/jquery/jquery.min.js"></script>
    <script src="../../static/common/js/layui/layui.js"></script>
    <script src="../../static/common/js/highlight/highlight.min.js"></script>
    <script src="../../static/common/js/marked/marked.js"></script>
</head>
<body>
<?php include "../public/header.php"; ?>
<div id="content"></div>
<?php include "../public/footer.php"; ?>
<script>
    function GetQueryString(name) {
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        var r = window.location.search.substr(1).match(reg);
        if (r != null) return unescape(r[2]);
        return null;
    }

    var id = GetQueryString('id');
    $.ajax({
        url: '../controller/selectArticle.php',
        type: 'POST',
        dataType: "json",
        data: {
            id: id
        },
        success: function (res) {
            var content = res.data.content;
            $('#content').html(content);
            $('#content').html(marked(content, {
                highlight: function (code) {
                    return hljs.highlightAuto(code).value;
                }
            }));

        }
    });
</script>
</body>
</html> 