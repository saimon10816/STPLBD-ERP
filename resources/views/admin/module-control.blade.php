<h1>Manage Modules</h1>
@foreach($modules as $module)
    <form action="{{ route('toggle.module', $module->id) }}" method="POST">
        @csrf
        <label>{{ $module->name }}</label>
        <input type="checkbox" name="is_active" {{ $module->is_active ? 'checked' : '' }}>
        <button type="submit">Update</button>
    </form>
@endforeach
