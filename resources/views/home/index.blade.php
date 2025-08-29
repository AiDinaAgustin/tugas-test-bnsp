<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('components.navbar')

    <div class="container">
        <h1>Welcome to Our Website</h1>
        <p>This is the home page where you can find the latest updates and information.</p>

        <h2>Latest News</h2>
        <ul>
            @foreach($news as $item)
                <li>
                    <h3>{{ $item->title }}</h3>
                    <p>{{ Str::limit($item->content, 100) }}</p>
                    <a href="{{ route('news', $item->id) }}">Read more</a>
                </li>
            @endforeach
        </ul>

        <h2>Upcoming Activities</h2>
        <ul>
            @foreach($activities as $activity)
                <li>
                    <h3>{{ $activity->title }}</h3>
                    <p>Date: {{ $activity->date->format('F j, Y') }}</p>
                    <a href="{{ route('activities', $activity->id) }}">View details</a>
                </li>
            @endforeach
        </ul>
    </div>

    @include('components.footer')
</body>
</html>
