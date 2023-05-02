
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
