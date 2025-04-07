<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>

<h1>Edit Post</h1>
<form action="{{ route('posts.update', $post) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $post->title }}" required>
    <br>
    <label for="content">Content:</label>
    <textarea name="content" id="content" required>{{ $post->content }}</textarea>
    <br>
    <button type="submit">Update</button>
</form>
<a href="{{ route('posts.index') }}">Cancel</a>


</body>
</html>