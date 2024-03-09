@vite(['resources/css/app.css', 'resources/js/app.js'])


<nav class="bg-white border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Get started</button>
      <button data-collapse-toggle="navbar-cta" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-cta" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
    <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="#" class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:dark:text-blue-500" aria-current="page">Home</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 d:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 md:p-0 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
      </li>
    </ul>
  </div>
  </div>
</nav>


<!-- <nav class="flex items-center justify-between fixed top-0 left-0 w-full px-10 py-2 pl-20 bg-white shadow-md z-50">
    <i class="navOpenBtn"></i>
    <a href="#" class="w-20">
        <img src="{{ asset('images/logo.png') }}" alt="" class="font-medium h-auto" >
    </a>
    <ul class="flex items-center gap-x-10 list-none">
    <i class="navCloseBtn"></i>
    <li class="group menu">
        <a href="#" class="font-bold">회사소개</a>
        <div class="absolute hidden border-solid border-2 group-hover:block py-5 pl-3">
            <ul>
                <li><a href="menu/intro.html">회사개요</a></li> 
                <li>CEO 인사말</li> 
                <li>오시는길</li> 
            </ul>
        </div>
    </li>
    <li class="group menu">
        <a href="#">제품소개</a>
    </li>
    <li class="group menu">
        <a href="#">홍보센터</a>
        <div class="absolute hidden group-hover:block py-5">
            <ul>
                <li>보도자료</li>                             
                <li>카탈로그</li>                     
            </ul>
        </div>
    </li>
    <li class="group menu">
        <a href="#">고객지원</a>
        <div class="absolute hidden group-hover:block py-5">
            <ul>
                <li>공지사항</li>                             
                <li>상담전화</li>                     
            </ul>
        </div>
    </li>
    <li class="group menu">
        <a href="#">상담문의</a>
        <div class="absolute hidden group-hover:block py-5">
            <ul>
                <li>제품문의</li>                             
                <li>채용문의</li> 
                <li>기타문의</li> 
            </ul>
        </div>
    </li>
</ul>
<script src="{{ asset('js/script.js') }}"></script>