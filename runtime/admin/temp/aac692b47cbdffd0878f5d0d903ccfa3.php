<?php /*a:2:{s:57:"/var/www/html/EasyAdmin/app/admin/view/index/welcome.html";i:1573065450;s:57:"/var/www/html/EasyAdmin/app/admin/view/Public/iframe.html";i:1573324386;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo htmlentities((isset($title) && ($title !== '')?$title:'EasyAdmin后台管理')); ?></title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/static/plugs/layui-v2.5.5/css/layui.css?v=<?php echo time(); ?>" media="all">
    <link rel="stylesheet" href="/static/plugs/font-awesome-4.7.0/css/font-awesome.min.css?v=<?php echo time(); ?>" media="all">
    <!--[if lt IE 9]>
    <script src="https://cdn.staticfile.org/html5shiv/r29/html5.min.js?v=<?php echo time(); ?>"></script>
    <script src="https://cdn.staticfile.org/respond.js/1.4.2/respond.min.js?v=<?php echo time(); ?>"></script>
    <![endif]-->
    <link rel="stylesheet" href="/static/plugs/lay-module/layuimini/layuimini-public.css?v=<?php echo time(); ?>" media="all">
    
<link rel="stylesheet" href="/static/admin/css/welcome.css?v=<?php echo time(); ?>" media="all">

</head>
<body>

<div class="layuimini-container">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md8">
            <div class="layui-row layui-col-space15">
                <div class="layui-col-md6">
                    <div class="layui-card">
                        <div class="layui-card-header"><i class="fa fa-warning icon"></i>数据统计</div>
                        <div class="layui-card-body">
                            <div class="welcome-module">
                                <div class="layui-row layui-col-space10">
                                    <div class="layui-col-xs6">
                                        <div class="panel layui-bg-number">
                                            <div class="panel-body">
                                                <div class="panel-title">
                                                    <span class="label pull-right layui-bg-blue">实时</span>
                                                    <h5>用户统计</h5>
                                                </div>
                                                <div class="panel-content">
                                                    <h1 class="no-margins">1234</h1>
                                                    <small>当前分类总记录数</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs6">
                                        <div class="panel layui-bg-number">
                                            <div class="panel-body">
                                                <div class="panel-title">
                                                    <span class="label pull-right layui-bg-cyan">实时</span>
                                                    <h5>商品统计</h5>
                                                </div>
                                                <div class="panel-content">
                                                    <h1 class="no-margins">1234</h1>
                                                    <small>当前分类总记录数</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs6">
                                        <div class="panel layui-bg-number">
                                            <div class="panel-body">
                                                <div class="panel-title">
                                                    <span class="label pull-right layui-bg-orange">实时</span>
                                                    <h5>浏览统计</h5>
                                                </div>
                                                <div class="panel-content">
                                                    <h1 class="no-margins">1234</h1>
                                                    <small>当前分类总记录数</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs6">
                                        <div class="panel layui-bg-number">
                                            <div class="panel-body">
                                                <div class="panel-title">
                                                    <span class="label pull-right layui-bg-green">实时</span>
                                                    <h5>订单统计</h5>
                                                </div>
                                                <div class="panel-content">
                                                    <h1 class="no-margins">1234</h1>
                                                    <small>当前分类总记录数</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="layui-col-md6">
                    <div class="layui-card">
                        <div class="layui-card-header"><i class="fa fa-credit-card icon icon-blue"></i>快捷入口</div>
                        <div class="layui-card-body">
                            <div class="welcome-module">
                                <div class="layui-row layui-col-space10 layuimini-qiuck">
                                    <div class="layui-col-xs3 layuimini-qiuck-module">
                                        <a data-iframe-tab="page/menu.html" data-title="菜单管理" data-icon="fa fa-window-maximize">
                                            <i class="fa fa-window-maximize"></i>
                                            <cite>菜单管理</cite>
                                        </a>
                                    </div>
                                    <div class="layui-col-xs3 layuimini-qiuck-module">
                                        <a data-iframe-tab="page/setting.html" data-title="系统设置" data-icon="fa fa-gears">
                                            <i class="fa fa-gears"></i>
                                            <cite>系统设置</cite>
                                        </a>
                                    </div>
                                    <div class="layui-col-xs3 layuimini-qiuck-module">
                                        <a data-iframe-tab="page/table.html" data-title="表格示例" data-icon="fa fa-file-text">
                                            <i class="fa fa-file-text"></i>
                                            <cite>表格示例</cite>
                                        </a>
                                    </div>
                                    <div class="layui-col-xs3 layuimini-qiuck-module">
                                        <a data-iframe-tab="page/icon.html" data-title="图标列表" data-icon="fa fa-dot-circle-o">
                                            <i class="fa fa-dot-circle-o"></i>
                                            <cite>图标列表</cite>
                                        </a>
                                    </div>
                                    <div class="layui-col-xs3 layuimini-qiuck-module">
                                        <a data-iframe-tab="page/form.html" data-title="表单示例" data-icon="fa fa-calendar">
                                            <i class="fa fa-calendar"></i>
                                            <cite>表单示例</cite>
                                        </a>
                                    </div>
                                    <div class="layui-col-xs3 layuimini-qiuck-module">
                                        <a data-iframe-tab="page/404.html" data-title="404页面" data-icon="fa fa-hourglass-end">
                                            <i class="fa fa-hourglass-end"></i>
                                            <cite>404页面</cite>
                                        </a>
                                    </div>
                                    <div class="layui-col-xs3 layuimini-qiuck-module">
                                        <a data-iframe-tab="page/button.html" data-title="按钮示例" data-icon="fa fa-snowflake-o">
                                            <i class="fa fa-snowflake-o"></i>
                                            <cite>按钮示例</cite>
                                        </a>
                                    </div>
                                    <div class="layui-col-xs3 layuimini-qiuck-module">
                                        <a data-iframe-tab="page/layer.html" data-title="弹出层" data-icon="fa fa-shield">
                                            <i class="fa fa-shield"></i>
                                            <cite>弹出层</cite>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="layui-col-md12">
                    <div class="layui-card">
                        <div class="layui-card-header"><i class="fa fa-line-chart icon"></i>报表统计</div>
                        <div class="layui-card-body">
                            <div id="echarts-records" style="width: 100%;min-height:500px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="layui-col-md4">

            <div class="layui-card">
                <div class="layui-card-header"><i class="fa fa-bullhorn icon icon-tip"></i>系统公告</div>
                <div class="layui-card-body layui-text">
                    <div class="layuimini-notice">
                        <div class="layuimini-notice-title">修改选项卡样式</div>
                        <div class="layuimini-notice-extra">2019-07-11 23:06</div>
                        <div class="layuimini-notice-content layui-hide">
                            界面足够简洁清爽。<br>
                            一个接口几行代码而已直接初始化整个框架，无需复杂操作。<br>
                            支持多tab，可以打开多窗口。<br>
                            支持无限级菜单和对font-awesome图标库的完美支持。<br>
                            失效以及报错菜单无法直接打开，并给出弹出层提示完美的线上用户体验。<br>
                            url地址hash定位，可以清楚看到当前tab的地址信息。<br>
                            刷新页面会保留当前的窗口，并且会定位当前窗口对应左侧菜单栏。<br>
                            移动端的友好支持。<br>
                        </div>
                    </div>
                    <div class="layuimini-notice">
                        <div class="layuimini-notice-title">新增系统404模板</div>
                        <div class="layuimini-notice-extra">2019-07-11 12:57</div>
                        <div class="layuimini-notice-content layui-hide">
                            界面足够简洁清爽。<br>
                            一个接口几行代码而已直接初始化整个框架，无需复杂操作。<br>
                            支持多tab，可以打开多窗口。<br>
                            支持无限级菜单和对font-awesome图标库的完美支持。<br>
                            失效以及报错菜单无法直接打开，并给出弹出层提示完美的线上用户体验。<br>
                            url地址hash定位，可以清楚看到当前tab的地址信息。<br>
                            刷新页面会保留当前的窗口，并且会定位当前窗口对应左侧菜单栏。<br>
                            移动端的友好支持。<br>
                        </div>
                    </div>
                    <div class="layuimini-notice">
                        <div class="layuimini-notice-title">新增treetable插件和菜单管理样式</div>
                        <div class="layuimini-notice-extra">2019-07-05 14:28</div>
                        <div class="layuimini-notice-content layui-hide">
                            界面足够简洁清爽。<br>
                            一个接口几行代码而已直接初始化整个框架，无需复杂操作。<br>
                            支持多tab，可以打开多窗口。<br>
                            支持无限级菜单和对font-awesome图标库的完美支持。<br>
                            失效以及报错菜单无法直接打开，并给出弹出层提示完美的线上用户体验。<br>
                            url地址hash定位，可以清楚看到当前tab的地址信息。<br>
                            刷新页面会保留当前的窗口，并且会定位当前窗口对应左侧菜单栏。<br>
                            移动端的友好支持。<br>
                        </div>
                    </div>
                    <div class="layuimini-notice">
                        <div class="layuimini-notice-title">修改logo缩放问题</div>
                        <div class="layuimini-notice-extra">2019-07-04 11:02</div>
                        <div class="layuimini-notice-content layui-hide">
                            界面足够简洁清爽。<br>
                            一个接口几行代码而已直接初始化整个框架，无需复杂操作。<br>
                            支持多tab，可以打开多窗口。<br>
                            支持无限级菜单和对font-awesome图标库的完美支持。<br>
                            失效以及报错菜单无法直接打开，并给出弹出层提示完美的线上用户体验。<br>
                            url地址hash定位，可以清楚看到当前tab的地址信息。<br>
                            刷新页面会保留当前的窗口，并且会定位当前窗口对应左侧菜单栏。<br>
                            移动端的友好支持。<br>
                        </div>
                    </div>
                    <div class="layuimini-notice">
                        <div class="layuimini-notice-title">修复左侧菜单缩放tab无法移动</div>
                        <div class="layuimini-notice-extra">2019-06-17 11:55</div>
                        <div class="layuimini-notice-content layui-hide">
                            界面足够简洁清爽。<br>
                            一个接口几行代码而已直接初始化整个框架，无需复杂操作。<br>
                            支持多tab，可以打开多窗口。<br>
                            支持无限级菜单和对font-awesome图标库的完美支持。<br>
                            失效以及报错菜单无法直接打开，并给出弹出层提示完美的线上用户体验。<br>
                            url地址hash定位，可以清楚看到当前tab的地址信息。<br>
                            刷新页面会保留当前的窗口，并且会定位当前窗口对应左侧菜单栏。<br>
                            移动端的友好支持。<br>
                        </div>
                    </div>
                    <div class="layuimini-notice">
                        <div class="layuimini-notice-title">修复多模块菜单栏展开有问题</div>
                        <div class="layuimini-notice-extra">2019-06-13 14:53</div>
                        <div class="layuimini-notice-content layui-hide">
                            界面足够简洁清爽。<br>
                            一个接口几行代码而已直接初始化整个框架，无需复杂操作。<br>
                            支持多tab，可以打开多窗口。<br>
                            支持无限级菜单和对font-awesome图标库的完美支持。<br>
                            失效以及报错菜单无法直接打开，并给出弹出层提示完美的线上用户体验。<br>
                            url地址hash定位，可以清楚看到当前tab的地址信息。<br>
                            刷新页面会保留当前的窗口，并且会定位当前窗口对应左侧菜单栏。<br>
                            移动端的友好支持。<br>
                        </div>
                    </div>
                </div>
            </div>

            <div class="layui-card">
                <div class="layui-card-header"><i class="fa fa-fire icon"></i>版本信息</div>
                <div class="layui-card-body layui-text">
                    <table class="layui-table">
                        <colgroup>
                            <col width="100">
                            <col>
                        </colgroup>
                        <tbody>
                        <tr>
                            <td>框架名称</td>
                            <td>
                                layuimini
                            </td>
                        </tr>
                        <tr>
                            <td>当前版本</td>
                            <td>v1.0.4</td>
                        </tr>
                        <tr>
                            <td>主要特色</td>
                            <td>零门槛 / 响应式 / 清爽 / 极简</td>
                        </tr>
                        <tr>
                            <td>Gitee</td>
                            <td style="padding-bottom: 0;">
                                <div class="layui-btn-container">
                                    <a href="https://gitee.com/zhongshaofa/layuimini" style="margin-right: 15px"><img src="https://gitee.com/zhongshaofa/layuimini/badge/star.svg?theme=dark" alt="star"></a>
                                    <a href="https://gitee.com/zhongshaofa/layuimini"><img src="https://gitee.com/zhongshaofa/layuimini/badge/fork.svg?theme=dark" alt="fork"></a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Github</td>
                            <td style="padding-bottom: 0;">
                                <div class="layui-btn-container">
                                    <iframe src="https://ghbtns.com/github-btn.html?user=zhongshaofa&repo=layuimini&type=star&count=true" frameborder="0" scrolling="0" width="100px" height="20px"></iframe>
                                    <iframe src="https://ghbtns.com/github-btn.html?user=zhongshaofa&repo=layuimini&type=fork&count=true" frameborder="0" scrolling="0" width="100px" height="20px"></iframe>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="layui-card">
                <div class="layui-card-header"><i class="fa fa-paper-plane-o icon"></i>作者心语</div>
                <div class="layui-card-body layui-text layadmin-text">
                    <p>本模板基于layui2.5.4以及font-awesome-4.7.0进行实现。layui开发文档地址：<a class="layui-btn layui-btn-xs layui-btn-danger" target="_blank" href="http://www.layui.com/doc">layui文档</a></p>
                    <p>技术交流QQ群：<a target="_blank" href="https://jq.qq.com/?_wv=1027&k=5JRGVfe"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="layuimini" title="layuimini"></a>（加群请备注来源：如gitee、github、官网等）</p>
                    <p>喜欢此后台模板的可以给我的GitHub和Gitee加个Star支持一下</p>
                    <p class="layui-red">备注：此后台框架永久开源，但请勿进行出售或者上传到任何素材网站，否则将追究相应的责任。</p>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    window.ADMIN = "<?php echo htmlentities((isset($admin_module_name) && ($admin_module_name !== '')?$admin_module_name:'admin')); ?>";
    window.CONTROLLER_JS_PATH = "<?php echo htmlentities((isset($thisControllerJsPath) && ($thisControllerJsPath !== '')?$thisControllerJsPath:'')); ?>";
    window.ACTION = "<?php echo htmlentities((isset($thisAction) && ($thisAction !== '')?$thisAction:'')); ?>";
    window.AUTOLOAD_JS = "<?php echo htmlentities((isset($autoloadJs) && ($autoloadJs !== '')?$autoloadJs:'false')); ?>";
</script>
<script src="/static/plugs/layui-v2.5.5/layui.all.js?v=<?php echo time(); ?>" charset="utf-8"></script>
<script src="/static/plugs/require-2.3.6/require.js?v=<?php echo time(); ?>" charset="utf-8"></script>
<script src="/static/config-admin.js?v=<?php echo time(); ?>" charset="utf-8"></script>

</body>
</html>