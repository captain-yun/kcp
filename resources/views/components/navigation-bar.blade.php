<nav class="flex items-center bg-white px-10 py-2 shadow-md">
    <i class="uil uil-bars navOpenBtn"></i>
    <a href="#" class="logo"><img src="images/logo.png" alt="" class="w-20 h-auto"></a>
    <ul class="flex items-center space-x-7">
        <i class="uil uil-times navCloseBtn hidden md:block"></i>
        <li class="relative group">
            <a href="#" class="font-medium">회사소개</a>
            <div class="absolute left-0 hidden group-hover:block bg-white border-t-2 border-red-600 mt-2 p-2 rounded-lg shadow-lg">
                <ul>
                    <li><a href="menu/intro.html" class="text-gray-800 hover:text-red-600">회사개요</a></li>
                    <li>CEO 인사말</li>
                    <li>오시는길</li>
                </ul>
            </div>
        </li>
        <!-- Add more menu items here -->
    </ul>
    <i class="uil uil-search search-icon hidden md:block"></i>
    <div class="search-box hidden md:block">
        <i class="uil uil-search search-icon"></i>
        <input type="text" placeholder="Search here..." class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:border-blue-500">
    </div>
</nav>
