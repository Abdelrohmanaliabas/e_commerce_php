<x-layout>
    <div class="bg-gray-700 ">
        <div>.</div>
        <h1 class="font-bold text-center text-4xl mb-8">Log in</h1>
        <x-forms.form method='POST' action='/login'>
            <x-forms.input label='Email' name='email' type='email' />
            <x-forms.input label='password' name='password' type='password' />

            <x-forms.button class="bg-blue-800 rounded py-2 px-6 font-bold">LogIn
            </x-forms.button>
        </x-forms.form>
    </div>
</x-layout>
