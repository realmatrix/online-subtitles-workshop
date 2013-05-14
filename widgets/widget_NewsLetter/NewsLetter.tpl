<html>
	<head>
		<script>
			function inputFocus(i){
			    if(i.value==i.defaultValue){ i.value=""; i.style.color="#000"; }
			}
			function inputBlur(i){
			    if(i.value==""){ i.value=i.defaultValue; i.style.color="#888"; }
			}
		</script>
	</head>
	<body>
		<form method="get" action="index.php">			
			<table cellspacing="0" cellpadding="1" style="width:100%;">
				<tr><td><input type="text" name="name" value="{NewsLetterName}" style="width:100%;color:#888;" onfocus="inputFocus(this)" onblur="inputBlur(this)" /></td></tr>
				<tr><td><input type="text" name="email" value="{NewsLetterEmail}" style="width:100%;color:#888;" onfocus="inputFocus(this)" onblur="inputBlur(this)" /></td></tr>
				<tr><td><input type="submit" value="{NewsLetterSubmit}" /></td></tr>
			</table>
		</form>
	</body>
</html>