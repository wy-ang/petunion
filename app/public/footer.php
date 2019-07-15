<div class="layui-col-md8 layui-col-md-offset2">
    <div class="layui-footer">
<!--        <div class="layui-card noun">-->
<!--            <h2 class="layui-card-header">名词科普</h2>-->
<!--            <ul class="layui-card-body" id="nounList"></ul>-->
<!--        </div>-->
        <div class="links">
            <a href="http://www.goupu.com.cn/about/index.html">关于我们</a> |
            <a href="http://www.goupu.com.cn/about/contact.html">联系我们</a> |
            <a href="http://www.goupu.com.cn/about/statement.html">免责申明</a> |
            <a href="http://www.goupu.com.cn/about/agreement.html">用户协议</a> |
            <a href="http://www.goupu.com.cn/about/copyright.html">投稿指南</a>
            <?php echo "Copyright © 2010-" . @date("Y") . " www.wyphp.com"; ?>
        </div>
    </div>
</div>
<script>
    $.ajax({
        url: '../controller/sort.php',
        type: 'GET',
        dataType: "json",
        success: function (res) {
            var data = res.data;
            $('#nounList').empty();
            var nounList = [];
            for (var j = 0; j < data[1].smallSort.length; j++) {
                nounList.push('<li><a href="">' + data[1].smallSort[j] + '</a></li>');
            }
            $('#nounList').html(nounList.join(''));
        }
    });
</script>