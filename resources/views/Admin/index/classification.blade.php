@extends('Admin.layout.layout')
@section('content')
      <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 产品管理 <span class="c-gray en">&gt;</span> 品牌管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
    <div class="text-c">
        <form class="Huiform" method="post" action="" target="_self">
            <input type="text" placeholder="分类名称" value="" class="input-text" style="width:120px">
            <span class="btn-upload form-group">
			<input class="input-text upload-url" type="text" name="uploadfile-2" id="uploadfile-2" readonly  datatype="*" nullmsg="请添加附件！" style="width:200px">
			<a href="javascript:void();" class="btn btn-primary upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
			<input type="file" multiple name="file-2" class="input-file">
			</span> <span class="select-box" style="width:150px">
			<select class="select" name="brandclass" size="1">
				<option value="1" selected>国内品牌</option>
				<option value="0">国外品牌</option>
			</select>
			</span><button type="button" class="btn btn-success" id="" name="" onClick="picture_colume_add(this);"><i class="Hui-iconfont">&#xe600;</i> 添加</button>
        </form>
    </div>
    <div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"><a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a></span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
    <div class="mt-20">
        <table class="table table-border table-bordered table-bg table-sort">
            <thead>
            <tr class="text-c">
                <th width="25"><input type="checkbox" name="" value=""></th>
                <th width="70">ID</th>
                <th width="80">排序</th>
                <th width="200">LOGO</th>
                <th width="120">品牌名称</th>
                <th>具体描述</th>
                <th width="100">操作</th>
            </tr>
            </thead>
            <tbody>
            <tr class="text-c">
                <td><input name="" type="checkbox" value=""></td>
                <td>1</td>
                <td><input type="text" class="input-text text-c" value="1"></td>
                <td><img src="temp/brand/dongpeng.jpeg"></td>
                <td class="text-l"><img title="国内品牌" src="images/gq/cn.gif"> 东鹏</td>
                <td class="text-l">东鹏陶瓷被评为“中国名牌”、“国家免检产品”、“中国驰名商标”、http://www.dongpeng.net/</td>
                <td class="f-14 product-brand-manage"><a style="text-decoration:none" onClick="product_brand_edit('品牌编辑','codeing.html','1')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="active_del(this,'10001')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@stop