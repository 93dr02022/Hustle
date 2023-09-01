<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ config()->get('direction') }}" @class(['dark' => current_theme() === 'dark'])>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Generate seo tags --}}
    {!! SEO::generate() !!}
    {!! JsonLd::generate() !!}
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hubballi&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700;800;900&display=swap">
    <link rel="icon" type="image/png" href="http://localhost:3030/img/default/default-placeholder.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <title>Riverr | freelance Services - About</title>

    {{-- Livewire styles --}}
    @livewireStyles


    {{-- Styles --}}
    @if (App::environment('local'))
        <link rel="preload" href="{{ mix('css/app.css') }}" as="style">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @else
        @php
            $cssVersion = \Illuminate\Support\Facades\Cache::rememberForever('cssVersion', fn() => uid());
        @endphp
        <link rel="preload" href="https://hustlebucket.s3.amazonaws.com/public/css/app.css?v={{ $cssVersion }}" as="style">
        <link rel="stylesheet" href="https://hustlebucket.s3.amazonaws.com/public/css/app.css?v={{ $cssVersion }}">
    @endif

    <link rel="preload" href="{{ livewire_asset_path() }}" as="script">


     {{-- Custom css --}}
    <style>
        :root {
            --color-primary: "#1d46f5";
            --color-primary-h: {{ hex2hsl('#1d46f5')[0] }};
            --color-primary-s: {{ hex2hsl('#1d46f5')[1] }}%;
            --color-primary-l: {{ hex2hsl('#1d46f5')[2] }}%;
        }

        html {
            font-family: Heebo, sans-serif !important;
        }
    </style>

     {{-- Styles --}}
    @stack('styles')

    {{-- JavaScript variables --}}
    <script>
        __var_app_url = "{{ url('/') }}";
        __var_app_locale = "{{ app()->getLocale() }}";
        __var_rtl = @js(config()->get('direction') === 'ltr' ? false : true);
        __var_primary_color = "{{ settings('appearance')->colors['primary'] }}";
        __var_axios_base_url = "{{ url('/') }}/";
        __var_currency_code = "{{ settings('currency')->code }}";
    </script>

    </head>

    <body class="antialiased bg-gray-50 dark:bg-[#161616] text-gray-600 min-h-full flex flex-col application application-ltr overflow-x-hidden overflow-y-scroll {{ app()->getLocale() === 'ar' ? 'application-ar' : '' }}"
    style="overflow-y: scroll">

    {{-- Header --}}
    @livewire('main.about.header')

        <main class="flex-grow">
            {{-- about Banner  --}}
            <div class="min-h-screen">
                <div class="relative  px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 md:block " >
                       <div class="flex flex-row">
                        <!-- ... -->
                       
                        <div class="flex-1 border-l-[6px] xs:border-l-[5px] basis-1/4 md:basis-1/3 space-y-125">
                            <div class="h-[calc(100%_-_3rem)] pt-20 ">
                                <p class="mb-5 pt-10  text-5xl font-bold leading-1 text-[#3F3F46]  font-bold font-sans capitalize  " >
                                    <span class="text-[#F18522] " > Connecting </span> people with 
                                </p>
                                <p class="mb-5   text-5xl font-bold leading-1 text-[#3F3F46]  font-bold font-sans capitalize  " >
                                    
                                    skilled professionals <span class="text-[#1D46F5] ">worldwide</span>
                                </p>
                                <p class="font-semibold pt-10 text-[#1D46F5]  text-2xl  leading-loose   font-sans capitalize">
                                    Reliable, secure, and efficient: find the perfect match <br> for your project with our skilled professionals.
                                </p>
                                <p class="mb-3 pt-10 text-[#3F3F46]  text-xs font-Inter"    >
                                    With secure payments and a commitment to quality, you can trust our freelance website to get <br/> the job done right. Post your project today and find your perfect match!
                                </p>
                                <div class="pt-8">
                                    <a class="pt-30 px-16 sm:px-9 py-4  rtl:mr-2 text-sm font-normal text-white bg-[#F18522] rounded-md border-none hover:bg-[#f5841b] focus:ring-0 focus:outline-none" href="/">Get Started</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex basis-1/4 md:basis-1/3 bg-[#F18522] rounded-tl-lg ">

                                <img src="img/about/aboutbanner.png" alt="banner" class="pt-12" />

                        </div>
                       </div>
                </div>
            </div>

            {{-- experience the difference  --}}
            <div class=" bg-[#F1F4FF]">
                    <div class="container mx-auto max-w-7xl"> 
                            <div class="pt-16 " >
                                <h1 class="font-[#6C728B] uppercase leading-1 font-Montserrat  font-semibold text-xl pt-2 pl-8 ">
                                    Experience the Difference with Our Freelance Platform
                                </h1>
                                <div   class="grid grid-cols-5 gap-8 pt-16 pl-8 " >

                                        <div class="row-start row-span-3" > 
                                            <img src="img/about/Group 8.png" alt="project" />
                                            <p class="text-[#1D46F5] text-center whitespace-normal  uppercase   font-medium font-Inter text-lg " >Find the perfect professional for your project</p>
                                         </div>
                                        <div class="row-start row-span-3" > 
                                            <img src="img/about/Group 11.png" alt="secure" />
                                            <p class="text-[#1D46F5] text-center whitespace-normal  uppercase   font-medium font-Inter text-lg " >Secure payments and reliable professionals</p>
                                        </div>
                                        <div class="row-start row-span-3" >
                                            <img src="img/about/Group 9.png" alt="project" /> 
                                            <p class="text-[#1D46F5] text-center whitespace-normal  uppercase   font-medium font-Inter text-lg"> Wide range of categories and skilled freelancers from around the world</p>
                                         </div>
                                        <div class="row-start row-span-3" >
                                             <img src="img/about/Group 13.png" alt="project" /> 
                                            <p class="text-[#1D46F5] text-center whitespace-normal  uppercase   font-medium font-Inter text-lg">Quality work and commitment to customer satisfaction</p> 
                                        </div>
                                        <div class="row-start row-span-3" > 
                                            <img src="img/about/Group 14.png" alt="project" /> 
                                            <p class="text-[#1D46F5] text-center whitespace-normal  uppercase   font-medium font-Inter text-lg"> Efficient and hassle-free project management</p>
                                         </div>
                                    
                                </div>
                            </div>
                            <div class="pt-20 "></div>
                    </div>
            </div>

           
            {{-- Explore platform --}}

            <div class="h-full" > 
                <h1 class="text-center pt-20 text-[#3F3F46] leading-1 text-5xl capitalize  font-bold  font-Montserrat " >Explore Our Platform's <span class="text-[#F18522] " >Features</span></h1>
                <div class="pt-10" ></div>
                <div class=" bg-cover pb-20 " style="background-image: url('/img/about/Rectangle 16.png')" >
                        <div class="grid grid-cols-2 container mx-auto max-w-7xl">
                                <div class="pt-20   " >
                                    <h1 class="pt-10 pl-8 text-[#1D46F5] leading-1 text-4xl capitalize  font-semibold  font-Montserrat" >Task Matching</h1>
                                    <p class="pt-7 pl-8 text-[#3F3F46] leading-2 text-1xl  font-inter" >Utilizing advanced algorithms, Correcthsutle.com matches task <br/>
                                    runners with traders based on their skills, location, and availability, <br/>
                                    ensuring a perfect fit for every task.</p>
                                    <div class="pt-10" ></div>
                                </div>
                                <div class=" grid grid-cols-2 relative">
                                            <img class="absolute pt-10 pb-10 " src="img/about/Rectangle 18.png" alt="task" />
                                            <div class="" ></div>
                                            <div class="bg-no-repeat bg-contain bg-center" style="background-image: url('img/about/Rectangle 17.png');" ></div>      
                                </div>
                        </div>
                </div>
                <div class="pt-5" ></div>
                <div class=" bg-cover pb-20 " style="background-image: url('/img/about/Rectangle 16-.png')" >
                        <div class="grid grid-cols-2 container mx-auto max-w-7xl">
                                <div class=" grid grid-cols-2 relative">
                                            <img class="absolute pl-10 pt-10 pb-10 " src="img/about/Rectangle 18 -.png" alt="task" />
                                             <div class="bg-no-repeat bg-contain bg-center" style="background-image: url('img/about/Rectangle 17-.png');" ></div>
                                            <div class="" ></div>
                                                 
                                </div>
                                <div class="pt-20   " >
                                    <h1 class="pt-10 pl-8 text-[#F18522] leading-1 text-4xl capitalize  font-semibold  font-Montserrat" >Reviews and Ratings</h1>
                                    <p class="pt-7 pl-8 text-[#3F3F46] leading-2 text-1xl  font-inter" >A transparent review and rating system allows task runners to
                                    <br/> provide feedback on traders, ensuring accountability and <br/>
                                     facilitating trust within the community.</p>
                                    <div class="pt-10" ></div>
                                </div>
                                
                        </div>
                </div>
                <div class="pt-5" ></div>
                <div class=" bg-cover pb-20 " style="background-image: url('/img/about/Rectangle 16.png')" >
                        <div class="grid grid-cols-2 container mx-auto max-w-7xl">
                                <div class="pt-20   " >
                                    <h1 class="pt-10 pl-8 text-[#1D46F5] leading-1 text-4xl capitalize  font-semibold  font-Montserrat" >Secure Payment System</h1>
                                    <p class="pt-7 pl-8 text-[#3F3F46] leading-2 text-1xl  font-inter" >Correcthsutle.com provides a secure and seamless payment <br/>
                                     platform, offering multiple payment options to ensure convenience <br/>
                                      for both traders and task runners.</p>
                                    <div class="pt-10" ></div>
                                </div>
                                <div class=" grid grid-cols-2 relative">
                                            <img class="absolute pt-10 pb-10 " src="img/about/Rectangle 18-1.png" alt="task" />
                                            <div class="" ></div>
                                            <div class="bg-no-repeat bg-contain bg-center" style="background-image: url('img/about/Rectangle 17.png');" ></div>      
                                </div>
                        </div>
                </div>
                <div class="pt-5" ></div>
                <div class=" bg-cover pb-20 " style="background-image: url('/img/about/Rectangle 16-.png')" >
                        <div class="grid grid-cols-2 container mx-auto max-w-7xl">
                                <div class=" grid grid-cols-2 relative">
                                            <img class="absolute pl-10 pt-10 pb-10 " src="img/about/Rectangle 18-2.png" alt="task" />
                                             <div class="bg-no-repeat bg-contain bg-center" style="background-image: url('img/about/Rectangle 17-.png');" ></div>
                                            <div class="" ></div>
                                                 
                                </div>
                                <div class="pt-20   " >
                                    <h1 class="pt-10 pl-8 text-[#F18522] leading-1 text-4xl capitalize  font-semibold  font-Montserrat" >Appointment Booking</h1>
                                    <p class="pt-7 pl-8 text-[#3F3F46] leading-2 text-1xl  font-inter" >Correcthsutle.com includes a feature for task runners to easily
                                    <br/> schedule appointments with traders, eliminating the need <br/>
                                     for back-and-forth communication and streamlining the booking process.</p>
                                    <div class="pt-10" ></div>
                                </div>
                                
                        </div>
                </div>
                <div class="pt-5" ></div>
                <div class=" bg-cover pb-20 " style="background-image: url('/img/about/Rectangle 16.png')" >
                        <div class="grid grid-cols-2 container mx-auto max-w-7xl">
                                <div class="pt-20   " >
                                    <h1 class="pt-10 pl-8 text-[#1D46F5] leading-1 text-4xl capitalize  font-semibold  font-Montserrat" >Quotation System</h1>
                                    <p class="pt-7 pl-8 text-[#3F3F46] leading-2 text-1xl  font-inter" >Traders can provide detailed quotations for specific tasks, <br/>
                                     allowing task runners to compare prices, evaluate options, and <br/>
                                      make informed decisions.</p>
                                    <div class="pt-10" ></div>
                                </div>
                                <div class=" grid grid-cols-2 relative">
                                            <img class="absolute pt-10 pb-10 " src="img/about/Rectangle 18-3.png" alt="task" />
                                            <div class="" ></div>
                                            <div class="bg-no-repeat bg-contain bg-center" style="background-image: url('img/about/Rectangle 17.png');" ></div>      
                                </div>
                        </div>
                </div>
                <div class="pt-5" ></div>
                <div class=" bg-cover pb-20 " style="background-image: url('/img/about/Rectangle 16-.png')" >
                        <div class="grid grid-cols-2 container mx-auto max-w-7xl">
                                <div class=" grid grid-cols-2 relative">
                                            <img class="absolute pl-10 pt-10 pb-10 " src="img/about/Rectangle 18-4.png" alt="task" />
                                             <div class="bg-no-repeat bg-contain bg-center" style="background-image: url('img/about/Rectangle 17-.png');" ></div>
                                            <div class="" ></div>
                                                 
                                </div>
                                <div class="pt-20   " >
                                    <h1 class="pt-10 pl-8 text-[#F18522] leading-1 text-4xl capitalize  font-semibold  font-Montserrat" >Task Categorization</h1>
                                    <p class="pt-7 pl-8 text-[#3F3F46] leading-2 text-1xl  font-inter" >Tasks are categorized into various categories and subcategories, <br/>
                                     making it easy for task runners to find the right trader for their <br/>
                                     specific needs.</p>
                                    <div class="pt-10" ></div>
                                </div>
                                
                        </div>
                </div>
                <div class="pt-5" ></div>
                <div class=" bg-cover pb-20 " style="background-image: url('/img/about/Rectangle 16.png')" >
                        <div class="grid grid-cols-2 container mx-auto max-w-7xl">
                                <div class="pt-20   " >
                                    <h1 class="pt-10 pl-8 text-[#1D46F5] leading-1 text-4xl capitalize  font-semibold  font-Montserrat" >Task Tracking</h1>
                                    <p class="pt-7 pl-8 text-[#3F3F46] leading-2 text-1xl  font-inter" >The platform offers real-time task tracking, allowing task runners <br/>
                                     to stay updated on the progress of their requested tasks and <br/>
                                      ensuring a smooth communication flow.</p>
                                    <div class="pt-10" ></div>
                                </div>
                                <div class=" grid grid-cols-2 relative">
                                            <img class="absolute pt-10 pb-10 " src="img/about/Rectangle 18-5.png" alt="task" />
                                            <div class="" ></div>
                                            <div class="bg-no-repeat bg-contain bg-center" style="background-image: url('img/about/Rectangle 17.png');" ></div>      
                                </div>
                        </div>
                </div>
                <div class="pt-5" ></div>
                <div class=" bg-cover pb-20 " style="background-image: url('/img/about/Rectangle 16-.png')" >
                        <div class="grid grid-cols-2 container mx-auto max-w-7xl">
                                <div class=" grid grid-cols-2 relative">
                                            <img class="absolute pl-10 pt-10 pb-10 " src="img/about/Rectangle 18-6.png" alt="task" />
                                             <div class="bg-no-repeat bg-contain bg-center" style="background-image: url('img/about/Rectangle 17-.png');" ></div>
                                            <div class="" ></div>
                                                 
                                </div>
                                <div class="pt-20   " >
                                    <h1 class="pt-10 pl-8 text-[#F18522] leading-1 text-4xl capitalize  font-semibold  font-Montserrat" >Notifications and <br/> Reminders</h1>
                                    <p class="pt-7 pl-8 text-[#3F3F46] leading-2 text-1xl  font-inter" >Users receive timely notifications and reminders about task <br/>
                                     updates, upcoming appointments, and other important information <br/>
                                      to enhance their user experience.</p>
                                    <div class="pt-10" ></div>
                                </div>
                                
                        </div>
                </div>
                <div class="pt-5" ></div>
                <div class=" bg-cover pb-20 " style="background-image: url('/img/about/Rectangle 16.png')" >
                        <div class="grid grid-cols-2 container mx-auto max-w-7xl">
                                <div class="pt-20   " >
                                    <h1 class="pt-10 pl-8 text-[#1D46F5] leading-1 text-4xl capitalize  font-semibold  font-Montserrat" >Messaging and <br/> Communication</h1>
                                    <p class="pt-7 pl-8 text-[#3F3F46] leading-2 text-1xl  font-inter" >A built-in messaging system facilitates direct communication <br/>
                                     between task runners and traders, enabling clear and efficient <br/> 
                                      coordination throughout the task execution process.</p>
                                    <div class="pt-10" ></div>
                                </div>
                                <div class=" grid grid-cols-2 relative">
                                            <img class="absolute pt-10 pb-10 " src="img/about/Rectangle 18-7.png" alt="task" />
                                            <div class="" ></div>
                                            <div class="bg-no-repeat bg-contain bg-center" style="background-image: url('img/about/Rectangle 17.png');" ></div>      
                                </div>
                        </div>
                </div>
                <div class="pt-5" ></div>
                <div class=" bg-cover pb-20 " style="background-image: url('/img/about/Rectangle 16-.png')" >
                        <div class="container mx-auto max-w-7xl">
                                <div class="grid grid-cols-2 gap-4 pt-16 pl-8 ">

                                            <div class="row-start row-span-3" > 
                                                    <div class=" grid grid-cols-2 relative h-full">
                                                            <img class="absolute pl-10 pt-10 pb-10 w-70 " src="img/about/Rectangle 18-6.png" alt="task" />
                                                            <div class="bg-no-repeat bg-cover " style="background-image: url('img/about/Rectangle 17-.png');" ></div>
                                                    </div>
                                            </div>
                                            <div class="row-start row-span-3" > 
                                                    <div class="pt-20   " >
                                                        <h1 class="pt-10 pl-8 text-[#F18522] leading-1 text-4xl capitalize  font-semibold  font-Montserrat" >Task History and  <br/> Analytics</h1>
                                                        <p class="pt-7 pl-8 text-[#3F3F46] leading-2 text-1xl  font-inter" >Correcthsutle.com keeps a comprehensive record of completed <br/> 
                                                        tasks, providing users with valuable insights, task history, and <br/> 
                                                        analytics to help improve future experiences.</p>
                                                        <div class="pt-10" ></div>
                                                    </div>
                                            </div>          
                                </div>  
                        </div>
                </div>

            </div>
            
           
            <div class="pt-20" ></div>

            <div class="container min-h-screen px-4 py-12 pt-1 pb-24 mx-auto space-y-8 max-w-7xl sm:px-6 lg:px-8">
                {{-- Happy users --}}
                @yield('content')
            </div>

             {{-- contact us  --}}
            <div class=" bg-[#F1F4FF]">
                    <div class="container mx-auto max-w-7xl"> 
                            <div class="pt-16 " >
                                
                                <div   class="grid grid-cols-2 gap-4 pt-16 pl-8 " >
                                        <div class="row-start row-span-3" > 
                                            <div class=" grid grid-cols-2 relative h-full">
                                                            <img class="absolute pl-10 pt-20 pb-10 w-70" src="img/about/Rectangle 18-6.png" alt="task" />
                                                            <div class=" bg-no-repeat bg-cover " style="background-image: url('img/about/Rectangle 17-.png');"    ></div>
     
                                            </div>
                                        </div> 
                                        <div class="row-start row-span-3" > 
                                            <h1 class=" pt-10 pb-10 text-[#F18522] leading-2 text-5xl capitalize  font-semibold  font-Montserrat" >
                                                connect <span  class="text-[#1D46F5]" > with us </span>
                                            </h1>
                                            
                                           <div class="w-full ">
                                                <form class="  rounded px-1 ppt-6 pb-8 mb-4">
                                                    <div class="mb-4">
                                                    <label class="block text-[#344054] text-sm font-medium mb-2" for="username">
                                                        Email
                                                    </label>
                                                    <input class=" appearance-noneshadow-[#1018280D]  border-[#D0D5DD] rounded w-full py-2 px-3 text-[#667085] leading-tight dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:text-[#fff] focus:outline-none focus:shadow-outline" id="email" type="text" placeholder="email@company.com">
                                                    </div>
                                                    <div class="mb-6">
                                                    <label class="block text-[#344054] text-sm font-medium mb-2" for="password">
                                                        Message
                                                    </label>
                                                    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-[#667085]  rounded-lg  border-[#D0D5DD] focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="..."></textarea>
                                                    <p class="text-red-500 text-xs italic hidden">Kindly fill.</p>
                                                    </div>
                                                    <div class="flex items-center justify-between">
                                                    <button class="w-full bg-[#F18522] hover:bg-[#F18522] text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                                                        Send Message
                                                    </button>
                                                    
                                                    </div>
                                                </form>
                                                    <p class="text-center text-gray-500 text-xs">
                                                        
                                                    </p>
                                            </div>
                                        </div>    
                                </div>

                            </div>
                            <div class="pt-20 "></div>
                    </div>
            </div>



        </main>

    {{-- Footer --}}
    @livewire('main.includes.footer')

    {{-- Livewire scripts --}}
    @livewireScripts


  {{-- Wire UI --}}
    <wireui:scripts />

    {{-- Core --}}
    @if (App::environment('local'))
        <script defer src="{{ mix('js/app.js') }}"></script>
        <script defer src="{{ url('js/utils.js?v=1.3.1') }}"></script>
        <script src="{{ url('js/components.js?v=1.3.1') }}"></script>
    @else
        <script defer src="https://hustlebucket.s3.amazonaws.com/public/js/app.js"></script>
        <script defer src="https://hustlebucket.s3.amazonaws.com/public/js/utils.js"></script>
        <script src="https://hustlebucket.s3.amazonaws.com/public/js/components.js"></script>
    @endif

    {{-- Custom JS codes --}}
    <script defer>
        document.addEventListener("DOMContentLoaded", function() {

            jQuery.event.special.touchstart = {
                setup: function(_, ns, handle) {
                    this.addEventListener("touchstart", handle, {
                        passive: !ns.includes("noPreventDefault")
                    });
                }
            };
            jQuery.event.special.touchmove = {
                setup: function(_, ns, handle) {
                    this.addEventListener("touchmove", handle, {
                        passive: !ns.includes("noPreventDefault")
                    });
                }
            };
            jQuery.event.special.wheel = {
                setup: function(_, ns, handle) {
                    this.addEventListener("wheel", handle, {
                        passive: true
                    });
                }
            };
            jQuery.event.special.mousewheel = {
                setup: function(_, ns, handle) {
                    this.addEventListener("mousewheel", handle, {
                        passive: true
                    });
                }
            };

            // Refresh
            window.addEventListener('refresh', () => {
                location.reload();
            });

            // Scroll to specific div
            window.addEventListener('scrollTo', (event) => {
                // Get id to scroll
                const id = event.detail;

                // Scroll
                $('html, body').animate({
                    scrollTop: $("#" + id).offset().top
                }, 500);

            });

            // Scroll to up page
            window.addEventListener('scrollUp', () => {

                // Scroll
                $('html, body').animate({
                    scrollTop: $("body").offset().top
                }, 500);

            });

        });

        function jwUBiFxmwbrUwww() {
            return {
                scroll: false,

                init() {
                    var _this = this;
                    $(document).scroll(function() {
                        $(this).scrollTop() > 70 ? _this.scroll = true : _this.scroll = false;
                    });

                }
            }
        }
        window.jwUBiFxmwbrUwww = jwUBiFxmwbrUwww();

        document.ontouchmove = function(event) {
            event.preventDefault();
        }
    </script>

    {{-- Custom scripts --}}
    @stack('scripts')

    </body>

    </html>
