<!-- resources/views/musics/create.blade.php -->
<form action="{{ route('musics.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" id="title" required><br>

    <label for="artist">Artist</label>
    <input type="text" name="artist" id="artist" required><br>

    <label for="file_path">Music File</label>
    <input type="file" name="file_path" id="file_path" required><br>

    <label for="cover_image">Cover Image</label>
    <input type="file" name="cover_image" id="cover_image"><br>

    <label for="description">Description</label>
    <textarea name="description" id="description"></textarea><br>

    <button type="submit">Submit</button>
</form>
