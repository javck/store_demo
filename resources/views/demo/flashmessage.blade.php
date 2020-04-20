<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Flash Msg示範</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <!-- Flash Message 出現位置-->
        @include('flash::message')

        <p>歡迎到我的購物商城...</p>
    </div>

    <!-- 一般建議載入jquery.js，進階功能都會用到 -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- 必須載入 -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <script>
        <!-- Flash Message Overlay會用到，需保留 -->
        $('#flash-overlay-modal').modal();

        <!-- Flash Message 3秒之後消失，非必須 -->
        $('div.alert').delay(3000).fadeOut(350);
    </script>

</body>

</html>
