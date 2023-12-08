<form method="post" action="/dashboard">
    @csrf
<input type="text" name="name" placeholder="Enter your name"/>
<input type="password" name="password" placeholder="Enter your password"/>
<input type="submit" value="Login"/>
</form>