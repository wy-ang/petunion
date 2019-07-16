<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../static/common/js/layui/css/layui.css">
    <link rel="stylesheet" href="../../static/common/js/editor.md/css/editormd.min.css" />
    <link rel="stylesheet" href="../../static/website/common/css/common.css">
    <link rel="stylesheet" href="../../static/website/common/css/article.css">
    <script src="../../static/common/js/jquery/jquery.min.js"></script>
    <script src="../../static/common/js/layui/layui.js"></script>
    <script src="../../static/common/js/editor.md/lib/marked.min.js"></script>
    <script src="../../static/common/js/editor.md/lib/prettify.min.js"></script>
    <script src="../../static/common/js/editor.md/lib/raphael.min.js"></script>
    <script src="../../static/common/js/editor.md/lib/underscore.min.js"></script>
    <script src="../../static/common/js/editor.md/lib/sequence-diagram.min.js"></script>
    <script src="../../static/common/js/editor.md/lib/flowchart.min.js"></script>
    <script src="../../static/common/js/editor.md/lib/jquery.flowchart.min.js"></script>
    <script src="../../static/common/js/editor.md/editormd.min.js"></script>
</head>
<body>
<div class="layui-fluid">
    <div class="layui-row">
        <?php include "../public/header.php"; ?>
        <div class="layui-col-md8 layui-col-md-offset2 article">
            <div id="test-editormd-view">
                <h2 id="title"></h2>
                <textarea style="display:none;" name="test-editormd-markdown-doc">###Hello world!</textarea>
            </div>
        </div>
        <?php include "../public/footer.php"; ?>
    </div>
</div>
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
            var data = res.data;
            $('#title').html(data.title);
            editormd.markdownToHTML("test-editormd-view", {
                markdown        : data.content ,
                htmlDecode      : "style,script,iframe",
                tocm            : true,
                emoji           : true,
                taskList        : true,
                tex             : true,  // 默认不解析
                flowChart       : true,  // 默认不解析
                sequenceDiagram : true,  // 默认不解析
            });

        }
    });
</script>
</body>
</html> 