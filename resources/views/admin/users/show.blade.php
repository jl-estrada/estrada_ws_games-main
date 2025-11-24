<x-layout> 
    <section>
        <h3>Developed Games</h3>
        @if($user->games->isEmpty())
            <p>This user has not developed any games yet.</p>
        @else
        @foreach ($user->games as $game)
            <div>
                <h4>{{ $game->title }}</h4>
                <p>{{ $game->description }}</p>
            </div>
        @endforeach
        @endif
    </section>
    <section>
        <h3>Played Games</h3>
        @if($user->playedGames->isEmpty())
            <p>This user has not played any games yet.</p>
        @else
        @foreach ($user->playedGames as $game)
            <div>
                <h4>{{ $game->title }}</h4>
                <p>{{ $game->description }}</p>
                <p>Highest Score: 
                {{ $game->pivot->times_played }}</p>
            </div>
        @endforeach
        @endif
    </section>
    <x-slot:subtitle>
        {{ $user->username }}
    </x-slot:subtitle>
    <h2>{{ $user->username }}</h2>
</x-layout>
