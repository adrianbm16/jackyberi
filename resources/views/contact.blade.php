<x-layout>

    <x-slot:title> Contact </x-slot> <!-- Titulo de la pagina -->

    <x-slot:styles> <!-- Estilos de la pagina -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">
    </x-slot>

    <div class="content">
        <h1>Contact</h1>

        <p class="text1">For any inquiries, please fill out the form below and we will get back to you as soon as possible.</p>

        <p class="text2">Or you can send the email direct to <a href="">jacky.beri67@gmail.com</a></p>

        <form action="/contact" method="get" id="contact_form">
            @csrf
            <div class="name">
                <input type="text" placeholder="NAME" name="name" id="name_input" required>
            </div>

            <div class="email">
                <input type="email" placeholder="EMAIL" name="email" id="email_input" required>
            </div>

            <div class="telephone">
                <input type="text" placeholder="NUMBER" name="telephone" id="telephone_input" required>
            </div>

            <div class="subject">
                <input type="text" placeholder="SUBJECT" name="subject" id="subject_input" required>
            </div>

            <div class="message">
                <textarea name="message" placeholder="MESSAGE" id="message_input" cols="30" rows="5" required></textarea>
            </div>

            <div class="submit">
                <input type="submit" value="Send Message" id="form_button" />
            </div>
        </form>

    </div>

</x-layout>
