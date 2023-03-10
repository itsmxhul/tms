<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- google icon font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- font awesome icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <header>
        <div class="container">
            <div class="row justify align-items">
                <div class="col">
                    <h1>logo</h1>
                </div>
                <div class="col">
                    <div class="header_text">
                        <ul>
                            {{-- <li><a href="/index">home</a></li> --}}
                            {{-- <li class="dropdown"><a href="currentaffairs">Current Affairs<i class="fa-solid fa-caret-down"></i></a>
                                <ul class="dropdown-nav">
                                    <li><a href="">Lawn Care</a></li>
                                    <li><a href="">Walling &amp; Fencing</a></li>
                                    <li><a href="">Landscape design</a></li>
                                    <li><a href="">Grounds Maintenance</a></li>
                                </ul> --}}
                            </li>
                            @foreach ($dynamicheaders as $dynamicheader)

                            <li><a href="{{$dynamicheader->name}}">{{$dynamicheader->name}}</a></li>
                            @endforeach


                                {{-- @foreach ($dynamicheaders->name->submenu as $subheader)

                                @endforeach --}}
                                {{-- <li class="dropdown"><a href="currentaffairs"><i class="fa-solid fa-caret-down"></i></a>
                                    <ul class="dropdown-nav">
                                        <li><a href=""></a></li>
                                    </ul> --}}
                                {{-- @endif --}}
                            {{-- @endforeach --}}
                            {{-- <li><a href="contact">Contact Us</a></li> --}}
                            {{-- <li><a href="about">About Us</a></li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div class="number">
                        <ul>
                            <li><a href=""><i class="fa-solid fa-phone"></i></a></li>
                            <li><a href="">+91 1111111111</a></li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
    </header>
    <div class="marging"></div>
    {{-- <section style="height: 100vh">

        </section --}}
