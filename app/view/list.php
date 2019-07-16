<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../static/common/js/layui/css/layui.css">
    <link rel="stylesheet" href="../../static/common/js/editor.md/css/editormd.min.css"/>
    <link rel="stylesheet" href="../../static/website/common/css/common.css">
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
        <div class="layui-col-md12">
            <?php include "../public/header.php"; ?>
        </div>
        <div class="layui-col-md12">
            <div class="layui-row layui-col-space30" id="lists"></div>
        </div>
        <div class="layui-col-md12">
            <?php include "../public/footer.php"; ?>
        </div>
    </div>
    <script>
        $.ajax({
            url: '../controller/list.php',
            type: 'POST',
            dataType: "json",
            success: function (res) {
                var data = res.data;
                var lists = [];
                for (var i = 0; i < data.length; i++) {
                    lists.push('<div class="layui-col-md3"><div class="layui-card">');
                    lists.push('<div class="layui-card-header">' + data[i].title + '</div>');
                    lists.push('<div class="layui-card-body"><div class="test-editormd-view">');
                    lists.push('<div name="test-editormd-markdown-doc">'+ data[i].content +'</div>')
                    lists.push('</div></div></div></div>');
                }
                $('#lists').html(lists.join(''));
            }
        });
    </script>
</div>
</body>
</html>