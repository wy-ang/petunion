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
        <div class="layui-col-md12">
            <?php include "../public/header.php"; ?>
        </div>
        <div class="layui-col-md12">
            <div class="layui-row layui-col-space30">
                <div class="layui-col-md3">
                    <div class="layui-card">
                        <div class="layui-card-header"></div>
                        <div class="layui-card-body">
                            <img src="" alt="" id="img">
                        </div>
                    </div>
                </div>
                <div class="layui-col-md3">
                    <div class="layui-card">
                        <div class="layui-card-header"></div>
                        <div class="layui-card-body">

                        </div>
                    </div>
                </div>
                <div class="layui-col-md3">
                    <div class="layui-card">
                        <div class="layui-card-header"></div>
                        <div class="layui-card-body">

                        </div>
                    </div>
                </div>
                <div class="layui-col-md3">
                    <div class="layui-card">
                        <div class="layui-card-header"></div>
                        <div class="layui-card-body">
                            <i class="layui-icon layui-icon-add-1 add-pet layui-btn" id="addPet"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layui-col-md12">
            <?php include "../public/footer.php"; ?>
        </div>
    </div>
    <script>
        layui.use('upload', function () {
        });
    </script>
</div>
</body>
</html>