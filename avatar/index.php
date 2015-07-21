<html>
<head>
    <?php require "../php/lib.php"; ?>
    <title>The Avatar System</title>
    <link rel="stylesheet" href="css/avatar.css"/>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.5&ak=3juZrhGVW1FG9xSdspQHuSpU"></script>
    <script type="text/javascript" src="js/index.js"></script>
</head>
<body>
<div id="dashboard_container">
    <div>
        <span class="bold">The Avatar System</span>
        <span style="color:grey;font-size:9px;">v0.<?php echo date("n.j", filemtime("./index.php")); ?></span>

        <div class="btn-group pull-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-cog"></i>
            </a>
            <ul class="dropdown-menu">
                <li><a href="upload.php" target="_blank">Data Management</a></li>
            </ul>
        </div>
    </div>
    <hr/>
    <div class="form-group" style="margin-bottom:0;">
        <input id="search_id" class="form-control input-sm" placeholder="Trajectory ID"/>
    </div>
    <div id="console"></div>
</div>
<div id="map_canvas"></div>
</body>
</html>