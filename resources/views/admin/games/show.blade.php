<x-layout> 
    <p>Created by: {{ $game->developer->username }}</p>
     <section>
        <h3>Top Scores</h3>
        <div id="top-scores">
            @if games->topScores()->isEmpty()
                <p>No scores available for this game yet.</p>
            @else
                <ol>
                @foreach ($game->topScores() as $score)
                    <li>
                        {{ $score->user->username }} 
                        {{ $score->score }}
                        {{ $score->timestamp }}
                    </li>
                @endforeach
                </ol>      
        </div>
        @endif
    </section> 
    <x-slot:subtitle>
        Game
    </x-slot:subtitle>
    <h2>Games</h2>
</x-layout>
