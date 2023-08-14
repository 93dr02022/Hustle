<header class="bg-[#F1F4FF] dark:bg-[#0f0f0f] shadow-sm w-full z-40 transition-all duration-200 border-b-[3px] border-[#F18522]">
    <div x-data="window.TTRjRvxLbHzaKxW">

        {{-- Admin navbar --}}
        @auth('admin')
            <div class="bg-gray-900 dark:bg-primary-600">
                <div class="flex items-center justify-between h-10 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

                    {{-- Welcome back --}}
                    <span class="text-xs italic font-normal text-white">@lang('messages.t_welcome'),
                        {{ auth('admin')->user()->username }}!</span>

                    {{-- Actions --}}
                    <div class="flex items-center space-x-6 rtl:space-x-reverse">

                        {{-- Dashboard --}}
                        <a href="{{ admin_url('/') }}" class="text-sm font-medium text-white hover:text-gray-100">
                            @lang('messages.t_dashboard')
                        </a>

                        {{-- Logout --}}
                        <a href="{{ admin_url('logout') }}" class="text-sm font-medium text-white hover:text-gray-100">
                            @lang('messages.t_logout')
                        </a>

                    </div>
                </div>
            </div>
        @endauth

        {{-- Primary navbar --}}
        <nav class="container relative flex items-center md:justify-between h-20 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">

            {{-- Logo --}}
            <div class="inline-flex grow items-center md:min-w-fit">

                {{-- Mobile menu button --}}
                <div class="flex items-center basis-[35%] md:basis-0">
                    <button type="button" class="text-gray-500 bg-white rounded-md dark:bg-transparent dark:text-gray-100 dark:hover:text-white mr-5 md:hidden"
                    x-on:click="mobile_menu = true">
                        <span class="sr-only">Open menu</span>
                        <svg class="w-8 h-8 text-[#1D46F5] hover:text-gray-700 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"></path>
                                <path d="M3 4h18v2H3V4zm0 7h18v2H3v-2zm0 7h18v2H3v-2z"></path>
                            </g>
                        </svg>
                    </button>
                </div>

                {{-- Logo --}}
                <a href="{{ url('/') }}" class="block sm:mr-6">
                    {{-- <x-icons.hustle-head-icon></x-icons.hustle-head-icon> --}}
                 <svg width="140" height="59" class="w-[120px] lg:w-[140px] h-[120px] md:h-[80px]" viewBox="0 0 525 59" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M28.0581 58.1926C24.0818 58.1926 20.3788 57.5467 16.9492 56.255C13.5693 54.9135 10.6119 53.0503 8.07703 50.6655C5.59182 48.231 3.65336 45.3741 2.26165 42.095C0.86993 38.8158 0.174072 35.2385 0.174072 31.3632C0.174072 27.4878 0.86993 23.9105 2.26165 20.6314C3.65336 17.3522 5.61668 14.5202 8.15159 12.1354C10.6865 9.70085 13.6439 7.83769 17.0238 6.5459C20.4037 5.20443 24.1066 4.53369 28.1327 4.53369C32.4072 4.53369 36.309 5.27895 39.838 6.76948C42.0482 7.67187 44.0439 8.85683 45.8251 10.3244C47.6292 11.8107 47.45 14.508 45.7469 16.1091V16.1091C43.9694 17.7801 41.2017 17.6205 39.1881 16.2432C38.2318 15.5892 37.2307 15.0397 36.1847 14.5947C33.8486 13.5514 31.3137 13.0297 28.58 13.0297C25.8463 13.0297 23.3362 13.4768 21.0498 14.3712C18.8131 15.2655 16.8498 16.5324 15.1599 18.172C13.5196 19.8116 12.2273 21.7493 11.2829 23.9851C10.3883 26.2208 9.94094 28.6802 9.94094 31.3632C9.94094 34.0461 10.3883 36.5055 11.2829 38.7413C12.2273 40.9771 13.5196 42.9147 15.1599 44.5543C16.8498 46.1939 18.8131 47.4608 21.0498 48.3552C23.3362 49.2495 25.8463 49.6966 28.58 49.6966C31.3137 49.6966 33.8486 49.1998 36.1847 48.2061C37.2287 47.7398 38.228 47.1694 39.1827 46.4947C41.1914 45.0751 43.9904 44.9089 45.7719 46.6049V46.6049C47.4599 48.2118 47.617 50.9007 45.8134 52.3767C44.0351 53.832 42.0433 55.0254 39.838 55.9569C36.309 57.4474 32.3824 58.1926 28.0581 58.1926ZM74.1379 57.9691C70.0621 57.9691 66.4337 57.0996 63.2527 55.3606C60.0716 53.572 57.5615 51.1375 55.7225 48.0571C53.8834 44.9766 52.9639 41.4739 52.9639 37.5489C52.9639 33.5741 53.8834 30.0714 55.7225 27.0406C57.5615 23.9602 60.0716 21.5505 63.2527 19.8116C66.4337 18.0726 70.0621 17.2032 74.1379 17.2032C78.2633 17.2032 81.9166 18.0726 85.0976 19.8116C88.3284 21.5505 90.8385 23.9354 92.6278 26.9661C94.4669 29.9968 95.3864 33.5244 95.3864 37.5489C95.3864 41.4739 94.4669 44.9766 92.6278 48.0571C90.8385 51.1375 88.3284 53.572 85.0976 55.3606C81.9166 57.0996 78.2633 57.9691 74.1379 57.9691ZM74.1379 49.9947C76.4243 49.9947 78.4621 49.4979 80.2515 48.5042C82.0408 47.5105 83.4325 46.0697 84.4266 44.1817C85.4704 42.2937 85.9923 40.0827 85.9923 37.5489C85.9923 34.9653 85.4704 32.7543 84.4266 30.916C83.4325 29.028 82.0408 27.5872 80.2515 26.5935C78.4621 25.5998 76.4491 25.103 74.2124 25.103C71.926 25.103 69.8882 25.5998 68.0988 26.5935C66.3592 27.5872 64.9675 29.028 63.9237 30.916C62.8799 32.7543 62.358 34.9653 62.358 37.5489C62.358 40.0827 62.8799 42.2937 63.9237 44.1817C64.9675 46.0697 66.3592 47.5105 68.0988 48.5042C69.8882 49.4979 71.9012 49.9947 74.1379 49.9947ZM109.555 57.4474C106.981 57.4474 104.895 55.3611 104.895 52.7876V22.0864C104.895 19.6364 106.881 17.6503 109.331 17.6503H112.266C113.095 17.6503 113.767 18.3223 113.767 19.1512V25.429C113.767 26.0031 112.961 26.131 112.783 25.5852V25.5852C112.745 25.4667 112.751 25.3377 112.803 25.2245C113.999 22.6286 115.836 20.6504 118.315 19.2899C119.973 18.3974 121.887 17.7912 124.056 17.4713C126.181 17.158 127.933 18.9442 127.933 21.0918V25.0002C127.933 25.5445 127.414 25.9313 126.869 25.9232V25.9232C126.83 25.9226 126.795 25.9199 126.755 25.9146C126.427 25.8703 126.099 25.8482 125.771 25.8482C122.242 25.8482 119.433 26.8916 117.346 28.9783C115.258 31.0154 114.214 34.071 114.214 38.1451V52.7876C114.214 55.3611 112.128 57.4474 109.555 57.4474V57.4474ZM141.095 57.4474C138.521 57.4474 136.435 55.3611 136.435 52.7876V22.0864C136.435 19.6364 138.421 17.6503 140.871 17.6503H143.806C144.635 17.6503 145.307 18.3223 145.307 19.1512V25.429C145.307 26.0031 144.501 26.131 144.323 25.5852V25.5852C144.285 25.4667 144.291 25.3377 144.343 25.2245C145.539 22.6286 147.376 20.6504 149.855 19.2899C151.513 18.3974 153.427 17.7912 155.596 17.4713C157.721 17.158 159.473 18.9442 159.473 21.0918V25.0002C159.473 25.5445 158.954 25.9313 158.409 25.9232V25.9232C158.37 25.9226 158.335 25.9199 158.296 25.9146C157.967 25.8703 157.639 25.8482 157.311 25.8482C153.782 25.8482 150.973 26.8916 148.886 28.9783C146.798 31.0154 145.754 34.071 145.754 38.1451V52.7876C145.754 55.3611 143.668 57.4474 141.095 57.4474V57.4474ZM186.325 57.9691C181.901 57.9691 178.024 57.0996 174.694 55.3606C171.414 53.572 168.854 51.1375 167.015 48.0571C165.225 44.9766 164.331 41.4739 164.331 37.5489C164.331 33.5741 165.201 30.0714 166.94 27.0406C168.73 23.9602 171.165 21.5505 174.247 19.8116C177.378 18.0726 180.932 17.2032 184.908 17.2032C188.785 17.2032 192.24 18.0478 195.272 19.7371C198.303 21.4263 200.689 23.8112 202.429 26.8916C204.169 29.972 205.038 33.599 205.038 37.7724C205.038 38.1699 205.014 38.6171 204.964 39.1139V39.1139C204.964 39.9216 204.278 40.5299 203.471 40.5299H174.805C173.096 40.5299 171.712 39.1452 171.712 37.4371V37.4371C171.712 35.7289 173.096 34.3442 174.805 34.3442H197.064C197.817 34.3442 198.068 35.3522 197.403 35.705V35.705C196.916 35.9635 196.326 35.6018 196.29 35.0513C196.174 33.2671 195.71 31.6651 194.899 30.2453C193.905 28.5063 192.538 27.14 190.798 26.1463C189.108 25.1526 187.145 24.6558 184.908 24.6558C182.622 24.6558 180.609 25.1526 178.869 26.1463C177.179 27.14 175.837 28.5312 174.843 30.3198C173.899 32.0587 173.427 34.1206 173.427 36.5055V37.996C173.427 40.3809 173.973 42.4924 175.067 44.3307C176.16 46.1691 177.701 47.5851 179.689 48.5787C181.677 49.5724 183.964 50.0693 186.548 50.0693C188.785 50.0693 190.798 49.7215 192.587 49.0259C193.075 48.8366 193.547 48.6177 194.005 48.3695C196.015 47.279 198.666 47.2476 200.167 48.9725V48.9725C201.423 50.4157 201.457 52.6037 199.952 53.7853C198.659 54.8008 197.198 55.6489 195.57 56.3295C192.886 57.4225 189.804 57.9691 186.325 57.9691ZM232.853 57.9691C228.678 57.9691 224.95 57.0996 221.669 55.3606C218.439 53.572 215.904 51.1375 214.065 48.0571C212.226 44.9766 211.306 41.4739 211.306 37.5489C211.306 33.5741 212.226 30.0714 214.065 27.0406C215.904 23.9602 218.439 21.5505 221.669 19.8116C224.95 18.0726 228.678 17.2032 232.853 17.2032C236.73 17.2032 240.134 17.9981 243.067 19.588C244.813 20.4896 246.312 21.6467 247.563 23.0591C249.089 24.7803 248.299 27.3497 246.312 28.5082V28.5082C244.294 29.6853 241.771 28.9386 239.933 27.4959C239.417 27.091 238.871 26.7405 238.295 26.4444C236.605 25.5501 234.766 25.103 232.778 25.103C230.492 25.103 228.429 25.5998 226.59 26.5935C224.751 27.5872 223.31 29.028 222.266 30.916C221.222 32.7543 220.7 34.9653 220.7 37.5489C220.7 40.1324 221.222 42.3682 222.266 44.2562C223.31 46.0945 224.751 47.5105 226.59 48.5042C228.429 49.4979 230.492 49.9947 232.778 49.9947C234.766 49.9947 236.605 49.5476 238.295 48.6533C238.875 48.3551 239.425 48.0018 239.944 47.5932C241.774 46.1529 244.288 45.4093 246.3 46.5825V46.5825C248.29 47.7428 249.068 50.3164 247.541 52.0408C246.294 53.449 244.802 54.6302 243.067 55.5842C240.134 57.1741 236.73 57.9691 232.853 57.9691ZM274 57.9691C269.626 57.9691 266.246 56.8512 263.86 54.6154C261.474 52.3299 260.281 48.9762 260.281 44.5543V13.516C260.281 10.9425 262.368 8.85622 264.941 8.85622V8.85622C267.515 8.85622 269.601 10.9425 269.601 13.516V44.3307C269.601 46.2187 270.073 47.6844 271.018 48.7278C272.012 49.7712 273.378 50.2928 275.118 50.2928C275.445 50.2928 275.763 50.2794 276.073 50.2526C278.368 50.0541 281.185 50.8093 282.028 52.9525V52.9525C282.575 54.343 282.177 55.9762 280.821 56.6038C280.233 56.876 279.599 57.1075 278.92 57.2983C277.33 57.7455 275.69 57.9691 274 57.9691ZM257.447 25.4011C255.389 25.4011 253.72 23.7327 253.72 21.6747V21.6747C253.72 19.6168 255.389 17.9484 257.447 17.9484H276.536C278.594 17.9484 280.262 19.6168 280.262 21.6747V21.6747C280.262 23.7327 278.594 25.4011 276.536 25.4011H257.447Z"
                            fill="#F18522" />
                        <path
                            d="M313.801 17.2032C316.982 17.2032 319.815 17.8242 322.3 19.0663C324.835 20.3084 326.823 22.2213 328.265 24.8048C329.706 27.3387 330.427 30.6179 330.427 34.6423V52.7876C330.427 55.3611 328.341 57.4474 325.767 57.4474V57.4474C323.194 57.4474 321.107 55.3611 321.107 52.7876V35.8347C321.107 32.3072 320.262 29.6739 318.573 27.9349C316.932 26.196 314.621 25.3265 311.639 25.3265C309.451 25.3265 307.512 25.7737 305.822 26.668C304.133 27.5623 302.815 28.9038 301.871 30.6924C300.976 32.4314 300.529 34.6423 300.529 37.3253V52.7876C300.529 55.3611 298.443 57.4474 295.869 57.4474V57.4474C293.296 57.4474 291.209 55.3611 291.209 52.7876V6.80859C291.209 4.23508 293.296 2.14883 295.869 2.14883V2.14883C298.443 2.14883 300.529 4.23508 300.529 6.8086V25.0769C300.529 26.0187 299.293 26.368 298.8 25.5653V25.5653C298.624 25.2794 298.614 24.9202 298.786 24.6323C300.163 22.3279 302.086 20.5471 304.555 19.2899C307.239 17.8987 310.321 17.2032 313.801 17.2032ZM359.693 57.969C356.314 57.969 353.331 57.348 350.747 56.1059C348.162 54.8141 346.149 52.8764 344.708 50.2928C343.266 47.6596 342.545 44.3556 342.545 40.3808V22.3101C342.545 19.7366 344.632 17.6503 347.205 17.6503V17.6503C349.779 17.6503 351.865 19.7366 351.865 22.3101V39.1139C351.865 42.6912 352.66 45.3741 354.251 47.1627C355.891 48.9017 358.202 49.7712 361.185 49.7712C363.371 49.7712 365.26 49.324 366.851 48.4297C368.491 47.5354 369.758 46.1939 370.653 44.4053C371.598 42.6166 372.07 40.4057 372.07 37.7724V22.3101C372.07 19.7366 374.156 17.6503 376.73 17.6503V17.6503C379.303 17.6503 381.389 19.7366 381.389 22.3101V53.0113C381.389 55.4612 379.403 57.4474 376.953 57.4474H374.499C373.404 57.4474 372.517 56.5601 372.517 55.4656V49.9808C372.517 49.1931 373.585 48.9514 373.924 49.6622V49.6622C374.024 49.8716 374.021 50.1165 373.909 50.3198C372.573 52.7456 370.668 54.6246 368.193 55.9568C365.608 57.2983 362.775 57.969 359.693 57.969ZM406.49 57.969C403.16 57.969 399.954 57.5467 396.872 56.7021C395.315 56.2428 393.921 55.7376 392.692 55.1865C390.864 54.3672 390.312 52.1673 391.216 50.3798V50.3798C392.288 48.2588 394.969 47.5368 397.18 48.4063C397.956 48.711 398.772 48.9921 399.631 49.2495C402.116 49.9947 404.601 50.3674 407.086 50.3674C410.019 50.3674 412.131 49.9699 413.424 49.1749C414.766 48.38 415.437 47.3118 415.437 45.9703C415.437 44.8773 414.989 44.0575 414.095 43.5109C413.2 42.9147 412.032 42.4676 410.59 42.1695C409.149 41.8714 407.534 41.5981 405.744 41.3497C404.005 41.1013 402.24 40.7783 400.451 40.3808C398.711 39.9337 397.121 39.3126 395.679 38.5177C394.238 37.673 393.07 36.5552 392.175 35.164C391.28 33.7728 390.833 31.9345 390.833 29.649C390.833 27.1152 391.554 24.929 392.995 23.0907C394.437 21.2027 396.45 19.7619 399.034 18.7682C401.669 17.7248 404.775 17.2032 408.354 17.2032C411.038 17.2032 413.747 17.5013 416.48 18.0975C417.741 18.3724 418.901 18.7001 419.961 19.0806C421.904 19.7786 422.547 22.0515 421.615 23.8947V23.8947C420.575 25.954 418.01 26.6317 415.82 25.9042C415.198 25.6974 414.573 25.5297 413.945 25.401C412.057 24.9539 410.168 24.7303 408.279 24.7303C405.446 24.7303 403.334 25.1526 401.942 25.9973C400.6 26.8419 399.929 27.9101 399.929 29.2019C399.929 30.3943 400.376 31.2886 401.271 31.8848C402.166 32.481 403.334 32.953 404.775 33.3008C406.216 33.6486 407.807 33.9467 409.547 34.1952C411.336 34.3939 413.101 34.7168 414.84 35.164C416.58 35.6112 418.17 36.2322 419.612 37.0272C421.103 37.7724 422.296 38.8406 423.19 40.2318C424.085 41.6229 424.532 43.4364 424.532 45.6722C424.532 48.1564 423.787 50.3177 422.296 52.156C420.854 53.9943 418.792 55.4352 416.108 56.4785C413.424 57.4722 410.218 57.969 406.49 57.969ZM448.142 57.969C443.768 57.969 440.388 56.8512 438.002 54.6154C435.616 52.3299 434.424 48.9762 434.424 44.5543V13.516C434.424 10.9425 436.51 8.85621 439.083 8.85621V8.85621C441.657 8.85621 443.743 10.9425 443.743 13.516V44.3307C443.743 46.2187 444.215 47.6844 445.16 48.7278C446.154 49.7712 447.521 50.2928 449.26 50.2928C449.587 50.2928 449.906 50.2794 450.216 50.2526C452.51 50.0541 455.327 50.8093 456.171 52.9524V52.9524C456.718 54.343 456.319 55.9762 454.963 56.6038C454.375 56.876 453.741 57.1075 453.063 57.2983C451.472 57.7455 449.832 57.969 448.142 57.969ZM431.589 25.401C429.531 25.401 427.863 23.7327 427.863 21.6747V21.6747C427.863 19.6167 429.531 17.9484 431.589 17.9484H450.678C452.736 17.9484 454.405 19.6167 454.405 21.6747V21.6747C454.405 23.7327 452.736 25.401 450.678 25.401H431.589ZM470.012 57.4474C467.438 57.4474 465.352 55.3611 465.352 52.7876V6.80859C465.352 4.23508 467.438 2.14883 470.012 2.14883V2.14883C472.585 2.14883 474.671 4.23508 474.671 6.8086V52.7876C474.671 55.3611 472.585 57.4474 470.012 57.4474V57.4474ZM506.212 57.969C501.788 57.969 497.911 57.0996 494.581 55.3606C491.301 53.572 488.741 51.1375 486.902 48.057C485.112 44.9766 484.218 41.4739 484.218 37.5488C484.218 33.5741 485.088 30.0714 486.827 27.0406C488.617 23.9602 491.052 21.5505 494.134 19.8116C497.265 18.0726 500.819 17.2032 504.795 17.2032C508.672 17.2032 512.127 18.0478 515.159 19.737C518.191 21.4263 520.576 23.8112 522.316 26.8916C524.056 29.972 524.925 33.5989 524.925 37.7724C524.925 38.1699 524.901 38.617 524.851 39.1139V39.1139C524.851 39.9216 524.165 40.5299 523.358 40.5299H494.692C492.984 40.5299 491.599 39.1452 491.599 37.437V37.437C491.599 35.7289 492.984 34.3442 494.692 34.3442H516.952C517.705 34.3442 517.955 35.3521 517.29 35.705V35.705C516.803 35.9635 516.213 35.6018 516.177 35.0513C516.061 33.2671 515.598 31.6651 514.786 30.2453C513.792 28.5063 512.425 27.14 510.685 26.1463C508.995 25.1526 507.032 24.6558 504.795 24.6558C502.509 24.6558 500.496 25.1526 498.756 26.1463C497.066 27.14 495.724 28.5312 494.73 30.3198C493.786 32.0587 493.314 34.1206 493.314 36.5055V37.996C493.314 40.3808 493.86 42.4924 494.954 44.3307C496.047 46.169 497.588 47.585 499.576 48.5787C501.565 49.5724 503.851 50.0693 506.436 50.0693C508.672 50.0693 510.685 49.7215 512.475 49.0259C512.962 48.8365 513.434 48.6177 513.892 48.3695C515.902 47.2789 518.553 47.2475 520.054 48.9725V48.9725C521.31 50.4157 521.344 52.6037 519.839 53.7853C518.546 54.8008 517.085 55.6489 515.457 56.3295C512.773 57.4225 509.691 57.969 506.212 57.969Z"
                            fill="#1D46F5" />
                    </svg>

                </a>

            </div>

            {{-- Search --}}
            <div class="hidden w-full lg:block">
                <div class="relative max-w-md" x-data="{ open: false }">

                    {{-- Input --}}
                    <input wire:model.debounce.500ms="q" wire:keydown.enter="enter" x-ref="search" x-on:click="open = true" type="search"
                        class="block p-2.5 w-full z-20 text-sm text-gray-900 dark:text-white bg-white dark:bg-[#181818] rounded border border-gray-300 dark:border-[#181818] focus:ring-0 focus:border-gray-500"
                        placeholder="{{ __('messages.t_what_service_are_u_looking_for_today') }}" required>

                    {{-- Search button --}}
                    <button type="button" wire:click="enter" class="absolute top-0 ltr:right-0 rtl:left-0 p-2.5 text-white bg-[#1D46F5] ltr:rounded-r rtl:rounded-l border border-[#1D46F5]">
                        <svg class="w-5 h-5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                            </path>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>

                    {{-- Results --}}
                    @if (count($gigs) || count($sellers) || count($tags) || $q)
                        <div class="absolute top-16 w-full bg-white dark:bg-zinc-800 rounded-lg border border-gray-100 dark:border-zinc-800 shadow-md max-w-full z-[60]"
                            @keydown.window.escape="opne = false" x-show="open" style="display: none" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                            x-on:click.away="open = false">
                            {{-- Results --}}
                            @if (count($gigs) || count($sellers) || count($tags))
                                <ul class="p-4 pb-2 space-y-4 overflow-y-auto max-h-80 scroll-py-10 scroll-pb-2" id="options" role="listbox">

                                    {{-- Gigs --}}
                                    @if ($gigs && count($gigs))
                                        <li>
                                            <h2 class="text-xs font-semibold text-gray-900 dark:text-white">
                                                {{ __('messages.t_gigs') }}</h2>
                                            <ul class="mt-2 -mx-4 text-sm text-gray-700 dark:text-gray-400">

                                                {{-- List of gigs --}}
                                                @foreach ($gigs as $gig)
                                                    <li class="flex items-center px-4 py-2 cursor-default select-none group">
                                                        <a href="{{ url('service', $gig->slug) }}" class="flex items-center">
                                                            <svg class="flex-none w-6 h-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                                aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                    d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
                                                            </svg>
                                                            <span class="flex-auto overflow-hidden ltr:ml-3 rtl:mr-3 ext-ellipsis">{{ $gig->title }}</span>
                                                        </a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </li>
                                    @endif

                                    {{-- Sellers --}}
                                    @if ($sellers && count($sellers))
                                        <li>
                                            <h2 class="text-xs font-semibold text-gray-900 dark:text-white">
                                                {{ __('messages.t_sellers') }}</h2>

                                            {{-- List of sellers --}}
                                            <ul class="mt-2 -mx-4 text-sm text-gray-700 dark:text-gray-400">
                                                @foreach ($sellers as $seller)
                                                    <li class="flex items-center px-4 py-2 cursor-default select-none group">
                                                        <a href="{{ url('profile', $seller->username) }}" class="flex items-center">
                                                            <img src="{{ placeholder_img() }}" data-src="{{ src($seller->avatar_id) }}" alt="{{ $seller->username }}"
                                                                class="flex-none object-cover w-6 h-6 rounded-full lazy">
                                                            <span class="flex-auto truncate ltr:ml-3 rtl:mr-3">{{ $seller->username }}</span>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                    @endif

                                    {{-- Tags --}}
                                    @if ($tags && count($tags))
                                        <li>
                                            <h2 class="text-xs font-semibold text-gray-900 dark:text-white">
                                                {{ __('messages.t_tags') }}</h2>
                                            <ul class="mt-2 -mx-4 text-sm text-gray-700 dark:text-gray-400">

                                                {{-- List of tags --}}
                                                @foreach ($tags as $tag)
                                                    <li class="flex items-center px-4 py-2 cursor-default select-none group">
                                                        <a href="{{ url('gigs', $tag->slug) }}" class="flex items-center">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                                                stroke-width="2">
                                                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                                            </svg>
                                                            <span class="flex-auto ml-3 truncate">{{ $tag->name }}</span>
                                                        </a>
                                                    </li>
                                                @endforeach

                                            </ul>
                                        </li>
                                    @endif

                                </ul>
                            @endif

                            {{-- No results --}}
                            @if (count($gigs) === 0 && count($sellers) === 0 && count($tags) === 0 && $q)
                                <div class="px-6 text-sm text-center py-14 sm:px-14">
                                    <svg class="w-6 h-6 mx-auto text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                    </svg>
                                    <p class="mt-4 font-semibold text-gray-900 dark:text-white">
                                        {{ __('messages.no_results_found') }}</p>
                                    <p class="mt-2 text-gray-500">
                                        {{ __('messages.t_we_couldnt_find_anthing_search_term') }}</p>
                                </div>
                            @endif

                            {{-- Footer --}}
                            <div class="rounded-b-lg flex flex-wrap items-center bg-gray-50 dark:bg-zinc-700 py-2.5 px-4 text-xs text-gray-700 dark:text-gray-400">
                                {!! __('messages.t_press_enter_to_search_deeply') !!}
                            </div>
                        </div>
                    @endif

                </div>
            </div>

            {{-- Actions links --}}
            <div class="flex items-center text-sm font-medium transition-all duration-200 min-w-fit ltr:sm:ml-10 rtl:sm:mr-10">

                {{-- Explore --}}
                <div x-data="{ open: false }" class="relative inline-block">

                    {{-- Dropdown button --}}
                    <div aria-haspopup="true" x-bind:aria-expanded="open" x-on:click="open = true" aria-expanded="true"
                        class="hidden px-4 py-2 space-x-2 text-gray-500 transition-colors duration-300 cursor-pointer hover:text-primary-600 focus:outline-none md:flex dark:text-gray-100 dark:hover:text-white rtl:space-x-reverse md:items-center">
                        <span>@lang('messages.t_explore')</span>
                        <svg class="w-4 h-4" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd">
                            </path>
                        </svg>
                    </div>

                    {{-- Dropdown menu --}}
                    <div x-show="open" style="display: none" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="transform opacity-0 scale-75"
                        x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="transform opacity-100 scale-100"
                        x-transition:leave-end="transform opacity-0 scale-75" x-on:click.outside="open = false" role="menu"
                        class="absolute z-40 w-48 mt-3 text-sm font-normal text-gray-900 bg-white rounded-lg shadow-md ltr:origin-top-right rtl:origin-top-left top-full ltr:right-0 rtl:left-0 dark:bg-zinc-800 ring-1 ring-gray-900 ring-opacity-5">
                        <div class="bg-white divide-y divide-gray-100 rounded dark:bg-zinc-800 ring-1 ring-black ring-opacity-5 dark:divide-zinc-400">
                            <div class="p-2 space-y-1">

                                {{-- Explore gigs --}}
                                <a href="{{ url('search') }}" role="menuitem"
                                    class="flex items-center w-full px-3 py-2 text-sm font-medium text-gray-600 rounded hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700 dark:text-zinc-400 dark:hover:bg-zinc-500 dark:hover:text-zinc-200">
                                    <span>@lang('messages.t_explore_gigs')</span>
                                </a>

                                {{-- Explore projects --}}
                                @if (settings('projects')->is_enabled)
                                    <a href="{{ url('explore/projects') }}" role="menuitem"
                                        class="flex items-center w-full px-3 py-2 text-sm font-medium text-gray-600 rounded hover:bg-gray-100 hover:text-gray-700 focus:outline-none focus:bg-gray-100 focus:text-gray-700 dark:text-zinc-400 dark:hover:bg-zinc-500 dark:hover:text-zinc-200">
                                        <span>@lang('messages.t_explore_projects')</span>
                                    </a>
                                @endif

                            </div>
                        </div>
                    </div>

                </div>

                {{-- Change langauge --}}
                {{-- @if (settings('general')->is_language_switcher)
                    @livewire('main.partials.languages')
                @endif --}}

                {{-- Become a seller --}}
                @guest
                    <a href="{{ url('start_selling') }}" class="hidden px-4 py-2 text-gray-500 transition-colors duration-300 hover:text-primary-600 md:block dark:text-gray-100 dark:hover:text-white">
                        @lang('messages.t_become_a_seller')
                    </a>
                @endguest

                {{-- Switch buying/selling --}}
                @auth

                    {{-- Check account type --}}
                    @if (auth()->user()->account_type === 'seller' && !Illuminate\Support\Str::of(request()->path())->startsWith('seller'))
                        {{-- Switch selling --}}
                        <a href="{{ url('seller/home') }}"
                            class="hidden px-4 py-2 transition-colors duration-300 text-primary-600 hover:text-primary-700 lg:block dark:text-gray-100 dark:hover:text-white">
                            @lang('messages.t_switch_to_selling')
                        </a>
                    @elseif (auth()->user()->account_type === 'seller' && Illuminate\Support\Str::of(request()->path())->startsWith('seller'))
                        {{-- Switch buying --}}
                        <a href="{{ url('/') }}" class="hidden px-4 py-2 transition-colors duration-300 text-primary-600 hover:text-primary-700 lg:block dark:text-gray-100 dark:hover:text-white">
                            @lang('messages.t_switch_to_buying')
                        </a>
                    @endif

                @endauth

                {{-- Sign in --}}
                @guest
                    <a href="{{ url('auth/login') }}" class="hidden px-4 py-2 text-gray-500 transition-colors duration-300 hover:text-primary-600 md:block dark:text-gray-100 dark:hover:text-white">
                        @lang('messages.t_sign_in')
                    </a>
                @endguest

                {{-- Join --}}
                @guest
                    <a href="{{ url('auth/register') }}"
                        class="hidden px-4 py-2 transition-colors duration-300 rounded-full text-primary-600 hover:text-primary-800 md:inline-block dark:text-gray-100 dark:hover:text-white">
                        @lang('messages.t_join')
                    </a>
                @endguest

                {{-- Mobile search --}}
                @livewire('main.partials.search')

                {{-- Cart --}}
                @livewire('main.partials.cart')

                {{-- Received orders --}}
                @auth
                    @if (auth()->user()->account_type === 'seller')
                        <a href="{{ url('seller/orders') }}"
                            class="relative hidden py-2 mx-4 text-gray-500 transition-colors duration-300 hover:text-primary-600 dark:text-gray-100 dark:hover:text-white md:block">
                            <svg class="w-6 h-6 text-gray-400 hover:text-gray-700 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z">
                                </path>
                            </svg>
                            @if (auth()->user()->sales->where('status', 'pending')->count())
                                <span class="absolute top-0 flex w-2 h-2 mt-0 ltr:right-0 rtl:left-0 ltr:-mr-1 rtl:-ml-1">
                                    <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-primary-400"></span>
                                    <span class="relative inline-flex w-2 h-2 rounded-full bg-primary-500"></span>
                                </span>
                            @endif
                        </a>
                    @endif
                @endauth

                {{-- Notifications --}}
                @auth
                    <button x-on:click="notifications_menu = true" type="button"
                        class="relative hidden py-2 mx-4 text-gray-500 transition-colors duration-300 hover:text-primary-600 dark:text-gray-100 dark:hover:text-white md:block">
                        <svg class="w-6 h-6 text-gray-400 hover:text-gray-700 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z">
                            </path>
                        </svg>
                        @if ($notifications && count($notifications))
                            <span class="absolute top-0 flex w-2 h-2 mt-0 ltr:right-0 rtl:left-0 ltr:-mr-1 rtl:-ml-1">
                                <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-primary-400"></span>
                                <span class="relative inline-flex w-2 h-2 rounded-full bg-primary-500"></span>
                            </span>
                        @endif
                    </button>
                @endauth

                {{-- Messages --}}
                @auth
                    <a href="{{ url('inbox') }}"
                        class="text-gray-500 hover:text-primary-600 transition-colors duration-300 py-2 relative ltr:ml-4 rtl:mr-4 md:!mx-4 dark:text-gray-100 dark:hover:text-white hidden md:block">
                        <svg class="w-6 h-6 text-gray-400 hover:text-gray-700 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z">
                            </path>
                        </svg>
                        @if ($new_messages)
                            <span class="absolute top-0 flex w-2 h-2 mt-0 ltr:right-0 rtl:left-0 ltr:-mr-1 rtl:-ml-1">
                                <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-primary-400"></span>
                                <span class="relative inline-flex w-2 h-2 rounded-full bg-primary-500"></span>
                            </span>
                        @endif
                    </a>
                @endauth

                {{-- Authenticated user --}}
                @auth
                    <div class="relative hidden md:inline-block ltr:ml-4 rtl:mr-4" x-data="{ open: false }">

                        {{-- Status --}}
                        @if (auth()->user()->isOnline() && !auth()->user()->availability)
                            <div class="absolute top-0 w-3 h-3 bg-green-400 border-2 border-white rounded-full ltr:right-0 rtl:left-0 dark:border-transparent">
                            </div>
                        @elseif (auth()->user()->availability)
                            <div class="absolute top-0 w-3 h-3 bg-gray-400 border-2 border-white rounded-full ltr:right-0 rtl:left-0 dark:border-transparent">
                            </div>
                        @else
                            <div class="absolute top-0 w-3 h-3 bg-red-400 border-2 border-white rounded-full ltr:right-0 rtl:left-0 dark:border-transparent">
                            </div>
                        @endif

                        {{-- Avatar --}}
                        @if (auth()->user()->avatar)
                            <img x-on:click="open = !open" src="{{ placeholder_img() }}" data-src="{{ src(auth()->user()->avatar_id) }}" alt="{{ auth()->user()->username }}"
                                class="inline-block object-cover w-8 h-8 rounded-full cursor-pointer lazy">
                        @else
                            <div x-on:click="open = !open"
                                class="inline-flex items-center justify-center w-8 h-8 text-gray-300 bg-gray-100 rounded-full cursor-pointer dark:bg-zinc-500 dark:text-zinc-400">
                                <svg class="inline-block w-4 h-4 hi-solid hi-user" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        @endif

                        {{-- Menu --}}
                        <div x-show="open" style="display: none" x-transition:enter="transition ease-out duration-150" x-transition:enter-start="transform opacity-0 scale-75"
                            x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-100" x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-75" x-on:click.outside="open = false"
                            class="absolute z-40 mt-3 text-sm font-normal text-gray-900 bg-white divide-y divide-gray-100 rounded-lg shadow-md top-full ltr:right-0 rtl:left-0 w-60 dark:bg-zinc-800 ring-1 ring-gray-900 ring-opacity-5 dark:divide-zinc-700">

                            <p class="py-3 px-3.5 truncate">
                                <span class="block mb-0.5 text-xs text-gray-500 dark:text-gray-300">{{ __('messages.t_logged_in_as_username', ['username' => auth()->user()->username]) }}</span>
                                <span class="font-semibold dark:text-white">@money(auth()->user()->balance_available, settings('currency')->code, true)</span>
                            </p>

                            {{-- Seller --}}
                            <div class="py-1.5 px-3.5">

                                {{-- Buyer --}}
                                @if (auth()->user()->account_type === 'buyer')
                                    {{-- Become a seller --}}
                                    <a href="{{ url('start_selling') }}" class="group flex items-center py-1.5 group-hover:text-primary-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-5 h-5 text-gray-400 ltr:mr-3 rtl:ml-3 group-hover:text-primary-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                        </svg>
                                        <span
                                            class="text-xs font-semibold text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500">{{ __('messages.t_become_a_seller') }}</span>
                                    </a>
                                @endif

                                {{-- Freelancer --}}
                                @if (auth()->user()->account_type === 'seller')
                                    {{-- Seller dashboard --}}
                                    <a href="{{ url('seller/home') }}" class="group flex items-center py-1.5 group-hover:text-primary-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-5 h-5 text-gray-400 ltr:mr-3 rtl:ml-3 group-hover:text-primary-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                                        </svg>
                                        <span
                                            class="text-xs font-semibold text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500">{{ __('messages.t_seller_dashboard') }}</span>
                                    </a>
                                @endif

                            </div>

                            @if (settings('projects')->is_enabled)
                                {{-- Project --}}
                                <div class="py-1.5 px-3.5">

                                    {{-- My projects --}}
                                    <a href="{{ url('account/projects') }}" class="group flex items-center py-1.5 group-hover:text-primary-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-5 h-5 text-gray-400 ltr:mr-3 rtl:ml-3 group-hover:text-primary-600" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>
                                        <span class="text-xs font-semibold text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500">
                                            {{ __('messages.t_my_projects') }}
                                        </span>
                                    </a>
                                </div>
                            @endif

                            {{-- Account --}}
                            <div class="py-1.5 px-3.5">

                                {{-- View Profile --}}
                                <a href="{{ url('profile', auth()->user()->username) }}" class="group flex items-center py-1.5 group-hover:text-primary-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-5 h-5 text-gray-400 ltr:mr-3 rtl:ml-3 group-hover:text-primary-600" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="text-xs font-semibold text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500">{{ __('Public Profile') }}</span>
                                </a>

                                {{-- Account settings --}}
                                <a href="{{ url('account/settings') }}" class="group flex items-center py-1.5 group-hover:text-primary-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="flex-none w-5 h-5 text-gray-400 ltr:mr-3 rtl:ml-3 group-hover:text-primary-600" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                    <span
                                        class="text-xs font-semibold text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500">{{ __('messages.t_account_settings') }}</span>
                                </a>
                            </div>


                            {{-- Security --}}
                            <div class="py-1.5 px-3.5">
                                {{-- Logout --}}
                                <a href="{{ url('auth/logout') }}" class="group flex items-center py-1.5 group-hover:text-primary-600">
                                    <svg aria-hidden="true" width="20" height="20" fill="none" class="flex-none w-5 h-5 text-gray-400 ltr:mr-3 rtl:ml-3 group-hover:text-primary-600">
                                        <path d="M10.25 3.75H9A6.25 6.25 0 002.75 10v0A6.25 6.25 0 009 16.25h1.25M10.75 10h6.5M14.75 12.25l2.5-2.25-2.5-2.25" stroke="currentColor" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span
                                        class="text-xs font-semibold text-gray-700 dark:text-gray-100 group-hover:text-primary-600 dark:group-hover:text-primary-500">{{ __('messages.t_logout') }}</span>
                                </a>

                            </div>

                        </div>

                    </div>
                @endauth

            </div>

        </nav>

        {{-- Divider --}}
        <div class="hidden w-full h-px bg-gray-100 dark:bg-zinc-900 md:block"></div>

        {{-- Categories --}}
        <div class="relative hidden px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 md:block">

            {{-- Parent categories --}}
            <ul
                class="relative flex items-center justify-between space-x-5 overflow-y-auto transition-colors duration-300 rtl:space-x-reverse scrollbar-thin scrollbar-thumb-gray-400 dark:scrollbar-thumb-zinc-600 scrollbar-track-gray-50 dark:scrollbar-track-zinc-400">
                @foreach ($categories as $category)
                    <li class="relative flex-shrink-0 inline-block border-b-2 border-transparent hover:border-primary-600 focus:outline-none focus:ring-0">

                        {{-- Check if category has subcategories --}}
                        @if (count($category->subcategories))
                            <button data-popover-target="popover-subcategories-{{ $category->uid }}" data-popover-trigger="hover"
                                class="block text-[13.5px] font-medium text-gray-700 dark:text-gray-300 dark:group-hover:text-white group-hover:text-primary-600 py-2 focus:outline-none focus:ring-0">
                                {{ $category->name }}
                            </button>
                        @else
                            <a href="{{ url('categories', $category->slug) }}"
                                class="block text-[13px] font-medium text-gray-700 dark:text-gray-300 dark:group-hover:text-white group-hover:text-primary-600 py-2 focus:outline-none focus:ring-0">
                                {{ $category->name }}
                            </a>
                        @endif

                    </li>
                @endforeach
            </ul>

            {{-- Subcategories --}}
            @foreach ($categories as $category)
                @if (count($category->subcategories))
                    <div data-popover id="popover-subcategories-{{ $category->uid }}" data-popover-placement="bottom" role="tooltip"
                        class="absolute z-10 invisible inline-block w-64 text-sm font-light text-gray-500 transition-opacity duration-300 bg-white rounded-md shadow-xl opacity-0 dark:text-zinc-400 dark:bg-zinc-800">
                        <ul class="max-h-96 !overflow-y-auto scrollbar-thin scrollbar-thumb-primary-600 scrollbar-track-white dark:scrollbar-track-zinc-800">

                            @foreach ($category->subcategories as $sub)
                                <li class="first:rounded-t-md">
                                    <a href="{{ url('categories/' . $category->slug . '/' . $sub->slug) }}" class="flex items-center px-3 py-2 hover:bg-gray-50 dark:hover:bg-zinc-700"
                                        style="border-radius: inherit">
                                        <div class="flex-shrink-0 ltr:mr-2 rtl:ml-2">
                                            <img class="w-7 h-7 lazy" src="{{ placeholder_img() }}" data-src="{{ src($sub->icon_id) }}" alt="{{ $sub->name }}">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <p class="text-[13px] font-semibold text-gray-700 truncate dark:text-zinc-200 group-hover:text-primary-600">
                                                {{ $sub->name }}
                                            </p>
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                        <div class="text-center bg-gray-50 dark:bg-zinc-700 rounded-b-md">
                            <a href="{{ url('categories', $category->slug) }}"
                                class="block px-1 py-4 text-xs font-semibold tracking-wide text-gray-500 dark:text-zinc-300 hover:text-primary-600 hover:underline">
                                {{ __('messages.t_browse_parent_category', ['category' => $category->name]) }}
                            </a>
                        </div>
                    </div>
                @endif
            @endforeach

        </div>

        {{-- Mobile menu --}}
        <div x-show="mobile_menu" style="display: none" class="fixed inset-0 z-40 flex lg:hidden" x-ref="mobile_menu">

            {{-- Backdrop --}}
            <div x-show="mobile_menu" style="display: none" x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75" @click="mobile_menu = false" aria-hidden="true">
            </div>

            {{-- Menu --}}
            <div x-show="mobile_menu" style="display: none" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="ltr:-translate-x-full rtl:translate-x-full"
                x-transition:enter-end="ltr:translate-x-0 rtl:translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform"
                x-transition:leave-start="ltr:translate-x-0 rtl:translate-x-0" x-transition:leave-end="ltr:-translate-x-full rtl:translate-x-full"
                class="relative max-w-[275px] w-full bg-white dark:bg-zinc-700 shadow-xl flex flex-col overflow-y-auto">

                {{-- Join us --}}
                @guest
                    <div class="w-full px-5 pt-5 mb-6">
                        <a href="{{ url('auth/register') }}"
                            class="inline-flex items-center justify-center w-full px-3 py-2 text-xs font-semibold leading-6 tracking-widest text-white uppercase border rounded focus:outline-none border-primary-700 bg-primary-700 hover:text-white hover:bg-primary-800 hover:border-primary-800 focus:ring focus:ring-primary-500 focus:ring-opacity-50 active:bg-primary-700 active:border-primary-700">
                            <span>@lang('messages.t_join')</span>
                        </a>
                    </div>
                @endguest

                {{-- Links --}}
                <div @class(['w-full overflow-auto h-full', 'pt-5' => auth()->check()])>

                    <div class="flex items-center justify-center">

                        {{-- Received orders --}}
                        @auth
                            @if (auth()->user()->account_type === 'seller')
                                <a href="{{ url('seller/orders') }}"
                                    class="relative py-2 mx-4 text-gray-500 transition-colors duration-300 hover:text-primary-600 dark:text-gray-100 dark:hover:text-white md:hidden">
                                    <svg class="w-6 h-6 text-gray-400 hover:text-gray-700 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5 22h14c1.103 0 2-.897 2-2V9a1 1 0 0 0-1-1h-3V7c0-2.757-2.243-5-5-5S7 4.243 7 7v1H4a1 1 0 0 0-1 1v11c0 1.103.897 2 2 2zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v1H9V7zm-4 3h2v2h2v-2h6v2h2v-2h2l.002 10H5V10z">
                                        </path>
                                    </svg>
                                    @if (auth()->user()->sales->where('status', 'pending')->count())
                                        <span class="absolute top-0 flex w-2 h-2 mt-0 ltr:right-0 rtl:left-0 ltr:-mr-1 rtl:-ml-1">
                                            <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-primary-400"></span>
                                            <span class="relative inline-flex w-2 h-2 rounded-full bg-primary-500"></span>
                                        </span>
                                    @endif
                                </a>
                            @endif
                        @endauth

                        {{-- Notifications --}}
                        @auth
                            <button x-on:click="notifications_menu = true" type="button"
                                class="relative py-2 mx-4 text-gray-500 transition-colors duration-300 hover:text-primary-600 dark:text-gray-100 dark:hover:text-white md:hidden">
                                <svg class="w-6 h-6 text-gray-400 hover:text-gray-700 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z">
                                    </path>
                                </svg>
                                @if ($notifications && count($notifications))
                                    <span class="absolute top-0 flex w-2 h-2 mt-0 ltr:right-0 rtl:left-0 ltr:-mr-1 rtl:-ml-1">
                                        <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-primary-400"></span>
                                        <span class="relative inline-flex w-2 h-2 rounded-full bg-primary-500"></span>
                                    </span>
                                @endif
                            </button>
                        @endauth

                        {{-- Messages --}}
                        @auth
                            <a href="{{ url('inbox') }}"
                                class="relative py-2 mx-4 text-gray-500 transition-colors duration-300 hover:text-primary-600 dark:text-gray-100 dark:hover:text-white md:hidden">
                                <svg class="w-6 h-6 text-gray-400 hover:text-gray-700 dark:text-gray-100 dark:hover:text-white" stroke="currentColor" fill="currentColor" stroke-width="0"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M20 4H4c-1.103 0-2 .897-2 2v12c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm0 2v.511l-8 6.223-8-6.222V6h16zM4 18V9.044l7.386 5.745a.994.994 0 0 0 1.228 0L20 9.044 20.002 18H4z">
                                    </path>
                                </svg>
                                @if ($new_messages)
                                    <span class="absolute top-0 flex w-2 h-2 mt-0 ltr:right-0 rtl:left-0 ltr:-mr-1 rtl:-ml-1">
                                        <span class="absolute inline-flex w-full h-full rounded-full opacity-75 animate-ping bg-primary-400"></span>
                                        <span class="relative inline-flex w-2 h-2 rounded-full bg-primary-500"></span>
                                    </span>
                                @endif
                            </a>
                        @endauth

                    </div>

                    {{-- Authenticated user --}}
                    @auth
                        <x-main.account.sidebar class="border-b border-gray-100 dark:border-zinc-600 mb-[14px]" />
                    @endauth

                    {{-- Sign in --}}
                    @guest
                        <a href="{{ url('auth/login') }}" class="block px-5 py-2 text-sm font-semibold text-gray-500 dark:text-gray-200">
                            @lang('messages.t_sign_in')
                        </a>
                    @endguest

                    {{-- Become seller --}}
                    @if (auth()->guest() || (auth()->check() && auth()->user()->account_type !== 'seller'))
                        <a href="{{ url('start_selling') }}" class="block px-5 py-2 text-sm font-semibold text-gray-500 dark:text-gray-200">
                            @lang('messages.t_become_a_seller')
                        </a>
                    @endif

                    {{-- Explore gigs --}}
                    <a href="{{ url('search') }}" class="block px-5 py-2 text-sm font-semibold text-gray-500 dark:text-gray-200">
                        @lang('messages.t_explore_gigs')
                    </a>

                    {{-- Categories --}}
                    <div x-data="{ open: false }" class="space-y-1">

                        {{-- Browse link --}}
                        <a href="javascript:void(0)" class="relative flex items-center px-5 py-2 space-x-3 text-sm font-semibold text-gray-500 dark:text-gray-200 rtl:space-x-reverse z-1"
                            x-on:click="open = !open">
                            <span class="grow">
                                @lang('messages.t_browse_categories')
                            </span>
                            <span x-bind:class="{ 'rotate-90': !open, 'rotate-0': open }" class="transition duration-150 ease-out transform rotate-0 opacity-75">
                                <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="inline-block w-4 h-4 hi-solid hi-chevron-down">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </span>
                        </a>

                        {{-- List of categories --}}
                        <div x-show="open" style="display: none" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform -translate-y-6 opacity-0"
                            x-transition:enter-end="transform translate-y-0 opacity-100" x-transition:leave="transition ease-in duration-100 bg-transparent"
                            x-transition:leave-start="transform translate-y-0 opacity-100" x-transition:leave-end="transform -translate-y-6 opacity-0" class="relative z-0">

                            @foreach ($categories as $category)
                                <details class="group ltr:ml-4 rtl:mr-4" wire:key="header-categories-{{ $category->uid }}">

                                    {{-- Parent category --}}
                                    <summary class="flex items-center px-5 py-2 text-gray-500 dark:text-gray-300">

                                        {{-- Category icon --}}
                                        <img src="{{ placeholder_img() }}" data-src="{{ src($category->icon) }}" alt="{{ $category->name }}" class="object-contain w-6 h-6 rounded-full lazy">

                                        {{-- Category name --}}
                                        <span class="ltr:ml-3 rtl:mr-3 text-[13px] font-medium"> {{ $category->name }}
                                        </span>

                                        {{-- Arrow --}}
                                        <span class="transition duration-300 ltr:ml-auto rtl:mr-auto shrink-0 group-open:-rotate-180">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>

                                    </summary>

                                    {{-- Subcategories --}}
                                    <nav class="mt-1.5 ltr:ml-8 rtl:mr-8 flex flex-col">

                                        {{-- Open parent category --}}
                                        <a href="{{ url('categories/' . $category->slug) }}"
                                            class="flex items-center px-4 py-2 text-gray-800 rounded-lg dark:text-gray-100 hover:bg-gray-100 dark:hover:bg-zinc-700 hover:text-gray-700 dark:hover:text-gray-200">
                                            <span class="text-xs font-medium ltr:ml-3 rtl:mr-3">
                                                {{ __('messages.t_browse_parent_category', ['category' => $category->name]) }}
                                            </span>
                                        </a>

                                        {{-- List of subcategories --}}
                                        @foreach ($category->subcategories as $sub)
                                            <a href="{{ url('categories/' . $category->slug . '/' . $sub->slug) }}"
                                                class="flex items-center px-4 py-2 text-gray-500 rounded-lg dark:text-gray-300 hover:bg-gray-100 hover:text-gray-700">
                                                <span class="text-xs font-medium ltr:ml-3 rtl:mr-3">
                                                    {{ $sub->name }} </span>
                                            </a>
                                        @endforeach

                                    </nav>

                                </details>
                            @endforeach

                        </div>
                    </div>

                    {{-- Divider --}}
                    <div class="w-full h-px my-3 bg-gray-100 dark:bg-zinc-600"></div>

                    {{-- Home --}}
                    <a href="{{ url('/') }}" class="flex items-center px-5 py-2 text-sm font-semibold text-gray-500 dark:text-gray-200">
                        <svg class="w-[18px] h-[18px] ltr:mr-2.5 rtl:ml-2.5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 22h14a2 2 0 0 0 2-2v-9a1 1 0 0 0-.29-.71l-8-8a1 1 0 0 0-1.41 0l-8 8A1 1 0 0 0 3 11v9a2 2 0 0 0 2 2zm5-2v-5h4v5zm-5-8.59 7-7 7 7V20h-3v-5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v5H5z">
                            </path>
                        </svg>
                        @lang('messages.t_home')
                    </a>

                    {{-- Change language mobile --}}


                    {{-- Contact us --}}
                    <a href="{{ url('help/contact') }}" class="flex items-center px-5 py-2 text-sm font-semibold text-gray-500 dark:text-gray-200">
                        <svg class="w-[18px] h-[18px] ltr:mr-2.5 rtl:ml-2.5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 6a3.939 3.939 0 0 0-3.934 3.934h2C10.066 8.867 10.934 8 12 8s1.934.867 1.934 1.934c0 .598-.481 1.032-1.216 1.626a9.208 9.208 0 0 0-.691.599c-.998.997-1.027 2.056-1.027 2.174V15h2l-.001-.633c.001-.016.033-.386.441-.793.15-.15.339-.3.535-.458.779-.631 1.958-1.584 1.958-3.182A3.937 3.937 0 0 0 12 6zm-1 10h2v2h-2z">
                            </path>
                            <path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8z">
                            </path>
                        </svg>
                        @lang('messages.t_contact_us')
                    </a>


                </div>

            </div>

        </div>

        {{-- Notifications menu --}}
        @auth
            <div x-show="notifications_menu" style="display: none" class="fixed inset-0 z-40 flex" x-ref="notifications_menu">

                {{-- Backdrop --}}
                <div x-show="notifications_menu" style="display: none" x-transition:enter="ease-in-out duration-500" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                    x-transition:leave="ease-in-out duration-500" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                    class="absolute inset-0 transition-opacity bg-gray-500 bg-opacity-75" @click="notifications_menu = false" aria-hidden="true">
                </div>

                {{-- Menu --}}
                <div x-show="notifications_menu" style="display: none" x-transition:enter="transition ease-in-out duration-300 transform"
                    x-transition:enter-start="ltr:translate-x-full rtl:-translate-x-full" x-transition:enter-end="ltr:translate-x-0 rtl:-translate-x-0"
                    x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="ltr:-translate-x-0 rtl:translate-x-0"
                    x-transition:leave-end="ltr:translate-x-full rtl:-translate-x-full" class="fixed flex flex-col w-full h-full max-w-sm bg-white shadow-xl ltr:right-0 rtl:left-0 dark:bg-zinc-700">

                    {{-- Close button --}}
                    <div x-show="notifications_menu" x-transition:enter="ease-in-out duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="ease-in-out duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                        class="top-0 block pt-2 ltr:right-0 rtl:left-0 sm:hidden">
                        <button type="button" class="flex items-center justify-center w-10 h-10 rounded-full ltr:ml-1 rtl:mr-1 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                            @click="notifications_menu = false">
                            <span class="sr-only">Close sidebar</span>
                            <svg class="w-6 h-6 text-white" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>

                    {{-- Section --}}
                    <div class="w-full px-6 pt-8 lg:px-6 sm:flex sm:justify-between sm:items-center">
                        <div class="flex justify-center sm:justify-left">
                            <h3 class="inline-flex items-center font-semibold">
                                <span class="text-base dark:text-gray-100">@lang('messages.t_notifications')</span>
                            </h3>
                        </div>
                    </div>

                    {{-- List of notifications --}}
                    <div class="w-full h-full overflow-auto scrollbar-thin scrollbar-thumb-gray-300 scrollbar-track-gray-100 dark:scrollbar-thumb-zinc-900 dark:scrollbar-track-zinc-600">
                        <div class="py-6 space-y-2">
                            @foreach ($notifications as $n)
                                <div class="px-6 pt-2 pb-1" wire:key="header-notifications-{{ $n->uid }}">
                                    <div class="flex items-center px-4 py-2 rounded bg-slate-100 dark:bg-zinc-600">
                                        <div class="flex-shrink-0">
                                            <span class="flex items-center justify-center w-10 h-10 border rounded-md dark:text-zinc-400 dark:border-zinc-500 border-slate-300 text-slate-400">
                                                <svg class="w-5 h-5" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19 13.586V10c0-3.217-2.185-5.927-5.145-6.742C13.562 2.52 12.846 2 12 2s-1.562.52-1.855 1.258C7.185 4.074 5 6.783 5 10v3.586l-1.707 1.707A.996.996 0 0 0 3 16v2a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1v-2a.996.996 0 0 0-.293-.707L19 13.586zM19 17H5v-.586l1.707-1.707A.996.996 0 0 0 7 14v-4c0-2.757 2.243-5 5-5s5 2.243 5 5v4c0 .266.105.52.293.707L19 16.414V17zm-7 5a2.98 2.98 0 0 0 2.818-2H9.182A2.98 2.98 0 0 0 12 22z">
                                                    </path>
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="flex-1 w-0 ltr:ml-3 rtl:mr-3">
                                            <p class="dark:text-white text-[13px] font-normal text-slate-500 leading-relaxed">
                                                @if ($n->params)
                                                    {!! __('messages.' . $n->text, $n->params) !!}
                                                @else
                                                    {!! __('messages.' . $n->text) !!}
                                                @endif
                                            </p>
                                            <div class="flex mt-2 space-x-7 rtl:space-x-reverse">

                                                {{-- View --}}
                                                <a href="{{ $n->action }}"
                                                    class="text-xs tracking-wide bg-transparent rounded-md text-primary-600 hover:text-primary-700 focus:outline-none dark:text-zinc-200 dark:hover:text-white">
                                                    {{ __('messages.t_view') }}
                                                </a>

                                                {{-- Mark as read --}}
                                                <button wire:click="readNotification('{{ $n->uid }}')" wire:loading.attr="disabled" wire:target="read('{{ $n->uid }}')" type="button"
                                                    class="text-xs tracking-wide text-gray-700 bg-transparent rounded-md hover:text-gray-500 focus:outline-none dark:text-zinc-200 dark:hover:text-white">
                                                    {{-- Loading indicator --}}
                                                    <div wire:loading wire:target="readNotification('{{ $n->uid }}')">
                                                        <svg role="status" class="inline w-4 h-4 text-gray-700 animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                                                fill="#E5E7EB" />
                                                            <path
                                                                d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </div>

                                                    {{-- Button text --}}
                                                    <div wire:loading.remove wire:target="readNotification('{{ $n->uid }}')">
                                                        {{ __('messages.t_mark_as_read') }}
                                                    </div>
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>

            </div>
        @endauth

    </div>
</header>

@push('scripts')
    {{-- AlpineJs --}}
    <script>
        function TTRjRvxLbHzaKxW() {
            return {

                mobile_menu: false,
                notifications_menu: false,
                open: false,
                is_announce: true,

                // Close announce
                closeAnnounce() {
                    this.is_announce = false
                    @this.closeAnnounce();
                }

            }
        }
        window.TTRjRvxLbHzaKxW = TTRjRvxLbHzaKxW();
    </script>
@endpush
