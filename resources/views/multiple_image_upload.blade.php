<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multile Folder Image Upload</title>
</head>
<body>
<section>
    <hr>
    <h2>Multile Folder Image Upload</h2>
    <hr>
    <form action="{{ route('multiple.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="image_title">Single Image Title :</label>
            <input type="text" name="image_title" id="image_title" value="{{ old('image_title') }}">
            @error('image_title')
                <div style="color: brown">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <label for="image">Single Image Upload :</label>
            <input type="file" name="image" id="image">
            @error('image')
                <div style="color: brown">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button type="submit">Save</button>
    </form>
</section>
</body>
</html>
