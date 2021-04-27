<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="author" content="order by dede58.com"/>
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="Bookmark" href="/favicon.ico" >
        <link rel="Shortcut Icon" href="/favicon.ico" />
        <!--[if lt IE 9]>
        <script type="text/javascript" src="{{asset('lib/html5.js')}}"></script>
        <script type="text/javascript" src="{{asset('lib/respond.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('lib/PIE_IE678.js')}}"></script>
        <![endif]-->
        <link href="{{asset('css/H-ui.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/H-ui.admin.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('skin/default/skin.css')}}" rel="stylesheet" type="text/css" id="skin" />
        <link href="{{asset('lib/Hui-iconfont/1.0.1/iconfont.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css" />
        <!--[if IE 6]>
        <script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
        <script>DD_belatedPNG.fix('*');</script>
        <![endif]-->
        <title>H-ui.admin v2.3</title>
        <style>
        .copyrights{text-indent:-9999px;height:0;line-height:0;font-size:0;overflow:hidden;}
        </style>
        </head>
<body>
<div class="dislpayArrow"><a class="pngfix" href="javascript:void(0);" onClick="displaynavbar(this)"></a></div>
@include('Admin.layout.header')
@include('Admin.layout.left')
<section class="Hui-article-box">
    @yield('content')
</section>


<script type="text/javascript" src="{{asset('lib/jquery/1.9.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/layer/1.9.3/layer.js')}}"></script>
<script type="text/javascript" src="{{asset('js/H-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('js/H-ui.admin.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/jquery/1.9.1/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/layer/1.9.3/layer.js')}}"></script><script type="text/javascript" src="lib/laypage/1.2/laypage.js"></script>
<script type="text/javascript" src="{{asset('lib/My97DatePicker/WdatePicker.js')}}"></script>
<script type="text/javascript" src="{{asset('lib/datatables/1.10.0/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/H-ui.js')}}"></script>
<script type="text/javascript" src="{{asset('js/H-ui.admin.js')}}"></script>
<script type="text/javascript" src="{{asset('js/H-ui.admin.product.js')}}"></script>
<script type="text/javascript">
    $('.table-sort').dataTable({
        "aaSorting": [[ 1, "desc" ]],//默认第几个排序
        "bStateSave": true,//状态保存
        "aoColumnDefs": [
            //{"bVisible": false, "aTargets": [ 3 ]} //控制列的隐藏显示
            {"orderable":false,"aTargets":[0,6]}// 制定列不参与排序
        ]
    });
</script>
</body>
</html>