<x-app-layout>
    <div class="note-container single-note">
        <h1>Create New Note</h1>
        <form action="{{ route('note.store') }}" method="post" class="note">
            @csrf
            <textarea name="note" class="note-body" placeholder="Enter your note here..." rows="10"></textarea>
            <div class="note-buttons">
                <a href="{{ route('note.index') }}" class="note-cancel-button">Cancel</a>
                <button class="note-submit-button">Submit</button>
            </div>
        </form>
    </div>
</x-app-layout>
