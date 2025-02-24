<x-layout>
    <div class="bg-gray-700 ">
        <div>.</div>
        <h1 class="font-bold text-center mt-15 text-4xl mb-8">Register</h1>
        <x-forms.form method='POST' action='/items' enctype='multipart/form-data'>
            @csrf
            <x-forms.input label='item name' name='ItemName' />
            <x-forms.input label='item salary' name='ItemSalary' />
            <x-forms.input label='item photo' name='ItemImage[]' type='file' multiple />
            <x-forms.button class="bg-blue-800 rounded py-2 px-6 font-bold">Add Item
            </x-forms.button>
            <x-forms.divider />

        </x-forms.form>
        <br>

    </div>
</x-layout>
