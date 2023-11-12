<form class="mt-16" method="post" action="{{route('form.send')}}" id="contactForm">
    @csrf
    <div class="mb-6">
        <label for="name"  class="block mb-2 text-sm font-medium text-gray-900 ">Imię:</label>
        <input type="text" id="name" name="name"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primaryColor-400 focus:border-primaryColor-400 block w-full p-2.5 "
             required>
    </div>
    <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Adres Email:</label>
        <input type="email" id="email" name="email"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primaryColor-400 focus:border-primaryColor-400 block w-full p-2.5 "
            required>
    </div>
    <div class="mb-6">
        <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 ">Numer
            Telefonu:</label>
        <input type="tel" id="phone" name="phone"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primaryColor-400 focus:border-primaryColor-400 block w-full p-2.5 dark:bg-gray-700 "
           >
    </div>

    <div class="mb-6">
        <label for="content" class="block mb-2 text-sm font-medium text-gray-900 ">Wiadomość:</label>
        <textarea id="content" name="content" rows="4"
            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-sm border border-gray-300 focus:ring-primaryColor-400 focus:border-primaryColor-400 "
           required></textarea>
    </div>


    <div class='flex justify-center items-center'>


        <button type="submit"
            class= 'border-2 border-primaryColor-400 px-8 py-3 text-base text-center text-black bg-transparent rounded-sm hover:bg-primaryColor-400  focus:ring-4 focus:outline-none focus:ring-blue-300 uppercase font-bold transition-colors '>
            Wyślij
        </button>
</form>
</div>
