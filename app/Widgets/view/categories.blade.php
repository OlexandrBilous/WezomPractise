@if($data)

    <div class="categories">

        @foreach($data as $category)
            <a class="text-danger" href="{{ $category->link() }}">{{ $category->name }}</a>
        @endforeach

    </div>

@endif
