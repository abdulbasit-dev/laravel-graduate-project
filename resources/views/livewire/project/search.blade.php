<div>
    <h2>{{ $search }}</h2>
    <input type="text" class="form-control" wire:model='search'>
</div>

<ul>
    @foreach ($users as $user)
    <li>{{ $user->name }}</li>
    @endforeach
</ul>
