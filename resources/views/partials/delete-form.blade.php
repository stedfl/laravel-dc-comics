<form class="d-inline" action="{{ route('comic.destroy', $comic) }}" method="POST"
    onsubmit="return confirm('Do you confirm to delete {{ $comic->title }}?')">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger" title="delete" type="submit">
        <i class="fa-solid fa-trash-can"></i>
    </button>
</form>
