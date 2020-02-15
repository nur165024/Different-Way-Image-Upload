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
    <h2><em>Intervention Single Image Upload</em></h2>
    <hr>
    <form action="{{ route('intervention_single_image.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="intervention_single_image_title">Intervention Single Image Title :</label>
            <input type="text" name="intervention_single_image_title" id="intervention_single_image_title" value="{{ old('intervention_single_image_title') }}">
            @error('intervention_single_image_title')
            <div style="color: brown">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <label for="intervention_single_image">Intervention Single Image Upload :</label>
            <input type="file" name="intervention_single_image" id="intervention_single_image">
            @error('intervention_single_image')
            <div style="color: brown">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button type="submit">Save</button>
    </form>
</section>
</body>
</html>
