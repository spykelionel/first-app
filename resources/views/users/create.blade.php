<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create user</title>
</head>
<body>
    <h2>Create a user</h2>
    <form action="{{route('users.store')}}" method="post">
    @csrf
    @method('post')
    <div>
        <label for="name">Name</label>
        <input id="name" name="name" type="text" placeholder="name">
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="email">
    </div>
    <div>
        <label for="password">Password</label>
        <input id="password" name="password"  type="password" placeholder="password">
    </div>
    <div>
        <button type="submit">Add user</button>
    </div>
    </form>
    
</body>
</html>