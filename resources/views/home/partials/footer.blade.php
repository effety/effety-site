<footer class=" bg-opacity-40 border-t border-gray-400 dark:border-transparent  bg-gray-100 dark:bg-transparent px-6 py-10">
    <div class="flex flex-col items-center space-y-6">
        <!-- Logo -->
        <img src="{{asset('images/logo.png')}}" alt="Swiss Crypto Club Logo" class="hidden dark:block w-64 h-auto">
        <img src="{{asset('images/logoLight.jpeg')}}" alt="Swiss Crypto Club Logo" class="dark:hidden w-64 h-auto">

        <!-- Social Media Links -->
        <div class="flex space-x-6">
            <!-- X Logo -->
            <a href="#" class="relative group">
                <img src="{{asset('images/xBlack.svg')}}" alt="X Logo" class="w-6 h-6 dark:hidden">
                <img src="{{asset('images/xWhite.svg')}}" alt="X Logo" class="w-6 h-6 hidden dark:block">
            </a>
            <!-- LinkedIn Logo -->
            <a href="#" class="relative group">
                <img src="{{asset('images/linkedinBlack.svg')}}" alt="LinkedIn Logo" class="w-6 h-6 dark:hidden">
                <img src="{{asset('images/linkedinWhite.svg')}}" alt="LinkedIn Logo" class="w-6 h-6 hidden dark:block">
            </a>
            <!-- Facebook Logo -->
            <a href="#" class="relative group">
                <img src="{{asset('images/fbBlack.svg')}}" alt="Facebook Logo" class="w-6 h-6 dark:hidden">
                <img src="{{asset('images/fbWhite.svg')}}" alt="Facebook Logo" class="w-6 h-6 hidden dark:block">
            </a>
            <!-- GitHub Logo -->
            <a href="#" class="relative group">
                <img src="{{asset('images/githubBlack.svg')}}" alt="GitHub Logo" class="w-6 h-6 dark:hidden">
                <img src="{{asset('images/githubWhite.svg')}}" alt="GitHub Logo" class="w-6 h-6 hidden dark:block">
            </a>
            <!-- Dribble Logo -->
            <a href="#" class="relative group">
                <img src="{{asset('images/dribbleBlack.svg')}}" alt="Dribble Logo" class="w-6 h-6 dark:hidden">
                <img src="{{asset('images/dribbleWhite.svg')}}" alt="Dribble Logo" class="w-6 h-6 hidden dark:block">
            </a>
        </div>

        <!-- Horizontal Line -->
        <div class="w-full border-t border-gray-400 dark:border-gray-700 max-w-3xl"></div>

        <!-- Footer Text -->
        <p class="text-sm text-gray-700 dark:text-gray-300 text-center">
            All rights reserved 2025 © Swiss Crypto Club.
        </p>
    </div>
</footer>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const menuLinks = document.querySelectorAll('a[href*="#"]');
    menuLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            console.log('Link clicked:', link.getAttribute('href')); // Debug log
            const target = link.getAttribute('href').split('#')[1];
            if (target) {
                window.location.href = `{{ route('home') }}#${target}`;
            }
        });
    });
});

</script>