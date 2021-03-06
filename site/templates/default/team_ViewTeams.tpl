<style>
#SystemTable td{
	text-align: center;
}
 a.paginate_button,
 a.paginate_active {
    display: inline-block;
    background-color: #EBF4FC;
    padding: 2px 6px;
    margin-left: 2px;
    cursor: pointer;
    *cursor: hand;
}
 
 a.paginate_active {
    background-color: transparent;
    border: 1px solid black;
}
 
 a.paginate_button_disabled {
    color: #40529D;
}
.paging_full_numbers a:active {
    outline: none
}
.paging_full_numbers a:hover {
    text-decoration: none;
}
 
div.dataTables_paginate span>a {
    width: 15px;
    text-align: center;
}
 
div.dataTables_info {
    padding: 9px 6px 6px 6px;
}
table.SystemTable thead th.sorting_asc {
    background: #66A9BD url('images/sort_asc.png') no-repeat right center;
}
 
table.SystemTable thead th.sorting_desc {
    background: #66A9BD url('images/sort_desc.png') no-repeat right center;
}
 
table.SystemTable thead th.sorting {
    background: #66A9BD url('images/sort_both.png') no-repeat right center;
}
div.dataTables_length {
    float: left;
}
 
div.dataTables_filter {
    float: right;
}
 
div.dataTables_info {
    float: left;
}
 
div.dataTables_paginate {
    float: right;
}
 
div.dataTables_length,
div.dataTables_filter,
div.dataTables_paginate,
div.dataTables_info {
    padding: 6px;
}

div.dataTables_scroll{
	clear: both;
}

table.SystemTable {
    clear: both;
}
</style>

<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#SystemTable').dataTable( {
					"sScrollY": 200,
					"bJQueryUI": false,
					"sPaginationType": "full_numbers"
				} );
			} );
</script>

<DIV class="catglow" style="width:100%;">
<DIV class="cathead-m">
<DIV class="cathead-r">
<DIV class="cathead-l">                    
	{title}                
</DIV>
</DIV>
</DIV>
<DIV class="trigger active">
</DIV>
<DIV class="collapsethis">

<TABLE class="cat" cellSpacing="0" cellPadding="0" width="100%">
  <TBODY>
  <TR>
    <TD class="forumdetails"><SPAN class="forum-descriptions">


<div id="div-viewteams" style="width: 99%;">
<table cellpadding="0" cellspacing="0" border="0" class="table2" id="SystemTable" class="SystemTable" width="100%">
	<thead>
		<tr>
			<th>#</th>
			<th>Team</th>
			<th>members</th>
			<th>manage</th>
			<th>delete</th>
		</tr>
	</thead>
	<tfoot>
		<tr>
			<th>#</th>
			<th>Team</th>
			<th>members</th>
			<th>manage</th>
			<th>delete</th>
		</tr>
	</tfoot>
	<tbody>
		{TableRows}
	</tbody>
</table>
</div>


</td>
</tr>
</tbody>
</table>

</DIV>
</div>
<br>
