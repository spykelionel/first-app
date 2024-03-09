<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Users Page</p>
    <div>
        <p>Users</p>
        @if(session()->has('success'))
            <p class="text-success">{{session('success')}}</p>
        @endif
        <p>Create new <a href="{{route('users.create')}}">User</a></p>
       <ul>
            @foreach($users as $user)
                <li>{{$user->name}}, <a href="{{route('users.edit', ['user'=>$user])}}">Edit User</a></li>
            @endforeach
       </ul>
    </div>
</body>
</html>