<x-layout>
    <div class="bg-gray-700 ">




        <div>.</div>
        <h1 class="font-bold text-center mt-15 text-4xl mb-8">Register</h1>
        <x-forms.form method='POST' action='/items' enctype='multipart/form-data'>
            @csrf
            <x-forms.input label='item name' name='ItemName' />
            @error('ItemName')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <x-forms.input label='item salary' name='ItemSalary' />
            @error('ItemSalary')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <x-forms.input label='item photo' name='ItemImage[]' type='file' multiple />
            @error('ItemImage')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
            <x-forms.button class="bg-blue-800 rounded py-2 px-6 font-bold">Add Item
            </x-forms.button>
            <x-forms.divider />

        </x-forms.form>
        <br>

    </div>
</x-layout>
