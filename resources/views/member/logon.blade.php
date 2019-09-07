<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>登录页面</title>
    <link rel="stylesheet" href="http://www.myla.com/css/index.css" />
</head>

<body>
<img src="http://www.myla.com/css/bgImg.jpg" class="bgImg" />
<div class="content">
    <form action='logon1' method="post" enctype="multipart/form-data" >
        <div class="bidTitle">“登录”</div>
        <div class="logCon">
            <div class="line"><span>账号:</span>
                <input class="bt_input" name="username" type="text" /></div>
            <div class="line">
                <span>密码:</span>
                <input class="bt_input" name="password" type="text" />
            </div>
            <input type="submit" value="登录">
        </div>
    </form>

</div>
</body>

</html>