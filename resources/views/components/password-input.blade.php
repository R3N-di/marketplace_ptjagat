<div class="relative flex items-center">
    <input id="passwordInput" type="password" {!! $attributes->merge([
        'class' => 'border-[#DEDEDEDE] border-2 p-2 w-full outline-none focus:ring-0 focus:border-[#DEDEDEDE] focus:bg-transparant h-9',
    ]) !!} oninput="togglePasswordIcon()"/>
    <button id="passwordToggle" type="button"
        class="border border-solid border-l-0 border-[#DEDEDEDE] border-2 absolute inset-y-0 right-0 px-4 bg-white flex items-center hidden"
        onclick="togglePasswordVisibility(this)">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6 hidden password-visible-icon">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path
                    d="M15.0007 12C15.0007 13.6569 13.6576 15 12.0007 15C10.3439 15 9.00073 13.6569 9.00073 12C9.00073 10.3431 10.3439 9 12.0007 9C13.6576 9 15.0007 10.3431 15.0007 12Z"
                    stroke="#B52225" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path
                    d="M12.0012 5C7.52354 5 3.73326 7.94288 2.45898 12C3.73324 16.0571 7.52354 19 12.0012 19C16.4788 19 20.2691 16.0571 21.5434 12C20.2691 7.94291 16.4788 5 12.0012 5Z"
                    stroke="#B52225" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
        </svg>

        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#B52225"
            class="h-6 w-6 password-hidden-icon">
            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
            <g id="SVGRepo_iconCarrier">
                <path
                    d="M2.99902 3L20.999 21M9.8433 9.91364C9.32066 10.4536 8.99902 11.1892 8.99902 12C8.99902 13.6569 10.3422 15 11.999 15C12.8215 15 13.5667 14.669 14.1086 14.133M6.49902 6.64715C4.59972 7.90034 3.15305 9.78394 2.45703 12C3.73128 16.0571 7.52159 19 11.9992 19C13.9881 19 15.8414 18.4194 17.3988 17.4184M10.999 5.04939C11.328 5.01673 11.6617 5 11.9992 5C16.4769 5 20.2672 7.94291 21.5414 12C21.2607 12.894 20.8577 13.7338 20.3522 14.5"
                    stroke="#B52225" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
        </svg>
    </button>
</div>

<script>
    function togglePasswordIcon() {
        const passwordInput = document.getElementById('passwordInput');
        const passwordToggle = document.getElementById('passwordToggle');

        if (passwordInput.value) {
            passwordToggle.classList.remove('hidden');
        } else {
            passwordToggle.classList.add('hidden');
        }
    }

    function togglePasswordVisibility(button) {
        const input = button.parentElement.querySelector('input');
        const passwordVisibleIcon = button.querySelector('.password-visible-icon');
        const passwordHiddenIcon = button.querySelector('.password-hidden-icon');

        const type = input.getAttribute('type') === 'password' ? 'text' : 'password';
        input.setAttribute('type', type);

        if (type === 'password') {
            passwordVisibleIcon.classList.remove('hidden');
            passwordHiddenIcon.classList.add('hidden');
        } else {
            passwordVisibleIcon.classList.add('hidden');
            passwordHiddenIcon.classList.remove('hidden');
        }
    }
</script>
