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

        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        <script>
            const el = document.querySelector('.alert');
            if(!el) {
                setTimeout(() => {
                    el.style.transition = 'opacity 0.5s ease';
                    el.style.opacity = '0';
                    setTimeout(() => el.remove(), 500);
                }, 3000);
            }
        {{ $user->username }}

        @if ({!user-> is_blocked})
        <button>Block User</button>
        @else
        <button disabled>User is Blocked</button>
        @endif


        
    <dialog>
        <form action="{{ url('admin/users/' . $user->username . '/block') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                <label>Reason for Blocking</label><br>
                <select name="block_reason" required>
                    <option>You have been blocked by an administrator.</option>
                    <option>You have been blocked for spamming.</option>
                    <option>You have been blocked for cheating</option>
                </select>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn" onclick="document.querySelector('dialog').close()">Cancel</button>
                <button type="submit" class="btn btn-danger">Block User</button>
            </div>
        </form>
    </dialog>
        @endif
    </x-slot:subtitle>
    <h2>{{ $user->username }}</h2>
</x-layout>
