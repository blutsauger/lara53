
<form method="POST" action="/users">
{!! csrf_field() !!}
<table>
	<tr>
		<td>Name</td>
		<td><input type="text" name="name"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password"></td>
	</tr>
	<tr><td align="center" colspan="2"><input type="submit" value="submit"></td></tr>
</table>
</form>