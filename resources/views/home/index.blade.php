<h1>Pacchetti agenzia viaggi</h1>

@foreach ($travel as $item)

<div><img src="{{ $item->coverImgPath }}"></div>
<div>{{ $item->title }}</div>
<div>{{ $item->content }}</div>
<div>{{ $item->amount }}</div>
    
@endforeach