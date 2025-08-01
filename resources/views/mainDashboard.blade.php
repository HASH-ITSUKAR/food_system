<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/dashboardClient.css')}}">
    @vite(['resources/js/app.js'])
    @yield('styles')
</head>
<body>
    <nav class="navbar">
        <button class="closeBurguer">
            X
        </button>
        <h1>Redondos</h1>
        <ul class="optionsNav">
            <li>
                <svg width="2em" height="2em" viewBox="0 0 1024 1024" class="icon"  version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M242.3 475.1v416.7h162.6V721.5c0-51.4 48.2-93.7 107.1-93.7 58.9 0 107.1 42.3 107.1 93.7v170.2h162.6V475.1H242.3zM683.8 324.4v-88.6c0-12.3 9.9-22.2 22.2-22.2h82.1c12.3 0 22.2 9.9 22.2 22.2v115.4c0 12.3-9.9 22.2-22.2 22.2h-48.8" /><path d="M788.1 396.4h-48.8c-12.7 0-23-10.3-23-23s10.3-23 23-23h48.1V236.6h-80.6v87.8c0 12.7-10.3 23-23 23s-23-10.3-23-23v-88.6c0-24.9 20.3-45.2 45.2-45.2h82.1c24.9 0 45.2 20.3 45.2 45.2v115.4c0 24.9-20.3 45.2-45.2 45.2z" /><path d="M404.9 883.5c-68.7-58-120.5-135-162.6-217.9v226.2h162.6v-8.3z" /><path d="M781.7 914.7H619.1c-12.7 0-23-10.3-23-23V721.5c0-38.9-37.8-70.5-84.2-70.5s-84.2 31.6-84.2 70.5v170.2c0 12.7-10.3 23-23 23H242.3c-12.7 0-23-10.3-23-23V475.1c0-12.7 10.3-23 23-23h280.8c12.7 0 23 10.3 23 23s-10.3 23-23 23H265.3v370.8H382V721.5c0-64.2 58.3-116.4 130.1-116.4s130.1 52.2 130.1 116.4v147.3h116.7V673.1c0-12.7 10.3-23 23-23s23 10.3 23 23v218.7c-0.3 12.6-10.5 22.9-23.2 22.9z" /><path d="M104 482l377.9-344.5c16.6-15.1 43.6-15.1 60.2 0L920 482c25.7 23.4 2.3 57.6-39.3 57.6H143.3c-41.6 0.1-64.9-34.2-39.3-57.6z" /><path d="M880.7 562.6h-99.2c-12.7 0-23-10.3-23-23s10.3-23 23-23h99.2c15.3 0 24.9-6.8 26.7-11.6 0.3-0.8 1-2.5-3-6.1L535.8 162.8c-11.1-10.1-36.5-10.1-47.6 0L119.5 499c-3.9 3.6-3.3 5.3-3 6.1 1.9 4.8 11.4 11.6 26.8 11.6h99c12.7 0 23 10.3 23 23s-10.3 23-23 23h-99c-32.6 0-59.9-16.1-69.6-40.9-7.7-19.9-2.2-41.1 14.8-56.6L457.2 129c28.6-26.1 80.8-26.1 109.4 0l368.7 336.2c17 15.5 22.6 36.7 14.8 56.6-9.5 24.7-36.8 40.8-69.4 40.8z" /></svg>
                Dashboard
            </li>
            <li>
                <svg width="2em" height="2em" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M252.644 56.915C295.342 38.4482 320.69 113.363 271.651 123.522C231.551 131.832 216.845 78.0154 247.144 58.0544" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M330.482 265.712C341.911 277.397 345.967 295.564 330.334 311.241C305.977 335.671 271.834 312.649 271.756 285.037" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M192.293 285.199C193.35 293.668 190.602 302.807 182.127 311.229C159.576 333.641 128.721 316.163 123.655 291.812" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M231 133C206.612 161.128 194.495 179.606 187 209" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M231.268 139C230.078 174.935 230.842 200.382 278 181.706" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M270.454 181.27C277.648 203.747 292.95 234.179 296.436 257.918" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M198.698 209.851C179.8 211.119 147.038 219.427 133.916 234.11C126.125 242.825 100.697 270.714 108.106 285.446C112.07 293.339 163.502 289.662 170.276 288.7C200.718 284.374 240.691 289.662 270.337 285.446C276.764 284.532 267.42 277.198 275.865 277.198C288.469 277.198 350.064 262.896 339.366 250.123C314.559 220.523 257.393 244.451 266.097 274.746" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M200.303 212.449C207.9 229.886 214.057 274.576 214.593 278.703" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M200.303 208.553C255.045 208.309 257.332 233.927 223.294 274.806" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M169.124 213.748C142.024 230.768 99.6067 221.459 67.7939 231.936" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M60 128.007C68.4342 143.576 60 224.334 63.5625 228.038" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M63.8965 128.233C105.69 123.275 132.857 122.22 136.014 128.233C139.17 134.247 139.17 171.658 130.567 218.945" stroke="#000000" stroke-opacity="0.9" stroke-width="16" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                Food Order
            </li>
            <li>
            <svg height="2em" width="2em" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"  xml:space="preserve">
                <g>
                    <path class="st0" d="M256,0C114.613,0,0,114.613,0,256s114.613,256,256,256s256-114.613,256-256S397.387,0,256,0z M356.662,244.613
                        l-47.588,37.976l16.178,58.702c1.338,4.887-0.477,10.097-4.581,13.081c-4.105,2.976-9.621,3.097-13.855,0.306l-50.83-33.532
                        l-50.815,33.532c-4.233,2.79-9.75,2.67-13.863-0.306c-4.104-2.984-5.92-8.194-4.581-13.081l16.186-58.702l-47.597-37.976
                        c-3.952-3.161-5.548-8.451-3.975-13.274c1.564-4.822,5.96-8.17,11.016-8.395l60.831-2.75l21.411-57.001
                        c1.79-4.742,6.331-7.887,11.387-7.887c5.08,0,9.612,3.146,11.394,7.887l21.42,57.001l60.815,2.75
                        c5.064,0.226,9.467,3.573,11.032,8.395C362.218,236.162,360.629,241.452,356.662,244.613z"/>
                </g>
            </svg>
                Favorite
            </li>
            <li >
                <a href="{{route('orderHistory')}}">
                    <svg width="2em" height="2em" viewBox="0 0 32 32" id="svg5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg">

                        <defs id="defs2"/>

                        <g id="layer1" transform="translate(36,-148)">

                        <path d="m -28,150 c -2.749574,0 -5,2.25042 -5,5 v 22 a 1.0001,1.0001 0 0 0 1.832031,0.55469 L -30,175.80273 l 1.167969,1.75196 a 1.0001,1.0001 0 0 0 1.664062,0 L -26,175.80273 l 1.167969,1.75196 a 1.0001,1.0001 0 0 0 1.664062,0 L -22,175.80273 l 1.167969,1.75196 a 1.0001,1.0001 0 0 0 1.664062,0 L -18,175.80273 l 1.167969,1.75196 A 1.0001,1.0001 0 0 0 -15,177 v -12 h 7 a 1.0001,1.0001 0 0 0 1,-1 v -9 c 0,-2.74958 -2.2504259,-5 -5,-5 z m 0,2 h 12.007812 C -16.624083,152.83731 -17,153.87659 -17,155 v 1 8 9.69727 l -0.167969,-0.25196 a 1.0001,1.0001 0 0 0 -1.664062,0 L -20,175.19727 l -1.167969,-1.75196 a 1.0001,1.0001 0 0 0 -1.664062,0 L -24,175.19727 l -1.167969,-1.75196 a 1.0001,1.0001 0 0 0 -1.664062,0 L -28,175.19727 l -1.167969,-1.75196 a 1.0001,1.0001 0 0 0 -1.664062,0 L -31,173.69727 V 155 c 0,-1.6687 1.331303,-3 3,-3 z m 16,0 c 1.668697,0 3,1.3313 3,3 v 8 h -6 v -7 -1 c 0,-1.6687 1.331303,-3 3,-3 z" id="rect1587" style="fill-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4.1;-inkscape-stroke:none"/>

                        <path d="m -28,162 a 1,1 0 0 0 -1,1 1,1 0 0 0 1,1 h 4 a 1,1 0 0 0 1,-1 1,1 0 0 0 -1,-1 z" id="path6019" style="fill-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4.1;-inkscape-stroke:none"/>

                        <path d="m -28,165 a 1,1 0 0 0 -1,1 1,1 0 0 0 1,1 h 8 a 1,1 0 0 0 1,-1 1,1 0 0 0 -1,-1 z" id="path6021" style="fill-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4.1;-inkscape-stroke:none"/>

                        <path d="m -28,168 a 1,1 0 0 0 -1,1 1,1 0 0 0 1,1 h 8 a 1,1 0 0 0 1,-1 1,1 0 0 0 -1,-1 z" id="path6023" style="fill-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4.1;-inkscape-stroke:none"/>

                        <path d="m -28,155 a 1.0001,1.0001 0 0 0 -1,1 v 4 a 1.0001,1.0001 0 0 0 1,1 h 4 a 1.0001,1.0001 0 0 0 1,-1 v -4 a 1.0001,1.0001 0 0 0 -1,-1 z m 1,2 h 2 v 2 h -2 z" id="rect6025" style="fill-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4.1;-inkscape-stroke:none"/>

                        </g>

                    </svg>
                    Order History
                </a>
            </li>
            <li>
                <svg width="2em" height="2em" viewBox="0 0 1024 1024" class="icon" style="vertical-align: middle;fill: #1A1A1A;overflow: hidden;" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M131.5328 369.0496l114.8416-187.0848c6.3488-10.2912 17.3568-16.5376 29.184-16.5376h538.8288c11.776 0 22.7328 6.1952 29.0816 16.384l116.224 187.1872c8.0384 13.0048 7.0656 29.8496-2.4576 41.728l-377.9584 472.576a42.72128 42.72128 0 0 1-67.1744 0L134.0928 410.624c-9.472-11.8272-10.496-28.6208-2.56-41.5744z" fill="#F2C336" /><path d="M800.3072 198.8608l29.0816 45.8752 29.8496-45.8752-29.4912-41.728z" fill="#E8A200" /><path d="M134.0928 410.624l372.992 466.3296-154.112-487.3728-226.56 1.6896c0.6144 6.9632 3.1744 13.7216 7.68 19.3536zM579.328 883.3024l377.9584-472.576a35.95264 35.95264 0 0 0 7.68-19.6096l-279.2448-9.8304-159.4368 513.536a42.58816 42.58816 0 0 0 53.0432-11.52z" fill="#F58200" /><path d="M959.744 368.9984l-102.8096-165.5808-120.8832 180.992h-59.5968l-128.3072-195.8912-127.4368 188.928h-65.024L238.2336 195.2256 131.5328 369.0496a36.38784 36.38784 0 0 0-5.12 22.4256l838.5536-6.9632a35.84 35.84 0 0 0-5.2224-15.5136z" fill="#F58200" /><path d="M859.2384 198.8608l-29.8496 45.8752 83.968 136.6016-367.6672 451.072-11.7248 81.8688 442.4704-522.8032-2.816-25.3952z" fill="#F46800" /><path d="M223.0272 562.2784a15.37536 15.37536 0 0 0-21.7088-1.0752 15.37536 15.37536 0 0 0-1.0752 21.7088l8.3456 9.216a15.36 15.36 0 0 0 11.3664 5.0176c3.6864 0 7.3728-1.3312 10.2912-3.9936a15.37536 15.37536 0 0 0 1.0752-21.7088l-8.2944-9.1648z" fill="#333333" /><path d="M980.6848 350.1568l-125.7984-196.864c-9.728-15.2576-26.368-24.32-44.4416-24.32H227.1232c-18.176 0-34.8672 9.1648-44.5952 24.576l-23.4496 37.12c-4.5056 7.168-2.4064 16.64 4.7616 21.1968 7.168 4.5568 16.64 2.4064 21.1968-4.7616l21.3504-33.792 119.04 192.6656H84.6336l66.816-105.6768c4.5056-7.168 2.4064-16.64-4.7616-21.1968-7.168-4.5056-16.64-2.4064-21.1968 4.7616L58.2144 350.2592c-12.1856 19.3024-10.6496 44.0832 3.6864 61.4912l90.8288 114.688a15.29344 15.29344 0 0 0 21.5552 2.5088c6.656-5.2736 7.7824-14.9504 2.5088-21.5552L89.1392 396.6976H341.504L483.4304 875.52l-207.104-249.4976a15.34976 15.34976 0 0 0-23.6032 19.6096l218.6752 263.4752c10.752 13.056 26.112 20.992 42.752 22.4768 1.6384 0.3072 3.328 0.5632 5.0176 0.5632h0.3072c1.5872 0 3.1232-0.2048 4.608-0.512 16.9984-1.2288 32.768-9.216 43.7248-22.528l409.1904-497.0496c14.5408-17.664 16.0768-42.5472 3.6864-61.9008z m-26.3168 15.8208h-252.9792l129.28-193.5872 123.6992 193.5872z m-435.4048 521.4208L373.504 396.6976h279.3472l-133.888 490.7008z m153.9072-534.0672l-125.0816-193.6896h254.4128l-129.3312 193.6896zM489.984 159.6928L353.792 353.4336 234.0864 159.6928H489.984z m29.0304 12.0832l125.3888 194.2016H382.5152l136.4992-194.2016z m34.2528 706.6624l131.4816-481.7408h265.1136l-396.5952 481.7408z" fill="#333333" /><path d="M343.8592 630.9888c-3.84 0-7.6288-1.6896-10.1376-4.9664l-12.4928-16.128a12.8512 12.8512 0 0 1 2.304-17.9712 12.8512 12.8512 0 0 1 17.9712 2.304l12.4928 16.128a12.8512 12.8512 0 0 1-2.304 17.9712c-2.3552 1.792-5.12 2.6624-7.8336 2.6624zM301.312 569.344c-3.84 0-7.6288-1.6896-10.1376-4.9664L206.2848 454.4512a12.8512 12.8512 0 0 1 2.304-17.9712 12.8512 12.8512 0 0 1 17.9712 2.304l84.8896 109.9264a12.8512 12.8512 0 0 1-2.304 17.9712c-2.3552 1.792-5.12 2.6624-7.8336 2.6624zM205.568 342.272c-2.3552 0-4.6592-0.6144-6.8096-1.9456a12.83584 12.83584 0 0 1-4.0448-17.664l26.4704-42.1376a12.83584 12.83584 0 0 1 17.664-4.0448c5.9904 3.7376 7.7824 11.6736 4.0448 17.664l-26.4704 42.1376c-2.4064 3.84-6.5536 5.9904-10.8544 5.9904z" fill="#FFFFFF" /><path d="M809.8816 346.9312c-2.3552 0-4.6592-0.6144-6.8096-1.9456a12.83584 12.83584 0 0 1-4.0448-17.664l26.4704-42.1376a12.83584 12.83584 0 0 1 17.664-4.0448c5.9904 3.7376 7.7824 11.6736 4.0448 17.664l-26.4704 42.1376c-2.4576 3.84-6.6048 5.9904-10.8544 5.9904z" fill="#FFFFFF" /><path d="M493.824 341.8112c-2.3552 0-4.6592-0.6144-6.8096-1.9456a12.83584 12.83584 0 0 1-4.0448-17.664l26.4704-42.1376a12.83584 12.83584 0 0 1 17.664-4.0448c5.9904 3.7376 7.7824 11.6736 4.0448 17.664l-26.4704 42.1376c-2.4576 3.84-6.6048 5.9904-10.8544 5.9904z" fill="#FFFFFF" /></svg>
                Suscription
            </li>
            <li>
                <svg height="2em" width="2em" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 340.279 340.279" xml:space="preserve">
                    <g>
                        <path d="M329.922,196.825l-19.937-11.511c0.538-4.986,0.821-10.048,0.821-15.175s-0.283-10.189-0.821-15.175l19.937-11.511
                            c4.261-2.46,7.308-6.433,8.582-11.187c1.272-4.754,0.618-9.719-1.842-13.979l-38.354-66.436c-3.283-5.685-9.402-9.216-15.974-9.216
                            c-3.216,0-6.393,0.855-9.192,2.472l-19.994,11.543c-8.126-5.959-16.912-11.068-26.227-15.195V18.423
                            C226.92,8.265,218.653,0,208.497,0h-76.715c-10.158,0-18.422,8.265-18.422,18.423v23.033c-9.316,4.127-18.102,9.235-26.229,15.196
                            L67.137,45.108c-2.799-1.616-5.977-2.471-9.191-2.471c-6.572,0-12.691,3.53-15.975,9.215L3.618,118.288
                            c-2.461,4.26-3.115,9.226-1.842,13.979c1.274,4.754,4.321,8.727,8.582,11.187l19.937,11.511
                            c-0.538,4.986-0.821,10.048-0.821,15.175s0.283,10.188,0.821,15.175l-19.937,11.511c-4.261,2.46-7.308,6.433-8.582,11.187
                            c-1.273,4.754-0.619,9.72,1.842,13.979l38.353,66.436c3.283,5.685,9.402,9.215,15.975,9.215c3.215,0,6.393-0.854,9.191-2.471
                            l19.994-11.543c8.127,5.96,16.913,11.069,26.229,15.196v23.034c0,4.92,1.916,9.546,5.396,13.025
                            c3.481,3.479,8.106,5.396,13.025,5.396h76.715c10.156,0,18.423-8.265,18.423-18.422v-23.035
                            c9.315-4.126,18.102-9.235,26.227-15.195l19.994,11.543c2.799,1.617,5.977,2.471,9.192,2.471c6.571,0,12.69-3.53,15.974-9.215
                            l38.354-66.436c2.46-4.26,3.114-9.226,1.842-13.979C337.229,203.258,334.182,199.285,329.922,196.825z M170.139,270.14
                            c-55.229,0-100-44.773-100-100s44.771-100,100-100c55.23,0,100,44.773,100,100S225.37,270.14,170.139,270.14z"/>
                        <path d="M239.083,117.796c-0.591-0.15-1.218,0.022-1.649,0.454l-18.058,18.114c-1.083-0.44-3.814-1.939-8.868-6.976
                            c-5.053-5.037-6.56-7.763-7.003-8.845l18.056-18.113c0.431-0.432,0.602-1.06,0.45-1.65c-0.152-0.591-0.605-1.058-1.191-1.228
                            c-2.604-0.756-5.302-1.139-8.02-1.139c-7.674,0-14.885,2.993-20.302,8.427c-5.408,5.425-8.38,12.63-8.37,20.289
                            c0.006,3.947,0.81,7.768,2.324,11.288l-21.887,21.888l-22.416-22.416c-0.02-0.038-0.034-0.079-0.056-0.117l-10.251-17.567
                            c-0.177-0.303-0.417-0.563-0.706-0.764l-17.285-11.994c-0.955-0.663-2.249-0.546-3.07,0.275l-7.703,7.702
                            c-0.822,0.822-0.938,2.115-0.275,3.071l11.993,17.285c0.2,0.288,0.461,0.529,0.764,0.706l17.571,10.248
                            c0.034,0.02,0.071,0.026,0.105,0.044l22.428,22.427l-16.868,16.868c-3.532-1.518-7.367-2.322-11.325-2.322
                            c-7.676,0-14.887,2.993-20.305,8.428c-7.398,7.418-10.158,18.279-7.202,28.343c0.172,0.585,0.64,1.037,1.232,1.187
                            c0.591,0.151,1.218-0.021,1.649-0.455l18.056-18.112c1.083,0.439,3.814,1.939,8.868,6.975c5.053,5.038,6.559,7.763,7,8.845
                            l-18.056,18.114c-0.431,0.432-0.602,1.06-0.449,1.65c0.152,0.591,0.605,1.058,1.191,1.228c2.603,0.755,5.301,1.138,8.018,1.138
                            c7.675,0,14.886-2.993,20.305-8.428c5.408-5.424,8.379-12.629,8.368-20.288c-0.006-3.947-0.81-7.769-2.324-11.288l16.863-16.863
                            l7.146,7.145l-4.872,4.872c-1.062,1.06-1.647,2.468-1.647,3.966c-0.001,1.499,0.584,2.908,1.645,3.967l34.413,34.412
                            c1.057,1.06,2.464,1.643,3.963,1.643c1.498,0,2.909-0.583,3.97-1.643l18.641-18.645c1.06-1.059,1.644-2.468,1.645-3.967
                            c0-1.499-0.584-2.907-1.644-3.966L199.535,177.6c-1.059-1.059-2.467-1.643-3.966-1.643c-1.499,0-2.908,0.584-3.967,1.645
                            l-4.869,4.869l-7.146-7.145l21.891-21.892c3.532,1.519,7.366,2.322,11.325,2.323c0.001,0,0.001,0,0.002,0
                            c7.674,0,14.885-2.994,20.302-8.43c7.397-7.415,10.158-18.275,7.206-28.342C240.143,118.398,239.675,117.946,239.083,117.796z
                            M195.188,189.842c1.226-1.228,3.215-1.228,4.443,0l22.074,22.076c1.228,1.226,1.228,3.214,0,4.441
                            c-1.228,1.225-3.213,1.225-4.439,0l-22.078-22.076C193.967,193.055,193.967,191.067,195.188,189.842z M185.195,199.829
                            c1.23-1.224,3.221-1.224,4.448,0.002l22.075,22.077c1.225,1.225,1.226,3.214,0,4.439c-1.23,1.227-3.219,1.227-4.442,0
                            l-22.081-22.077C183.972,203.046,183.972,201.058,185.195,199.829z"/>
                    </g>
                    </svg>
                Setting
                

            </li>
            <li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit">Cerrar sesión</button>
                </form>
            </li>
        </ul>
    </nav>
    <div class="shadows"></div>
    <div class="mainContainer">
        <div class="container">
            <section class="greet">
                <div>
                    <button class="menuNavbar">
                        <img src="{{asset('img/menu.png')}}" alt="">
                    </button>
                    <span class="saludo">Hey, Joel</span>
                </div>
                
                <input type="text" placeholder="What do you want today...">

                <div>
                    <svg class="shoppingCart" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="30px" height="30px" viewBox="0 0 612 612" style="enable-background:new 0 0 612 612;" xml:space="preserve">
                        <g>
                            <g id="Cart">
                                <g>
                                    <path  fill="#8c4af2" d="M139.886,480.857c-28.974,0-52.457,23.483-52.457,52.457s23.483,52.457,52.457,52.457s52.457-23.483,52.457-52.457
                                        S168.859,480.857,139.886,480.857z M559.543,113.657H124.516L44.764,33.922c-4.739-4.756-11.296-7.694-18.535-7.694
                                        C11.733,26.229,0,37.961,0,52.457c0,7.239,2.938,13.796,7.694,18.535l62.249,62.267v260.17c0,28.974,23.483,52.457,52.457,52.457
                                        h332.229c21.122,0,39.343-12.502,47.666-30.495l104.914-227.314c3.06-6.679,4.791-14.128,4.791-21.962
                                        C612,137.141,588.499,113.657,559.543,113.657z M454.629,393.429H122.4V253.543h396.803L454.629,393.429z M543.421,201.086H122.4
                                        v-34.972h437.143l0.035-0.035L543.421,201.086z M419.657,480.857c-28.956,0-52.457,23.483-52.457,52.457
                                        s23.501,52.457,52.457,52.457s52.457-23.483,52.457-52.457S448.613,480.857,419.657,480.857z"/>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <img src="{{asset('img/userIsra.avif')}}" alt="">
                </div>
            </section>
            @yield('contenido')
        </div>
    </div>
    <script src="{{asset('js/entranceNavBar.js')}}"></script>
    
    @stack('scripts')
</body>
</html>