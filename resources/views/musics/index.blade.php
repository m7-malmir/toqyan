<!-- resources/views/musics/index.blade.php -->
<h1>موسیقی‌ها</h1>
<ul>
    @foreach($musics as $music)
        <li>{{ $music->title }} - {{ $music->artist }}</li>
    @endforeach
</ul>
