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
                <th>Last Login</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($platform_users as $platUsers)
                <tr>
                    <td>{{ $platUsers -> username }}</td>
                    <td>{{ $platUsers -> created_at }}</td>
                    <td>{{ $platUsers -> last_login }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
