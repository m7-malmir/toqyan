<!-- resources/views/videos/index.blade.php -->
<h1>ویدیو ها</h1>
<ul>
    @foreach($videos as $video)
        <li>{{ $video->title }} - {{ $video->artist }}</li>
    @endforeach
</ul>
