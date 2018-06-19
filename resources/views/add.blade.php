<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/index/add?a=a&b=b" method="post">
		{{csrf_field()}}
		<p>user:
			<input type="text" name="name">
		</p>
		<p>pass:
			<input type="password" name="pass">
		</p>
		<p>submit:
			<input type="submit" value="提交">
		</p>
	</form>
</body>
</html>