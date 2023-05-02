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