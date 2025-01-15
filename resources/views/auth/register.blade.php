<x-layout>
    <div class="bg-gray-700 ">
        <div>.</div>
        <h1 class="font-bold text-center mt-15 text-4xl mb-8">Register</h1>
        <x-forms.form method='POST' action='/register' enctype='multipart/form-data'>
            @csrf

            <x-forms.input label='your name' name='name' />
            <x-forms.input label='Email' name='email' type='email' />
            <x-forms.input label='password' name='password' type='password' />
            <x-forms.input label='password confirm' name='password_confirmation' type='password' />
            <x-forms.divider />



            <div class="lg:col-span-2">
                <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
                    <div class="md:col-span-3">
                        <x-forms.input label='address' name='address' type='text' />
                    </div>

                    <div class="md:col-span-2">
                        <x-forms.input label='city' name='city' type='text' />
                    </div>

                    <div class="md:col-span-2">
                        <x-forms.input label='country' name='country' type='text' />
                    </div>
                    <div class="md:col-span-2">
                        <x-forms.input label='state' name='state' type='text' />
                    </div>

                    <div class="md:col-span-1">
                        <x-forms.input label='zipcode' name='zipcode' type='text' />
                    </div>






                </div>
            </div>





            <x-forms.button class="bg-blue-800 rounded py-2 px-6 font-bold  ">Create acount
            </x-forms.button>

        </x-forms.form>
        <br>

    </div>
</x-layout>
