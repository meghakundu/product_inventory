<form method="POST" action="/register">
    @csrf
    <input type="text" name="name" placeholder="Enter your name"/>
    <input type="text" name="email" placeholder="Enter your email"/>
    <input type="password" name="password" placeholder="Enter your password"/>
    <input type="submit" name="" value="Register"/>
</form>