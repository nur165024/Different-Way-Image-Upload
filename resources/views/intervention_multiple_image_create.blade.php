<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiple Image Upload</title>
</head>
<body>
<section>
    <hr>
    <h2><em>Intervention Multiple Image Upload</em></h2>
    <hr>
    <form action="{{ route('intervention_multiple_image.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="intervention_multiple_image_title">Intervention Multiple Image Title :</label>
            <input type="text" name="intervention_multiple_image_title" id="intervention_multiple_image_title" value="{{ old('intervention_multiple_image_title') }}">
            @error('intervention_multiple_image_title')
            <div style="color: brown">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div>
            <label for="intervention_multiple_image">Intervention Multiple Image Upload :</label>
            <input type="file" name="intervention_multiple_image[]" multiple id="intervention_multiple_image">
            @error('intervention_multiple_image')
            <div style="color: brown">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button type="submit">Save</button>
    </form>
</section>
</body>
</html>
