<!-- resources/views/home.blade.php -->
<h1>محتواهای سایت</h1>

<h2>موسیقی‌ها</h2>
<ul>
    @foreach($musics as $music)
        <li>{{ $music->title }} - {{ $music->artist }}</li>
    @endforeach
</ul>

<h2>ویدیوها</h2>
<ul>
    @foreach($videos as $video)
        <li>{{ $video->title }} - {{ $video->description }}</li>
    @endforeach
</ul>
