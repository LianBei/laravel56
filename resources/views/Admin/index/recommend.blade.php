@extends('Admin.layout.layout')
@section('content')
    <nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 首页推荐 <span class="c-gray en">&gt;</span> 首页推荐管理 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
    <div class="pd-20">
        <div class="mt-20">
            <table class="table table-border table-bordered table-bg table-sort">
                <thead>
                <tr class="text-c">
                    <th width="25"><input type="checkbox" name="" value=""></th>
                    <th width="70">ID</th>
                    <th width="200">LOGO</th>
                    <th width="120">商品名称</th>
                    <th>具体描述</th>
                    <th width="100">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $row)
                <tr class="text-c">
                    <td><input name="" type="checkbox" value=""></td>
                    <td>{{$row->id}}</td>
                    <td><img src="{{asset('storage/images/article/'.$row->pic)}}"></td>
                    <td class="text-l">{{$row->name}}</td>
                    <td class="text-l">{{$row->description}}</td>
                    <td class="f-14 product-brand-manage"><a style="text-decoration:none" onClick="product_brand_edit('品牌编辑','codeing.html','1')" href="javascript:;" title="编辑"><i class="Hui-iconfont">&#xe6df;</i></a> <a style="text-decoration:none" class="ml-5" onClick="active_del(this,'10001')" href="javascript:;" title="删除"><i class="Hui-iconfont">&#xe6e2;</i></a></td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
