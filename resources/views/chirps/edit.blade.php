<x-app-layout>

    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('chirps.update', $chirp) }}">
            @csrf
            @method('patch')
            <textarea placeholder="what is on your mind?"
                class="block w-full border-gray-200 focus:border-indigo-300 focus:ring focus:ring-indigo-300 focus:ring-opacity-50 rounded-md shadow-md"
                name="message">{{ old('message', $chirp->message) }}
            </textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button> {{ __('Save') }}</x-primary-button>
                <a href="{{ route('chirps.index') }}">{{ __('Cancel') }}</a>
            </div>
        </form>
    </div>


</x-app-layout>
