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
        @if(session()->has('success'))
            <p class="text-success">{{session('success')}}</p>
        @endif
        <p>Create new <a href="{{route('users.create')}}">User</a></p>
       <ol>
            @foreach($users as $user)
                <li>{{$user->name}}, <a href="{{route('users.edit', ['user'=>$user])}}">Edit</a> || 
                    <form  action="{{route('users.delete', ['user'=>$user])}}" method="post">
                        @csrf
                        @method("delete")
                    <input type="submit" value="Delete"/>
                    </form>
            </li>
            @endforeach
       </ol>
    </div>
    <div>
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
    </div>
</body>
</html>