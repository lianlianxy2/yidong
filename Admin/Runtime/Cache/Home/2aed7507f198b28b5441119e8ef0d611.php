<?php if (!defined('THINK_PATH')) exit();?><table id="doc-datagrid-table4" data-toggle="datagrid" data-options="{
    columns: [{name:'goods_id', width:'50', label:'编号'},{name:'goods_name', width:'550', label:'商品名称'},
              {name:'goods_sn', width:'100', label:'货号'}, {name:'market_price', label:'价格'},{name:'is_on_sale', width:'100',label:'上架',render: function(value) {
                    return String(value) == '1' ? '上架' : '下架'
               }},
              {name:'is_real', width:'50',label:'精品',render: function(value) {return String(value)=='1' ? '<span style=color:green>是</span>' : '<span style=color:red>否</span>'}},{name:'is_new',width:'50', label:'新品',render: function(value) {return String(value)=='1' ? '<span style=color:green>是</span>' : '<span style=color:red>否</span>'}},{name:'is_hot', label:'热销',render: function(value) {return String(value)=='1' ? '<span style=color:green>是</span>' : '<span style=color:red>否</span>'}},
              {name:'sort_order', label:'推荐排序'},{name:'goods_number',width:'100', label:'库存'},
              {name:'',label:'标签'}],
    dataUrl: '<?php echo U('Goods/showgoods');?>',
    paging: {pageSize:25,  pageCurrent:1},
    pagingAlign: 'left',
    dataType: 'json',
    local:'remote',
    showEditbtnscol: true,
    toolbarItem:'all',
    showToolbar:true,
     showCheckboxcol: true
}"></table>