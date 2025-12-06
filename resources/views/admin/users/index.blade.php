<x-layout> 
    <x-slot:subtitle>
        Platform users
    </x-slot:subtitle>
    <h2>Platform users</h2>
    <table id="usersTbl">
        <thead>
            <tr>
                <th>Username</th>
                <th>Registered at</th>
                <th>Last login</th>
                <th>Profile</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $platUsers -> username }}</td>
                    <td>{{ $platUsers -> created_at }}</td>
                    <td>{{ $platUsers -> last_login }}</td>
                    <td><a href= {{url('admin/users/' . $user->username) }}>View Profile</a></td>
                </tr>
            @endforeach
        </tbody>

         <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $game)
                <tr>
                    <td>{{ $game -> title }}</td>
                    <td>{{ $game -> description }}</td>
                    <td>{{ $game -> author -> username }}</td>
                    <td>{{ $game -> created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $platform_users->links()}}
</x-layout>
