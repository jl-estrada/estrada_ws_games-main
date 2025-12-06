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
        <script>

            document.getElementById('delete-game-btn').addEventListener('click', function() {
                if (confirm('Are you sure you want to delete this game? This action cannot be undone.')) {
                    fetch('{{ route('admin.games.destroy', $game->id) }}', {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        }
                    })
                    .then(response => {
                        if (response.ok) {
                            alert('Game deleted successfully.');
                            window.location.href = '{{ route('admin.games.index') }}';
                        } else {
                            alert('Failed to delete the game.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred while deleting the game.');
                    });
                }
            });
        </script>
            
    </x-slot:subtitle>
    <h2>Games</h2>
</x-layout>
