<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>
<ul>
    @foreach ($posts as $post)
        <li>
            <strong>{{ $post->title }}</strong>
            <a href="{{ route('posts.show', $post) }}">View</a>
            <a href="{{ route('posts.edit', $post) }}">Edit</a>
            <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </li>
    @endforeach
</ul>
</body>
</html>