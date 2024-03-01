
@props(['justify'])
<div class="self-end flex {{$justify?? ''}}">
    <div class="flex items-center gap-1 ">
        <a href="{{route('switch_lang', ['lang'=>'en'])}}"> 
              
            <button class="px-4 py-3 rounded-xl {{App::isLocale('en') ? 'bg-gray-100' : ''}}">English</button>
        </a> 
        <a href="{{route('switch_lang', ['lang'=>'ka'])}}">   
            <button class="px-4 py-3 rounded-xl {{App::isLocale('ka') ? 'bg-gray-100' : ''}}">ქართული</button>
        </a>
    </div>

</div>
