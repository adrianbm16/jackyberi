<x-layout>

    <x-slot:title> Contact </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
    </x-slot>

    <div class="content">
        <h1>Contact</h1>

        <p class="text1">For any inquiries, please fill out the form below and we will get back to you as soon as
            possible.</p>

        <p class="text2">Or you can send the email direct to <a href="">jacky.beri67@gmail.com</a></p>

        <form action="{{ route('contact.store') }}" method="POST" id="contact_form">
            @csrf
            
            <div class="flex">
                <div class="name input-container">
                    <input type="text" placeholder="NAME" name="name" id="name_input" value="{{ old('name') }}">
                    @error('name')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>

                <div class="number input-container">
                    <input type="text" placeholder="NUMBER" name="number" id="number_input" value="{{ old('number') }}">
                    @error('number')
                        <div class="error"> <p>{{ $message }}</p> </div>
                    @enderror
                </div>
            </div>

            <div class="email input-container">
                <input type="email" placeholder="EMAIL" name="email" id="email_input" value="{{ old('email') }}">
                @error('email')
                    <div class="error"> <p>{{ $message }}</p> </div>
                @enderror
            </div>

            <div class="subject input-container">
                <input type="text" placeholder="SUBJECT" name="subject" id="subject_input" value="{{ old('subject') }}">
                @error('subject')
                    <div class="error"> <p>{{ $message }}</p> </div>
                @enderror
            </div>

            <div class="message input-container">
                <textarea name="message" placeholder="MESSAGE" id="message_input" cols="30" rows="5">{{ old('message') }}</textarea>
                @error('message')
                    <div class="error"> <p>{{ $message }}</p> </div>
                @enderror
            </div>

            <div class="submit">
                <input type="submit" value="Send Message" id="form_button" />
            </div>
        </form>

    </div>

</x-layout>
