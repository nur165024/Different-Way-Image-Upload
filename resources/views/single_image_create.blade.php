<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Image Upload</title>
</head>
<body>
    <section>
        <hr>
        <h2>Single Image Upload</h2>
        <hr>
        <form action="{{ route('single_image.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="single_image_title">Single Image Title :</label>
                <input type="text" name="single_image_title" id="single_image_title" value="{{ old('single_image_title') }}">
                @error('single_image_title')
                    <div style="color: brown">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div>
                <label for="single_image">Single Image Upload :</label>
                <input type="file" name="single_image" id="single_image">
                @error('single_image')
                    <div style="color: brown">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <button type="submit">Save</button>
        </form>
    </section>
</body>
</html>
