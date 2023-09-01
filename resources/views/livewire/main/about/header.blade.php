<header class="bg-[#FFF] bg-opacity-30  w-full z-40 transition-all duration-200 ">
    <div x-data="window.TTRjRvxLbHzaKxW">
    
        {{-- Primary navbar --}}
        <nav class="container relative flex items-center md:justify-between h-20 px-4 mx-auto max-w-7xl sm:px-6 lg:px-8" >

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


            {{-- Actions links --}}
            <div class="flex items-center text-sm font-medium transition-all duration-200 min-w-fit ltr:sm:ml-10 rtl:sm:mr-10">

                {{-- About us --}}
                 <a href="{{ url('/about') }}"
                            class="hidden px-4 py-2 transition-colors duration-300 text-primary-600 hover:text-primary-700 lg:block dark:text-gray-100 dark:hover:text-white">
                            @lang('messages.t_about')
                 </a>

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

                 
                {{-- Lang --}}
                    <div class="relative inline-block">
                        <div x-data="{ open: false }">

                            {{-- Button --}}
                            <button x-on:click="open = !open" type="button" class="hidden md:flex items-center text-gray-500 hover:text-primary-600 transition-colors duration-300 py-2 px-4 focus:outline-none focus:ring-0 dark:text-gray-100 dark:hover:text-white">
                                <svg class="w-[18px] h-[18px]" stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2C6.486 2 2 6.486 2 12s4.486 10 10 10 10-4.486 10-10S17.514 2 12 2zm7.931 9h-2.764a14.67 14.67 0 0 0-1.792-6.243A8.013 8.013 0 0 1 19.931 11zM12.53 4.027c1.035 1.364 2.427 3.78 2.627 6.973H9.03c.139-2.596.994-5.028 2.451-6.974.172-.01.344-.026.519-.026.179 0 .354.016.53.027zm-3.842.7C7.704 6.618 7.136 8.762 7.03 11H4.069a8.013 8.013 0 0 1 4.619-6.273zM4.069 13h2.974c.136 2.379.665 4.478 1.556 6.23A8.01 8.01 0 0 1 4.069 13zm7.381 6.973C10.049 18.275 9.222 15.896 9.041 13h6.113c-.208 2.773-1.117 5.196-2.603 6.972-.182.012-.364.028-.551.028-.186 0-.367-.016-.55-.027zm4.011-.772c.955-1.794 1.538-3.901 1.691-6.201h2.778a8.005 8.005 0 0 1-4.469 6.201z"></path></svg>
                                <span class="ltr:ml-1 rtl:mr-1"> English</span>
                            </button>
                        
                            {{-- List of languages --}}
                            <div 
                                x-show="open" 
                                style="display: none;"
                                x-transition:enter="transition ease-out duration-150" 
                                x-transition:enter-start="transform opacity-0 scale-75" 
                                x-transition:enter-end="transform opacity-100 scale-100" 
                                x-transition:leave="transition ease-in duration-100" 
                                x-transition:leave-start="transform opacity-100 scale-100" 
                                x-transition:leave-end="transform opacity-0 scale-75" 
                                x-on:click.outside="open = false" role="menu" 
                                class="absolute ltr:right-0 rtl:left-0 origin-top-right mt-2 w-48 shadow-xl rounded z-50" x-cloak>
                                
                                <div class="bg-white dark:bg-zinc-800 rounded p-2 space-y-1">
                        
                                    {{-- List of languages --}}

                                        <div  class="py-2 px-4 rounded-sm inline-flex items-center cursor-pointer justify-between   'hover:bg-gray-50 dark:hover:bg-zinc-600'  focus:outline-none w-full">
                                            <div class="inline-flex items-center">
                                                <img src="{{ placeholder_img() }}" data-src="" alt="eng" class="lazy w-5 ltr:mr-3 rtl:ml-3">
                                                <span class="font-medium text-xs dark:text-gray-200"> English</span>
                                            </div>
                                            
                                        </div>
                        
                                </div>
                            </div>

                        </div>
                    </div>

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
                                    <a href="{{ url('auth/login') }}" class="block px-5 py-2 text-sm font-semibold text-gray-500 dark:text-gray-200 active:bg-primary-700 active:border-primary-700">
                                        @lang('messages.t_about')
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

                

            </div>

        </nav>

        {{-- Divider --}}
        <div class="hidden w-full h-px bg-gray-100 dark:bg-zinc-900 md:block"></div>

        {{-- Categories --}}
        <div class="relative hidden px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 md:block">

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

