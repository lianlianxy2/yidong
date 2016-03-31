<?php if (!defined('THINK_PATH')) exit();?><table id="doc-datagrid-table4" data-toggle="datagrid" data-options="{
    columns: [{name:'goods_id', width:'50', label:'编号'},{name:'supplier_name', width:'100', label:'供应商家',render:function(value){
               return String(value) == '' ? '自营商品' : value
              }},{name:'goods_name', width:'450', label:'商品名称'},
              {name:'goods_sn', width:'100', label:'货号'}, {name:'market_price', label:'价格'},{name:'is_on_sale', width:'100',label:'上架',render: function(value) {
                    return String(value) == '1' ? '上架' : '下架'
               }},
              {name:'is_real', width:'50',label:'精品',render: function(value) {return String(value)=='1' ? '<span style=color:green>是</span>' : '<span style=color:red>否</span>'}},{name:'is_new',width:'50', label:'新品',render: function(value) {return String(value)=='1' ? '<span style=color:green>是</span>' : '<span style=color:red>否</span>'}},{name:'is_hot', label:'热销',render: function(value) {return String(value)=='1' ? '<span style=color:green>是</span>' : '<span style=color:red>否</span>'}},
              {name:'sort_order', label:'推荐排序'},{name:'goods_number',width:'100', label:'库存'},
              {name:'',label:'标签'}],
    dataUrl: '<?php echo U('Supplier/showsupplier');?>',
    paging: {pageSize:25,  pageCurrent:1},
    pagingAlign: 'left',
    dataType: 'json',
    local:'remote',
    showEditbtnscol: true,
    toolbarItem:'import, export',
    showToolbar:true,
     showCheckboxcol: true,
     toolbarCustom:'<select data-toggle=selectpicker><option value=0>请选择...</option><option value=1>上架</option><option value=2>下架</option><option value=3>设置精品</option><option value=4>取消精品</option><option value=5>设置新品</option><option value=6>取消新品</option><option value=7>设置热销</option><option value=8>取消热销</option><option value=9>移动到回收站</option></select>&nbsp;<button onclick=btnsurefun(this) type=button class=btn-default>确 定</button>'
}"></table>