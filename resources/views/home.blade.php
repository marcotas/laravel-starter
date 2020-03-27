<x-layouts.app>
    <form method="POST" action="/home" class="max-w-4xl p-5 mx-auto mt-12">
        @csrf
        <input-text
            label="Email"
            value="{{ old('name') }}"
            name="name"
            placeholder="Digite alguma coisa..."
            error="{{ $errors->first('name') }}"
        ></input-text>

        <button class="block mt-3 bg-blue-500 text-white px-3 py-2 rounded shadow" type="submit">Enviar</button>
    </form>
</x-layouts.app>
