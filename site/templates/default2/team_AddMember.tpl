<style>
	.div-chk-add-teammember{
		margin-top: 20px;
	}
</style>
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


<div id="div-addteammember" style="width: 99%;">
	<form method="post" action="index.php">
		<label>{username}
		<br />
		<input type="text" name="tusername" style="width: 50%"/>
		</label>
		<div class='div-chk-add-teammember'>
		permissions:<br />
		<label><input type="checkbox" name="add" value="yes"> Add Lines</label>
		<label><input type="checkbox" name="delete" value="yes"> Delete Lines</label>
		<label><input type="checkbox" name="check" value="yes"> Edit Lines</label>
		<label><input type="checkbox" name="edit" value="yes"> Check Lines</label>
		<label><input type="checkbox" name="timing" value="yes"> Timing Lines</label>
		</div>
		<input type="submit" style='float:right;' value="{submit}" />
		<input type="hidden" name="tid" value="{tid}" />
	<!-- <input type="hidden" name="dataonly" value="yes"/> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getcontroller" value="team"/> --> <!-- uncomment if using ajax -->
	<!-- <input type="hidden" name="getsection" value="AddMember"/> --> <!-- uncomment if using ajax -->
	<input type="hidden" name="page" value="team" /> <!-- comment if using ajax -->
	<input type="hidden" name="sec" value="manage" /> <!-- comment if using ajax -->
	<input type="hidden" name="ssec" value="AddMember"/>
	<input type="hidden" name="h" value="adduser"/>
	</form>
</div>


</td>
</tr>
</tbody>
</table>

</DIV>
</div>
<br>
