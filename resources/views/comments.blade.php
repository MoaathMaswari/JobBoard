<x-layout :title="$title">


    <h1>{{ $job->title }}</h1>
    <h3>{{ $job->description }}</h3>
    <p>{{ $job->publisher }}</p><br>

    @foreach ($job->comments as $comment)
        <h1>{{$comment->author}}</h1>
        <p>{{$comment->content}}</p>
        <br>
    @endforeach

    <a class="border-4 border-yellow-500 p-2 m-1 rounded-xl" href="/job/comment/{{$job->id}}">Add Comment</a><br>

</x-layout>
