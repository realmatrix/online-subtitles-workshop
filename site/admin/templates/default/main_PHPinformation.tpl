<style>
#phpinfo table {
  width: 100%;
  margin-bottom: 18px;
}
#phpinfo table th,
#phpinfo table td {
  padding: 8px;
  line-height: 18px;
  text-align: left;
  vertical-align: top;
  border-top: 1px solid #dddddd;
}
#phpinfo table th {
  font-weight: bold;
}
#phpinfo table thead th {
  vertical-align: bottom;
}
#phpinfo table caption + thead tr:first-child th,
#phpinfo table caption + thead tr:first-child td,
#phpinfo table colgroup + thead tr:first-child th,
#phpinfo table colgroup + thead tr:first-child td,
#phpinfo table thead:first-child tr:first-child th,
#phpinfo table thead:first-child tr:first-child td {
  border-top: 0;
}
#phpinfo table tbody + tbody {
  border-top: 2px solid #dddddd;
}
#phpinfo table th,
#phpinfo table td {
  padding: 4px 5px;
}
#phpinfo table {
  border: 1px solid #dddddd;
  border-collapse: separate;
  *border-collapse: collapsed;
  border-left: 0;
  -webkit-border-radius: 4px;
  -moz-border-radius: 4px;
  border-radius: 4px;
}
#phpinfo table th,
#phpinfo table td {
  border-left: 1px solid #dddddd;
}
#phpinfo table caption + thead tr:first-child th,
#phpinfo table caption + tbody tr:first-child th,
#phpinfo table caption + tbody tr:first-child td,
#phpinfo table colgroup + thead tr:first-child th,
#phpinfo table colgroup + tbody tr:first-child th,
#phpinfo table colgroup + tbody tr:first-child td,
#phpinfo table thead:first-child tr:first-child th,
#phpinfo table tbody:first-child tr:first-child th,
#phpinfo table tbody:first-child tr:first-child td {
  border-top: 0;
}
#phpinfo table thead:first-child tr:first-child th:first-child,
#phpinfo table tbody:first-child tr:first-child td:first-child {
  -webkit-border-top-left-radius: 4px;
  border-top-left-radius: 4px;
  -moz-border-radius-topleft: 4px;
}
#phpinfo table thead:first-child tr:first-child th:last-child,
#phpinfo table tbody:first-child tr:first-child td:last-child {
  -webkit-border-top-right-radius: 4px;
  border-top-right-radius: 4px;
  -moz-border-radius-topright: 4px;
}
#phpinfo table thead:last-child tr:last-child th:first-child,
#phpinfo table tbody:last-child tr:last-child td:first-child {
  -webkit-border-radius: 0 0 0 4px;
  -moz-border-radius: 0 0 0 4px;
  border-radius: 0 0 0 4px;
  -webkit-border-bottom-left-radius: 4px;
  border-bottom-left-radius: 4px;
  -moz-border-radius-bottomleft: 4px;
}
#phpinfo table thead:last-child tr:last-child th:last-child,
#phpinfo table tbody:last-child tr:last-child td:last-child {
  -webkit-border-bottom-right-radius: 4px;
  border-bottom-right-radius: 4px;
  -moz-border-radius-bottomright: 4px;
}
#phpinfo table-striped tbody tr:nth-child(odd) td,
#phpinfo table-striped tbody tr:nth-child(odd) th {
  background-color: #f9f9f9;
}
#phpinfo table tbody tr:hover td,
#phpinfo table tbody tr:hover th {
  background-color: #f5f5f5;
}

</style>
			<div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2>PHP Information</h2>
						<div class="box-icon">
							<a href="#" class="btn btn-setting btn-round"><i class="icon-cog"></i></a>
							<a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn btn-close btn-round"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<div id="phpinfo" style="text-align: center;">{info}</div>
					</div>
				</div><!--/span-->
			</div><!--/row-->
 
