<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            /* Container holding the image and the text */

            .text-block {
                position: absolute;
                left: 65%;
                top: 50px;
                z-index: 1;
                color: white;
            }
            .bg-text {
                background-color: rgb(0,0,0); /* Fallback color */
                background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
                color: white;
                font-weight: bold;
                border: 1px solid #f1f1f1;
                position: absolute;
                top: 50px;
                /*left: 5%;*/
                /*transform: translate(-50%, -50%);*/
                z-index: 2;
                width: 60%;
                padding: 20px;
                /*text-align: center;*/
            }
        </style>
    </head>
    <body class="">
        <div >
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline" style="color: white">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline" style="color: white">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline" style="color: white">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

                <div class="jumbotron" style="background-image: url({{asset('/images/essay2.jpg')}});
                    min-height: 400px; background-size: cover; background-position: center;
                    /*filter: blur(8px);*/
                    /*-webkit-filter: blur(8px); */
                    background-repeat: no-repeat">
                    <div class="bg-text">
                        <h1 class="display-4" style="color: white">Welcome to EssayZillas</h1>
                        <p class="lead" style="color: white">The world's no 1 assignment company</p>
                        <hr class="my-4">

                        <p>The most authentic and genuine content for your assignment</p>
                        <p class="lead">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Order Now</a>
                        </p>
                    </div>


                    <div class="text-block">
                        <div class="card" style="width: 23.5rem;">
{{--                            <img class="card-img-top" src="..." alt="Card image cap">--}}
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <select class="form-control" aria-label="Default select example" name="type">
                                            @foreach($services as $service)
                                                <option value="{{ $service->label }}" >{{ $service->label}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" aria-label="Default select example" name="level">
                                            @foreach($levels as $level)
                                                <option value="{{ $level->level }}" >{{ $level->level}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>14 Days</option>
                                            <option>7 Days</option>
                                            <option>5 days</option>
                                            <option>36 hours</option>
                                            <option>24 hours</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1 Page(s) 275 words</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Calculate</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        <div class="card-deck">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Essays</h5>
                    <p class="card-text">Writing essays is our forte. We have skilled writers ready and willing to assist..</p>
{{--                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Research</h5>
                    <p class="card-text">We take pride in research and are immensely equiped to assist you for all research needs.</p>
{{--                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Custom Services</h5>
                    <p class="card-text">Talk to us for any custom services. We are ready to listen and assist 24/7.</p>
                    {{--                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>--}}
                </div>
            </div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
