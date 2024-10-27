<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {}; ?>

<footer class="py-12 text-white bg-black">
    <div class="container grid grid-cols-1 gap-8 px-4 mx-auto md:grid-cols-3">
        <div>
            <h3 class="mb-4 text-lg font-bold text-red-600">
                DR. ABI FAPOHUNDA
            </h3>
            <p>
                Dr. Abi Fapohunda is an Assistant Professor at the University of Pittsburgh School of Public Health
                and have conducted several studies among African Americans, Africans in the Diaspora and on the
                African Continent.
            </p>
        </div>

        <div>
            <h3 class="mb-4 text-lg font-bold">
                CONTACT
            </h3>
            <ul>
                <li>
                    21 Valentin Paterson Road 24, US
                </li>
                <li>
                    info@mail.com
                </li>
                <li>
                    (123) 567 8901
                </li>
            </ul>
        </div>
        <div>
            <h3 class="mb-4 text-lg font-bold">
                KEEP IN TOUCH
            </h3>
            <div class="space-x-4">
                <a class="text-white hover:text-red-600" href="#">
                    <i class="fab fa-twitter">
                    </i>
                </a>
                <a class="text-white hover:text-red-600" href="#">
                    <i class="fab fa-linkedin">
                    </i>
                </a>
                <a class="text-white hover:text-red-600" href="#">
                    <i class="fab fa-instagram">
                    </i>
                </a>
            </div>
        </div>
    </div>
    <div class="mt-8 text-center ">
        <p>
            © {{ now()->year }} All Rights Reserved | Dr. Abi Fapohunda
        </p>
    </div>
</footer>
<script>
    document.getElementById('menu-btn').addEventListener('click', function() {
        var menu = document.getElementById('mobile-menu');
        if (menu.classList.contains('hidden')) {
            menu.classList.remove('hidden');
        } else {
            menu.classList.add('hidden');
        }
    });
</script>
