<x-layout>
    <x-slot:subtitle>
        Admin users
    </x-slot:subtitle>
    <h2>Admin Users</h2>
    <table id="adminTbl">
        <thead>
            <tr>
                <th>Username</th>
                <th>Created at</th>
                <th>Last Login</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($admin_users as $admin)
                <tr>
                    <td>{{ $admin -> username }}</td>
                    <td>{{ $admin -> created_at }}</td>
                    <td>{{ $admin -> last_login }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>