<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dariger Men</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:inherit;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        @section('styles')
            <style>
                html, body {
                    font-family: 'Nunito', sans-serif;
                    background-image: url("{{ asset('/images/background.png') }}");
                    background-repeat: no-repeat;
                    background-size: cover;
                    box-sizing: border-box;
                    height:100%;
                    margin: 0;
                }
                .wrapper {
                    min-height:100%
                }

                .header {
                    height: 100px;
                    padding-top: 30px;
                    padding-left: 5%;
                    padding-right: 5%;
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-between;
                    margin-bottom: 6%;
                }
                .header span {
                    font-size: 24px;
                    align-items: center;
                }
                .header-i {
                    align-items: center;
                    display: flex;
                }
                .header-icon_name {
                    padding-left: 20px;
                }
                .header-block {
                    display: flex;
                    flex-wrap: wrap;
                    width: 45%;
                    justify-content: space-between;
                    align-items: flex-end;
                }
                /* HEADER END */

                /* CHOOSE */
                .content {
                    min-height: calc(100vh - 120px);
                }
                .title {
                    text-align: center;
                    font-size: 56px;
                    margin-bottom: 3%;
                }
                .choose-rounded {
                    padding: 20px;
                    background-color: #79B84E;
                    height: 78px;
                    border-radius: 30px;
                    font-size: 24px;
                    margin-left: 4%;
                }
                .choose-first {
                    background-color: white;
                    display: flex;
                    flex-wrap: wrap;
                    align-items: center;
                    border-radius: 30px;
                    width: 30%;
                    padding-top: 20px;
                    padding-left: 20px;
                    transition: 0.3s;
                    
                }
                .choose-first:hover {
                    transform: scale(1.13);
                    box-shadow: 0px 0px 10px rgba(0,0,0,0.4);            }
                .choose-second {
                    background-color: white;
                    display: flex;
                    align-items: center;
                    border-radius: 30px;
                    width: 32vmax;
                    margin-left: 2vmax;
                    transition: 0.3s;
                    cursor: pointer;
                }
                .choose-second:hover {
                    transform: scale(1.13);
                    box-shadow: 0px 0px 10px rgba(0,0,0,0.4);
                }
                .choose {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    margin-bottom: 200px;
                }
                /* CHOOSE END */

                /* INFO */
                .info {
                    background-color: #CAE8F9;
                    margin-left: 10%;
                    margin-right: 10%;
                    padding: 10px;
                    border-radius: 30px;
                    display: flex;
                    margin-bottom: 40px;
                }
                .info-date {
                    background-color: #5E9690;
                    padding: 20px;
                    border-radius: 25px;
                    font-size: 30px;
                    display: flex;
                    color: white;
                }
                .info-date_day {
                    font-size: 64px;
                    align-self: center;
                }
                .info-date_month {
                    display: block;
                    flex-wrap: wrap
                }

                .info-users {
                    background: #EFFBF9;
                    border-radius: 25px;
                    font-size: 26px;
                    margin-left: 1%;
                    padding: 3%;
                    display: flex;
                }
                .info-users_1{
                    background: #EFFBF9;
                    border-radius: 25px;
                    font-size: 26px;
                    margin-left: 1%;
                }
                
                /* footer */
                
                .footer {
                    padding-left: 50px;
                    padding-right: 50px;
                    padding-top: 50px;
                    background-color: #5E9690;
                    height: 120px;
                    width: 100%;
                    display: flex;
                    justify-content: space-between;
                    margin: auto;
                }
            </style>
        @show
    </head>
    <body>
        <div class="wrapper">
            @section('header')
                <div class="header">
                    <span class="header-i">
                        <img class="header-icon" src="{{ asset('/images/icons/welcome-page_icon.png') }}">
                        <span class="header-icon_name">Dariger Men</span>    
                    </span>
                    <span class="header-block">
                        <div>
                            <img src="{{ asset('/images/icons/person-icon18x18.png') }}" alt="person">
                            <a href="{{ url('/login') }}">Кirý</a> / <a href="{{ url('/register') }}">Tirkelý</a>
                        </div>
                        <div>
                            <img src="{{ asset('/images/icons/location-icon18x18.png') }}" alt="location">
                            <a href="#">Qaraǵandy</a>
                        </div>
                        <a href="#">Qaz</a>
                    </span>
                </div>
            @show
            <div class="content">
                @section('content')
                    <h1 class="title">Dárigermen emdel</h1>
                    <div class="choose">
                        <a href="{{ url('/login') }}" class="choose-first">
                            <img src="{{ asset('/images/doctor-1.jpg') }}" alt="doctor">
                            <div class="choose-rounded">Men dárigermin</div>
                        </a>
                        <a href="{{ url('/login') }}" class="choose-second">
                            <img src="{{ asset('/images/doctor-2.jpg') }}" alt="doctor">
                            <div class="choose-rounded">Men naýqaspyn</div>
                        </a>
                    </div>
                    <div class="info">
                        <div class="info-date">
                            <div class="info-date_month">
                                <img src="{{ asset('/images/icons/saly-icon.svg') }}" alt="saly">
                                <div>Jeltoqsan</div>
                            </div>
                            <span class="info-date_day">
                                03
                            </span>
                        </div>
                        <div class="info-users">
                            <div class="info-users_1">
                                <div>
                                    Ýaqyt: Astana
                                </div>
                                <div>
                                    Sanat: Barlyq óńir
                                </div>
                            </div>
                            <img src="" alt="">
                            <div class="info-users_3">
                                <div>
                                    Naýqastar sany: 3556
                                </div>
                                <div>
                                    Emdelgen naýqastar sany: 7000
                                </div>
                            </div>
                        </div>
                    </div>
                @show
            </div>
            @section('footer')
                <div class="footer">
                    <span>dariger.Men@gmail.com</span>
                    <span>Biz sizben baılanystamyz!</span>
                    <span>+7 (777) 777 77 77</span>
                    <span>Barlyq quqyq qorǵalǵan! 2022 jyl </span>
                </div>
            @show
        </div>
    </body>
</html>
