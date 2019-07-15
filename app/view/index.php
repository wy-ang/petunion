<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../static/common/js/layui/css/layui.css">
    <link rel="stylesheet" href="../../static/website/common/css/common.css">
    <script src="../../static/common/js/jquery/jquery.min.js"></script>
    <script src="../../static/common/js/layui/layui.js"></script>
</head>
<body>
<div class="layui-fluid">
    <div class="layui-row">
        <?php include "../public/header.php"; ?>
        <div class="layui-col-md8 layui-col-md-offset2 sort">
            <div class="layui-card">
                <div class="layui-card-body" id="sort"></div>
            </div>
        </div>
        <div class="layui-col-md8 layui-col-md-offset2">
            <div class="layui-row thumbnail">
                <div class="layui-col-md8">
                    <div class="layui-carousel" id="carousel" lay-filter="carousel">
                        <div carousel-item="" id="carouselImg"></div>
                    </div>
                </div>
                <div class="layui-col-md4">
                    <div class="layui-card article-list" id="articleList">
                        <h2 class="layui-card-header">精品推荐</h2>
                        <ul class="layui-card-body" id="boutique"></ul>
                    </div>
                </div>
            </div>
        </div>
<!--                <i class="layui-icon layui-icon-add-1 add-pet layui-btn" id="addPet"></i>-->
        <?php include "../public/footer.php"; ?>
    </div>
    <script>
        layui.use(['carousel', 'upload'], function () {
            var carousel = layui.carousel;
            var upload = layui.upload;
            //上传
            upload.render({
                elem: '#addPet',
                url: '../controller/upload.php',
                multiple: 'true',
                data: {
                    name: 'haha'
                },
                done: function (res) {
                    var data = res.data;
                    $('#img').attr('src', data.filePath);
                },
                error: function () {
                    //请求异常回调
                }
            });
            // 图片轮播
            $.ajax({
                url: '../controller/view.php',
                type: 'GET',
                dataType: "json",
                success: function (res) {
                    var data = res.data;
                    $('#carouselImg').empty();
                    for (var i = 0; i < data.length; i++) {
                        $('#carouselImg').append('<div><img src=' + data[i].filePath + ' /></div>');
                        carousel.render({
                            elem: '#carousel',
                            arrow: 'hover',
                            width: '100%',
                            height: 420,
                            anim: 'fade',
                            autoplay: false,
                            interval: 3000
                        });
                    }
                }
            });

            // 分类
            $.ajax({
                url: '../controller/sort.php',
                type: 'GET',
                dataType: "json",
                success: function (res) {
                    var data = res.data;
                    $('#sort').empty();
                    var sortUl = [];
                    for (var i = 0; i < data.length; i++) {
                        sortUl.push('<div class="pet-type"><div class="big-sort"><span>' + data[i].bigSort + '</span></div><ul class="clearfix">');
                        for (var j = 0; j < data[i].smallSort.length; j++) {
                            sortUl.push('<li><a href="">' + data[i].smallSort[j] + '</a></li>');
                        }
                        sortUl.push('</ul></div>');
                    }
                    $('#sort').html(sortUl.join(''));
                }
            });

            // 精品推荐
            $.ajax({
                url: '../controller/article.php',
                type: 'GET',
                dataType: "json",
                success: function (res) {
                    var data = res.data;
                    $('#boutique').empty();
                    var boutique = [];
                    for (var i = 0; i < data.length; i++) {
                        boutique.push('<li class="boutiqueItem" id='+ data[i].id +'><a href='+ data[i].path +'>' + data[i].title + '</a></li>');
                    }
                    $('#boutique').html(boutique.join(''));
                }
            });
        });
    </script>
</div>
</body>
</html>