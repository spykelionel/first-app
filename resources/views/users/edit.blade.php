<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
</head>
<body>
<p>Editing user: <strong>{{$user->name}}</strong> </p>
    <form action="{{route('users.update', ['user'=>$user])}}" method="post">
    @csrf
    @method('put')
    <div>
        <label for="name">Name</label>
        <input id="name" name="name" type="text" placeholder="name" value="{{$user->name}}">
    </div>

    <div>
        <label for="email">Email</label>
        <input id="email" name="email" type="email" placeholder="email" value="{{$user->email}}">
    </div>
    <div>
        <label for="password">Password</label>
        <input id="password" name="password"  type="password" placeholder="password" value="{{$user->password}}">
    </div>
    <div>
        <button type="submit">Update user</button>
    </div>
    </form>
    
</body>
</html>