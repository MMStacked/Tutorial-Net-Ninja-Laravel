<x-layout> 

<form action="" method="">
    {{-- A cross site request forgery --}}
    @csrf

    <h2>Create a New Ninja</h2>

    {{-- Ninja Name --}}
    <Label for="name">Ninja Name</Label>
    <input 
        type="text"
        id="name"
        name="name"
        Required
    >

    {{-- Ninja Strength --}}
    <label for="skill">Ninja Skill (0-100):</label>
    <input
        type="number"
        id="skill"
        name="skill"
        required
    >

    {{-- Ninja Bio --}}
    <label for="bio">Biography:</label>
    <textarea 
        rows="5"
        id="bio"
        name="bio"
        required
    ></textarea>

    {{-- Select a Dojo --}}
    <label for="dojo_id">Dojo:</label>
    <select id="dojo_id" name="dojo_id" required>
        <option value="" disabled selected>Select a dojo</option>
        @foreach($dojos as $dojo)
        <option value="{{ $dojo->id }}">
            {{ $dojo->name }}
        </option>
        @endforeach
    </select>
    
    <button type="submit" class="btn mt-4">Create Ninja</button>

    {{-- Validation errors --}}

</form>
</x-layout>


