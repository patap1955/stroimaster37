<ul class="cat">
    @foreach($services as $service)
        <li>
            <a href="{{ route('page.service', ['service' => $service->slug]) }}">{{ $service->title }}</a>
        </li>
    @endforeach
</ul>
