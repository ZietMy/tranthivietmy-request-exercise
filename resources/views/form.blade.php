<form action="/register" method="post">
    @csrf
    <div>
        <label for="">Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Username:</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="">Password</label>
        <input type="password" name="password">
        <input type="hidden"  name="_token" value="{{ csrf_token() }}">
    </div>
    <button type="submit">Register</button>
</form>