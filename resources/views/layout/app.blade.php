<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
            </div>
            <div class="nav">
                <ul>
                    @foreach ($nav as $item)
                        <li>
                            <a href="{{ $item['link'] }}">{{ $item['tag'] }}</a>
                        </li> 
                    @endforeach     
                    <li>
                        <input type="text">    
                    </li>               
                </ul>
            </div>
        </div>
    </header>
    <main>
        <div class="bg">
            <div class="container">
                <div class="tag position">
                    CURRENT SERIES
                </div>
                <div class="cards pt-5">
                    @foreach ($comics as $comic)
                        <div class="card">
                            <div class="img"><img src="{{ $comic['thumb'] }}"alt="..."></div>
                            <h3>{{ $comic['title'] }}</h3>
                        </div>
                    @endforeach
                </div>
                <div class="tag load">LOAD MORE</div>
            </div>
        </div>
    </main>
    <footer>
        <section id="displayer">
            <div class="bg">
                <div class="nav container">
                    <ul>
                        @foreach ($displays as $display)
                            <li>
                                <a href="{{ $display['link'] }}">
                                    <div class="img">
                                        <img src="{{ Vite::asset($display['img']) }}" alt="">
                                    </div>
                                    <div>
                                        {{ $display['tag'] }}
                                    </div>
                                </a>
                            </li>
                        @endforeach                      
                    </ul>
                </div>
            </div>
        </section>
        <section id="nav">
            <div class="bg">
                <div class="container">
                    <div>
                        <h2>DC COMICS</h2>
                        <ul>
                            @foreach ($dclist as $item)
                                <li>
                                    <a href="{{$item['link']}}">{{ $item['tag'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <h2>SHOP</h2>
                        <ul>
                            @foreach ($shoplist as $item)
                            <li>
                                <a href="{{$item['link']}}">{{ $item['tag'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h2>DC</h2>                           
                        <ul>
                            @foreach ($nav as $item)
                                <li>
                                    <a href="{{$item['link']}}">{{ $item['tag'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h2>SITES</h2>
                        <ul>
                            @foreach ($dclist as $item)
                                <li>
                                    <a href="{{$item['link']}}">{{ $item['tag'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section id="contacts">
            <div class="bg">
                <div class="container">
                    <div class="btn">
                        SING-UP NOW!
                    </div>
                    <div class="nav">
                        <div>FOLLOW US</div>
                        <ul>
                            @foreach ($contacts as $contact)
                                <li>
                                    <a href="{{$contact['link']}}"><img src="{{ Vite::asset($contact['img']) }}" alt="{{$contact['name']}}"></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</body>
</html>