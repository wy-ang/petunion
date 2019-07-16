<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>随笔</title>
    <link rel="stylesheet" href="../../static/common/js/layui/css/layui.css">
    <link rel="stylesheet" href="../../static/common/js/editor.md/css/editormd.min.css"/>
    <link rel="stylesheet" href="../../static/website/common/css/common.css">
    <link rel="stylesheet" href="../../static/website/common/css/addArticle.css">
    <script src="../../static/common/js/jquery/jquery.min.js"></script>
    <script src="../../static/common/js/editor.md/editormd.min.js"></script>
</head>
<body>
<div class="markdown layui-fluid">
    <div class="layui-col-md12 height">
        <div class="layui-row height">
            <div class="layui-col-md12">
                <div class="textarea-header">
                    <ul>
                        <li>
                            <a href="/app/view/index.php" title="首页">
                                <svg t="1563251126178" class="icon" viewBox="0 0 1024 1024" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" p-id="1885" width="24" height="24">
                                    <path d="M204.8 153.6a51.2 51.2 0 0 0-51.2 51.2v128a51.2 51.2 0 0 0 51.2 51.2h128a51.2 51.2 0 0 0 51.2-51.2V204.8a51.2 51.2 0 0 0-51.2-51.2H204.8z m0-102.4h128a153.6 153.6 0 0 1 153.6 153.6v128a153.6 153.6 0 0 1-153.6 153.6H204.8a153.6 153.6 0 0 1-153.6-153.6V204.8a153.6 153.6 0 0 1 153.6-153.6z m486.4 102.4a51.2 51.2 0 0 0-51.2 51.2v128a51.2 51.2 0 0 0 51.2 51.2H819.2a51.2 51.2 0 0 0 51.2-51.2V204.8a51.2 51.2 0 0 0-51.2-51.2h-128z m0-102.4H819.2a153.6 153.6 0 0 1 153.6 153.6v128a153.6 153.6 0 0 1-153.6 153.6h-128a153.6 153.6 0 0 1-153.6-153.6V204.8a153.6 153.6 0 0 1 153.6-153.6zM204.8 640a51.2 51.2 0 0 0-51.2 51.2V819.2a51.2 51.2 0 0 0 51.2 51.2h128a51.2 51.2 0 0 0 51.2-51.2v-128a51.2 51.2 0 0 0-51.2-51.2H204.8z m0-102.4h128a153.6 153.6 0 0 1 153.6 153.6V819.2a153.6 153.6 0 0 1-153.6 153.6H204.8a153.6 153.6 0 0 1-153.6-153.6v-128a153.6 153.6 0 0 1 153.6-153.6z m486.4 102.4a51.2 51.2 0 0 0-51.2 51.2V819.2a51.2 51.2 0 0 0 51.2 51.2H819.2a51.2 51.2 0 0 0 51.2-51.2v-128a51.2 51.2 0 0 0-51.2-51.2h-128z m0-102.4H819.2a153.6 153.6 0 0 1 153.6 153.6V819.2a153.6 153.6 0 0 1-153.6 153.6h-128a153.6 153.6 0 0 1-153.6-153.6v-128a153.6 153.6 0 0 1 153.6-153.6z"
                                          fill="#000000" p-id="1886"></path>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <span id="submit" class="submit">
                                <svg t="1563245662047" class="icon" viewBox="0 0 1024 1024" version="1.1"
                                     xmlns="http://www.w3.org/2000/svg" p-id="4988" width="24" height="24"><path
                                            d="M1002.496 71.68a60.928 60.928 0 0 0-6.656-20.48l-3.584-5.12a64.512 64.512 0 0 0-12.288-13.824 69.632 69.632 0 0 0-25.6-16.384h-5.632a73.216 73.216 0 0 0-17.408 0H921.6a72.192 72.192 0 0 0-21.504 6.144L63.488 460.8a60.928 60.928 0 0 0 0 112.64l126.464 67.584A70.656 70.656 0 0 0 283.136 614.4 60.928 60.928 0 0 0 256 528.896l-19.968-10.752L665.6 294.4l-280.576 329.728a60.928 60.928 0 0 0-15.36 39.936v262.656a68.608 68.608 0 0 0 137.216 0v-153.6l268.8 148.48a71.68 71.68 0 0 0 64 0 65.024 65.024 0 0 0 38.4-51.2l124.416-781.824a60.928 60.928 0 0 0 0-12.288z m-243.712 691.712l-215.552-121.856 287.232-338.432z m0 0"
                                            p-id="4989" fill="#000000"></path></svg>发布
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="layui-col-md12">
                <input type="text" name="title" class="title" id="title" value="无标题" placeholder="无标题"/>
            </div>
            <div class="layui-col-md12 height">
                <div id="editor">
                    <textarea style="display:none;">##写下你的文章吧</textarea>
                </div>
            </div>
        </div>
    </div>
    <?php include "../public/footer.php"; ?>
</div>
<script>
    $(function () {
        var editor = editormd("editor", {
            path: '../../static/common/js/editor.md/lib/',
            saveHTMLToTextarea: true
        });
        //testEditor.getMarkdown();       // 获取 Markdown 源码
        //testEditor.getHTML();           // 获取 Textarea 保存的 HTML 源码
        //testEditor.getPreviewedHTML();  // 获取预览窗口里的 HTML，在开启 watch 且没有开启 saveHTMLToTextarea 时使用
        $('#title').on('change', function () {
            var val = $(this).val();
            if (val=='') {
                $(this).val('无标题');
            }
        })
        $('#submit').click(function () {
            var title = $('#title').val();
            var content = editor.getHTML();
            $.ajax({
                url: '../controller/article.php',
                dataType: 'json',
                type: 'post',
                data: {
                    title: title,
                    content: content,
                },
                success: function (res) {
                    layui.msg(res.msg);
                }
            })
        });
    });
</script>
</body>
</html>