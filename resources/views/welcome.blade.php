<!doctype html>
<html lang="{{LaravelLocalization::getCurrentLocaleRegional()}}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="icon" type="image/svg+xml" href="{{asset('/favicon.svg')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon/favicon-16x16.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('/favicon/android-icon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/favicon/apple-icon-180x180.png')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
    <link rel="manifest" href="{{asset('/favicon/manifest.json')}}">
    <meta name="theme-color" content="#ffffff">
    <title>Pulse Gym</title>
    <style>.preloader-page {
            position: fixed;
            z-index: 1001;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            background: #070713;
            border-radius: inherit;
            -webkit-transition-duration: .3s;
            transition-duration: .3s;
            -webkit-transition-property: opacity;
            transition-property: opacity;
            box-sizing: border-box
        }

        .preloader-page svg {
            width: 200px;
            height: 200px;
            margin-bottom: 30px;
            -webkit-animation: pulse 1.5s infinite ease-in-out both;
            -o-animation: pulse 1.5s infinite ease-in-out both;
            -ms-animation: pulse 1.5s infinite ease-in-out both;
            -moz-animation: pulse 1.5s infinite ease-in-out both;
            animation: pulse 1.5s infinite ease-in-out both;
            box-sizing: border-box
        }

        @-webkit-keyframes pulse {
            0% {
                -webkit-transform: scale(.9);
                opacity: .2
            }
            50% {
                -webkit-transform: scale(1);
                opacity: 1
            }
            100% {
                -webkit-transform: scale(.9);
                opacity: .2
            }
        }

        @keyframes pulse {
            0% {
                transform: scale(.9);
                opacity: .2
            }
            50% {
                transform: scale(1);
                opacity: 1
            }
            100% {
                transform: scale(.9);
                opacity: .2
            }
        }</style>
    <script defer="defer" src="{{asset('/static/js/main.5d3a91f9.js')}}"></script>
    <link href="{{asset('/static/css/main.185ae202.css')}}" rel="stylesheet">
</head>
<body>
<noscript>You need to enable JavaScript to run this app.</noscript>
<script>  window.setting =
        {
            email: 'vcube.su@gmail.com',
            instagram: 'https:\/\/www.youtube.com\/watch?v=Le9qfqLYs8M',
            facebook: 'https:\/\/www.youtube.com\/watch?v=Le9qfqLYs8M',
            schedule: 'Пн - Сб с 8:00 до 22:00|Вс с 8:00 до 20:00',
        }
    window.lang_default = 'ua';</script>
<div class="preloader-page">
    <svg viewBox="0 0 144 63" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
            d="M18.8033 26.9498C18.8033 27.7359 18.7071 28.4382 18.5146 29.0565C18.3222 29.6748 18.0597 30.2225 17.7273 30.6994C17.4036 31.1676 17.0276 31.5695 16.5989 31.9051C16.1703 32.2408 15.7198 32.5146 15.2473 32.7267C14.7838 32.9386 14.3114 33.0933 13.8302 33.1904C13.3579 33.2876 12.9117 33.3361 12.4918 33.3361H6.49872C5.54744 33.3361 4.77627 32.565 4.77627 31.6137C4.77627 30.6624 5.54744 29.8912 6.49872 29.8912H12.4918C12.9291 29.8559 13.3228 29.7675 13.6727 29.6262C14.0315 29.4761 14.3376 29.2773 14.5912 29.03C14.8449 28.7827 15.0418 28.4867 15.1818 28.1423C15.3216 27.7889 15.3917 27.3914 15.3917 26.9498V25.3863C15.348 24.9535 15.2561 24.556 15.1161 24.1939C14.9762 23.8317 14.7838 23.5226 14.5388 23.2664C14.3026 23.0102 14.0139 22.8115 13.6727 22.6702C13.3316 22.52 12.938 22.4449 12.4918 22.4449H4.80253C4.34763 22.4449 4.0021 22.5642 3.76591 22.8027C3.52972 23.0411 3.41163 23.3856 3.41163 23.8361V36.2942C3.41163 37.2363 2.64791 38 1.70581 38C0.763719 38 0 37.2363 0 36.2942V23.8361C0 22.9528 0.157459 22.202 0.472378 21.5837C0.79604 20.9654 1.19407 20.4663 1.66645 20.0865C2.14757 19.7067 2.66806 19.4328 3.22792 19.265C3.78778 19.0883 4.3039 19 4.77627 19H12.4918C13.2616 19 13.9527 19.1016 14.565 19.3047C15.1773 19.4991 15.7153 19.7641 16.179 20.0997C16.6513 20.4266 17.0493 20.8064 17.373 21.2392C17.7054 21.672 17.9767 22.1269 18.1866 22.6039C18.4053 23.0721 18.5628 23.549 18.659 24.0349C18.7552 24.5118 18.8033 24.9623 18.8033 25.3863V26.9498ZM40.7028 36.2643C40.7028 36.5116 40.6591 36.7413 40.5716 36.9533C40.4842 37.1653 40.3616 37.3508 40.2041 37.5098C40.0467 37.6599 39.863 37.7791 39.6531 37.8674C39.4431 37.9558 39.22 38 38.9838 38H31.2946C30.5685 38 29.8337 37.9205 29.0901 37.7615C28.3466 37.6025 27.625 37.3596 26.9251 37.0328C26.234 36.6971 25.5823 36.2731 24.9699 35.7608C24.3576 35.2485 23.8196 34.6434 23.356 33.9456C22.9011 33.239 22.5425 32.4351 22.28 31.5342C22.0176 30.6244 21.8863 29.613 21.8863 28.5V20.7058C21.8863 19.7637 22.6501 19 23.5922 19C24.5343 19 25.298 19.7637 25.298 20.7058V28.5C25.298 29.4716 25.4292 30.2931 25.6916 30.9644C25.9629 31.6357 26.304 32.1967 26.7152 32.6472C27.1263 33.0976 27.5767 33.4509 28.0666 33.7071C28.5565 33.9632 29.0202 34.1532 29.4576 34.2769C29.9037 34.4005 30.2929 34.48 30.6254 34.5153C30.9665 34.5419 31.1896 34.555 31.2946 34.555H33.3028C35.5055 34.555 37.2912 32.7693 37.2912 30.5666V20.7058C37.2912 19.7637 38.0549 19 38.997 19C39.9391 19 40.7028 19.7637 40.7028 20.7058V36.2643ZM62.4973 36.2775C62.4973 37.2288 61.7261 38 60.7748 38H46.9351C46.6901 38 46.4626 37.9558 46.2527 37.8674C46.0427 37.7791 45.8591 37.6599 45.7016 37.5098C45.553 37.3508 45.4349 37.1653 45.3474 36.9533C45.2599 36.7413 45.2161 36.5116 45.2161 36.2643V20.7058C45.2161 19.7637 45.9798 19 46.922 19C47.8641 19 48.6278 19.7637 48.6278 20.7058V30.9988C48.6278 32.9628 50.22 34.555 52.1841 34.555H60.7748C61.7261 34.555 62.4973 35.3262 62.4973 36.2775ZM83.6226 32.4086C83.6226 33.0888 83.5352 33.7027 83.3602 34.2503C83.194 34.7892 82.971 35.2661 82.6909 35.6813C82.4111 36.0965 82.0831 36.4498 81.7069 36.7413C81.3308 37.0328 80.9415 37.2713 80.5391 37.4568C80.1367 37.6422 79.7255 37.7791 79.3056 37.8674C78.8945 37.9558 78.5052 38 78.1378 38H66.6993C65.748 38 64.9769 37.2288 64.9769 36.2775C64.9769 35.3262 65.748 34.555 66.6993 34.555H78.1378C78.7939 34.555 79.3013 34.3608 79.6599 33.972C80.0273 33.5835 80.211 33.0623 80.211 32.4086C80.211 32.0906 80.1629 31.7992 80.0667 31.5342C79.9705 31.2692 79.8304 31.0395 79.6468 30.8452C79.4718 30.6509 79.2532 30.5007 78.9907 30.3947C78.737 30.2887 78.4527 30.2357 78.1378 30.2357H70.291C69.74 30.2357 69.1451 30.1385 68.5065 29.9442C67.8679 29.741 67.273 29.4186 66.722 28.977C66.1796 28.5353 65.7247 27.9568 65.3574 27.2413C64.9986 26.5258 64.8194 25.6513 64.8194 24.6179C64.8194 23.5844 64.9986 22.7143 65.3574 22.0077C65.7247 21.2922 66.1796 20.7136 66.722 20.272C67.273 19.8215 67.8679 19.4991 68.5065 19.3047C69.1451 19.1016 69.74 19 70.291 19H80.1812C81.1325 19 81.9037 19.7712 81.9037 20.7225C81.9037 21.6737 81.1325 22.4449 80.1812 22.4449H70.291C69.6438 22.4449 69.1364 22.6437 68.7689 23.0411C68.4103 23.4386 68.2309 23.9642 68.2309 24.6179C68.2309 25.2803 68.4103 25.8059 68.7689 26.1946C69.1364 26.5744 69.6438 26.7643 70.291 26.7643H78.1378H78.164C78.5314 26.7731 78.9208 26.8261 79.3318 26.9233C79.743 27.0116 80.1498 27.153 80.5521 27.3473C80.9633 27.5416 81.3527 27.7889 81.72 28.0893C82.0874 28.3808 82.4111 28.7341 82.6909 29.1492C82.9797 29.5644 83.2072 30.0414 83.3734 30.5802C83.5396 31.119 83.6226 31.7285 83.6226 32.4086ZM104 36.2775C104 37.2288 103.229 38 102.278 38H91.692C91.2195 38 90.7034 37.9162 90.1435 37.7483C89.5838 37.5805 89.0632 37.3066 88.5821 36.9268C88.1098 36.5381 87.7117 36.0391 87.388 35.4296C87.0732 34.8112 86.9157 34.056 86.9157 33.1638V20.7357C86.9157 20.4972 86.9593 20.272 87.0468 20.06C87.1343 19.848 87.2524 19.6625 87.4011 19.5035C87.5586 19.3445 87.7423 19.2208 87.9523 19.1325C88.1622 19.0442 88.3897 19 88.6346 19H102.278C103.229 19 104 19.7712 104 20.7225C104 21.6737 103.229 22.4449 102.278 22.4449H90.783C90.5313 22.4449 90.3272 22.649 90.3272 22.9007V33.1638C90.3272 33.6144 90.4453 33.9589 90.6815 34.1974C90.9178 34.4358 91.2633 34.555 91.7182 34.555H102.278C103.229 34.555 104 35.3262 104 36.2775Z"
            fill="#FFA621"/>
        <path
            d="M63.7195 61.0542C63.7195 61.2948 63.6759 61.5182 63.5889 61.7243C63.5019 61.9305 63.3801 62.1109 63.2234 62.2656C63.0754 62.4115 62.897 62.5275 62.6882 62.6134C62.4793 62.6993 62.2531 62.7423 62.0094 62.7423H49.7647C49.4514 62.7423 49.112 62.708 48.7465 62.6392C48.3897 62.5619 48.0329 62.4459 47.6761 62.2913C47.328 62.1366 46.9929 61.9391 46.6709 61.6986C46.3489 61.4494 46.0617 61.1531 45.8093 60.8095C45.5657 60.4572 45.3699 60.0534 45.2219 59.5982C45.074 59.1342 45 58.6145 45 58.0389V48.9673C45 48.658 45.0348 48.3273 45.1044 47.9751C45.1828 47.6143 45.3002 47.262 45.4569 46.9184C45.6135 46.5662 45.8181 46.2312 46.0704 45.9133C46.3228 45.5955 46.6231 45.3163 46.9712 45.0757C47.328 44.8266 47.737 44.629 48.1982 44.483C48.6595 44.3369 49.1816 44.2639 49.7647 44.2639H62.5628C63.1151 44.2639 63.5628 44.7116 63.5628 45.2639V46.6143C63.5628 47.1665 63.1151 47.6143 62.5628 47.6143H49.7647C49.3209 47.6143 48.9815 47.7302 48.7465 47.9622C48.5115 48.1941 48.394 48.5378 48.394 48.993V58.0389C48.394 58.4685 48.5115 58.8035 48.7465 59.0441C48.9902 59.2759 49.3296 59.3919 49.7647 59.3919H59.3254C59.8777 59.3919 60.3254 58.9442 60.3254 58.3919V56.1912C60.3254 55.6389 59.8777 55.1912 59.3254 55.1912H52.292C51.7397 55.1912 51.292 54.7434 51.292 54.1912V52.8151C51.292 52.2628 51.7397 51.8151 52.292 51.8151H62.0094C62.2531 51.8151 62.4793 51.8623 62.6882 51.9568C62.897 52.0427 63.0754 52.163 63.2234 52.3176C63.3801 52.4722 63.5019 52.6526 63.5889 52.8588C63.6759 53.0564 63.7195 53.2712 63.7195 53.5031V61.0542ZM85.6235 50.4491C85.6235 51.2137 85.5234 51.8967 85.3233 52.498C85.1319 53.0994 84.8751 53.632 84.5531 54.0959C84.2311 54.5512 83.8525 54.942 83.4174 55.2685C82.991 55.5949 82.5472 55.8655 82.0859 56.0803C81.6247 56.2864 81.1547 56.4369 80.676 56.5313C80.2062 56.6258 79.7622 56.6731 79.3445 56.6731H78.9738C78.4215 56.6731 77.9738 57.1208 77.9738 57.6731V61.7423C77.9738 62.2946 77.5261 62.7423 76.9738 62.7423H75.5537C75.0014 62.7423 74.5537 62.2946 74.5537 61.7423V57.6731C74.5537 57.1208 74.106 56.6731 73.5537 56.6731H73.1961C72.7784 56.6731 72.3302 56.6258 71.8516 56.5313C71.3816 56.4369 70.9116 56.2864 70.4418 56.0803C69.9804 55.8655 69.5367 55.5949 69.1102 55.2685C68.6838 54.942 68.3053 54.5512 67.9746 54.0959C67.6525 53.632 67.3915 53.0994 67.1912 52.498C66.9998 51.8881 66.9041 51.2051 66.9041 50.4491V45.2639C66.9041 44.7116 67.3518 44.2639 67.9041 44.2639H69.2982C69.8505 44.2639 70.2982 44.7116 70.2982 45.2639V50.4491C70.2982 50.8873 70.3677 51.2824 70.507 51.6347C70.6463 51.9783 70.8421 52.2747 71.0945 52.5238C71.3469 52.7729 71.6514 52.9662 72.0081 53.1036C72.3737 53.2325 72.7784 53.2969 73.2223 53.2969H79.265C79.3179 53.2969 79.3708 53.2928 79.423 53.2841C79.7202 53.2349 80.0247 53.1747 80.3366 53.1036C80.676 53.0177 80.9849 52.876 81.2635 52.6784C81.542 52.4808 81.7725 52.2059 81.9554 51.8537C82.1381 51.5015 82.2294 51.0333 82.2294 50.4491V45.2639C82.2294 44.7116 82.6772 44.2639 83.2294 44.2639H84.6235C85.1758 44.2639 85.6235 44.7116 85.6235 45.2639V50.4491ZM111 61.7423C111 62.2946 110.552 62.7423 110 62.7423H108.58C108.028 62.7423 107.58 62.2946 107.58 61.7423V55.4782C107.58 54.4545 106.224 54.092 105.713 54.9792L101.562 62.1882C101.414 62.4545 101.205 62.6564 100.935 62.7939C100.674 62.9313 100.391 63 100.087 63C99.791 63 99.5124 62.9313 99.2514 62.7939C98.999 62.6564 98.7989 62.4545 98.6509 62.1882L94.4725 54.9636C93.9605 54.0783 92.6069 54.4415 92.6069 55.4642V61.7423C92.6069 62.2946 92.1592 62.7423 91.6069 62.7423H90.2129C89.6606 62.7423 89.2129 62.2946 89.2129 61.7423V45.6943C89.2129 45.3077 89.326 44.9641 89.5523 44.6634C89.7872 44.3627 90.0918 44.1608 90.4661 44.0577C90.6488 44.0148 90.8316 44.0019 91.0143 44.0191C91.197 44.0277 91.3711 44.0663 91.5364 44.1351C91.7105 44.1952 91.8671 44.2854 92.0064 44.4057C92.1457 44.5173 92.2632 44.6548 92.3589 44.818L99.2228 56.5952C99.6086 57.2571 100.565 57.2571 100.951 56.5952L107.815 44.818C108.015 44.4916 108.289 44.2596 108.637 44.1222C108.994 43.9847 109.364 43.9633 109.747 44.0577C110.112 44.1608 110.413 44.3627 110.648 44.6634C110.883 44.9641 111 45.3077 111 45.6943V61.7423Z"
            fill="white"/>
        <path
            d="M143.872 29.0359C144.132 28.1006 143.561 27.1222 142.643 26.892C142.158 26.7625 141.76 26.8776 141.517 27.0071C141.067 27.2229 140.738 27.6258 140.599 28.115L140.565 28.2589C140.27 29.3236 139.993 30.1582 139.716 30.7193C139.595 30.9495 139.318 31.1078 139.006 31.079C138.695 31.0502 138.452 30.8632 138.383 30.6186C137.76 27.9423 137.361 22.2445 137.102 18.4604C136.288 6.33091 135.682 0 131.889 0C130.487 0 129.361 0.776975 128.426 4.6043C127.508 8.31652 126.885 14.5179 126.036 24.6474C125.534 30.6905 124.842 38.9495 123.924 43.7696C123.872 44.043 123.595 44.2444 123.249 44.2588H123.231C122.902 44.2588 122.625 44.0718 122.556 43.7984C121.898 41.079 121.24 37.525 120.72 34.6617L120.686 34.5179C118.365 21.9711 117.378 17.9136 114.538 17.9136C111.837 17.9136 111.092 21.41 110.227 25.4531C109.967 26.633 109.603 28.4172 109.205 29.5826C109.136 29.8128 108.893 29.9711 108.616 29.9999C108.339 30.0287 108.062 29.9136 107.924 29.6977C107.266 28.6905 106.071 26.8344 103.214 26.8344H94.697C93.7619 26.8344 93 27.6114 93 28.5754C93 29.5395 93.7619 30.3164 94.697 30.3164H103.214C104.201 30.3164 104.478 30.6761 105.153 31.7121C105.794 32.7193 106.781 34.2301 108.911 34.2301C111.837 34.2301 112.668 30.3308 113.551 26.2013L113.569 26.1006C113.655 25.6977 113.759 25.2373 113.863 24.7625C113.932 24.4891 114.209 24.3021 114.538 24.2877C114.867 24.2877 115.144 24.4747 115.214 24.7481C115.976 27.7409 116.772 32.0287 117.344 35.1653C119.526 46.8775 120.409 50.9351 123.179 50.9351C124.495 50.9351 125.863 50.302 126.972 45.6545C127.907 41.6977 128.53 35.5682 129.43 24.9352C129.881 19.4676 130.521 11.9712 131.301 7.38127C131.353 7.0935 131.647 6.89206 131.993 6.89206C132.34 6.89206 132.634 7.10789 132.669 7.39566C133.171 10.7194 133.5 15.3093 133.725 18.6618V18.6906C134.504 30.0143 134.972 35.0358 138.141 35.2948C142.071 35.6258 143.353 30.9495 143.838 29.1797L143.872 29.0359Z"
            fill="#FFA621"/>
    </svg>
</div>
<div id="root"></div>
{{LaravelLocalization::getDefaultLocale()}}
{{LaravelLocalization::getCurrentLocale()}}
<script>
    window.setting = {!! \Illuminate\Support\Facades\File::get(storage_path('app/settings.json')) !!}
</script>
</body>
</html>
