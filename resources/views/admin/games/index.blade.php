<x-layout> 
    <x-slot:subtitle>
        Games
    </x-slot:subtitle>
    <h2>Games</h2>
    <form method="GET" action="url('admin/games')">
        <input type="search" name="search" placeholder="Search games..." value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>
    <table id="usersTbl">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Author ID</th>
                <th>Created at</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($games as $gameList)
                <tr>
                    <td>{{ $gameList -> title }}</td>
                    <td>{{ $gameList -> description }}</td>
                    <td>{{ $gameList -> author_id }}</td>
                    <td>{{ $gameList -> created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $games->links()}}
</x-layout>
