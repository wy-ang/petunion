<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>随笔</title>
    <link rel="stylesheet" href="../../static/common/js/layui/css/layui.css">
    <link rel="stylesheet" href="../../static/website/common/css/common.css">
    <link rel="stylesheet" href="../../static/website/common/css/addArticle.css">
    <link rel="stylesheet" href="../../static/common/js/highlight/styles/monokai-sublime.css">
    <script src="../../static/common/js/jquery/jquery.min.js"></script>
    <script src="../../static/common/js/highlight/highlight.min.js"></script>
    <script src="../../static/common/js/marked/marked.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
</head>
<body>
<div class="markdown layui-fluid">
    <?php include "../public/header.php"; ?>
    <div class="layui-row">
        <div class="layui-col-md6">
            <form class="textarea">
                <input type="text" name="title" id="title"/>
                <textarea name="content" id="textarea" cols="30" rows="10" placeholder="# 来写下你的文章吧"></textarea>
                <button type="button" class="layui-btn" id="submit">发布文章</button>
            </form>
        </div>
        <div class="layui-col-md6">
            <div id="content" class="content"></div>
        </div>
    </div>
    <?php include "../public/footer.php"; ?>
</div>
<script>
    var initContent = marked('# 来写下你的文章吧');
    $('#content').html(initContent);
    $('#textarea').on('input', function () {
        var content = $(this).val();
        if (content != '') {
            $('#content').html(marked(content, {
                highlight: function (code) {
                    return hljs.highlightAuto(code).value;
                }
            }));
            return;
        }
        $('#content').html(initContent);
    });

    $('#submit').click(function () {
        var title = $('#title').val();
        var content = $('#content').html();
        $.ajax({
            url: '../controller/article.php',
            dataType: 'json',
            type: 'post',
            data: {
                title: title,
                content: content,
            },
            success: function (res) {
                console.log(res);
            }
        })
    });
</script>
</body>
</html>