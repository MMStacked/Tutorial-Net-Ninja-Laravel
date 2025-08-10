<x-layout> 

<form action="{{ route('ninjas.store') }}" method="POST">
    {{-- A cross site request forgery --}}
    @csrf

    <h2>Create a New Ninja</h2>

    {{-- Ninja Name --}}
    <Label for="name">Ninja Name</Label>
    <input 
        type="text"
        id="name"
        name="name"
        value="{{ old('name') }}"
        Required
    >

    {{-- Ninja Strength --}}
    <label for="skill">Ninja Skill (0-100):</label>
    <input
        type="number"
        id="skill"
        name="skill"
        value="{{ old('skill') }}"
        required
    >

    {{-- Ninja Bio --}}
    <label for="bio">Biography:</label>
    <textarea 
        rows="5"
        id="bio"
        name="bio"
        required
    >{{ old('bio') }}</textarea>

    {{-- Select a Dojo --}}
    <label for="dojo_id">Dojo:</label>
    <select id="dojo_id" name="dojo_id" required>
        <option value="" disabled selected>Select a dojo</option>
        @foreach($dojos as $dojo)
        <option value="{{ $dojo->id }}" {{ $dojo->id == old('dojo_id') ? 'selected' : ''}}>
            {{ $dojo->name }}
        </option>
        @endforeach
    </select>
    
    <button type="submit" class="btn mt-4">Create Ninja</button>

    {{-- Validation errors --}}
    @if ($errors->any())
        <ul class="px-4 py-2 bg-red-100">
            <p class="my-2 text-red-500">Error:</p>
            @foreach($errors->all() as $error)
                <li class="my-2 text-red-500">
                    - {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif

</form>
</x-layout>


