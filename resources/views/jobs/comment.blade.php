<x-layout :title="$title">

    <h1>Adding a Comment to {{ $job->title }}</h1>
    <br><br>
    <H1>{{ $job->title }}</H1>
    <h3>{{ $job->description }}</h3>
    <p>{{ $job->publisher }}</p><br>

    <form action="/comment" method="GET">

        <label for="author">Your name :</label>
        <input type="text" name="author" id="author">
        <br>
        <label for="comment">Write yor comment :</label><br>
        <textarea name="content" id="comment" cols="30" rows="10"></textarea>
        <input type="hidden" name="jobs_id" value="{{$job->id}}">

        <br>
        <button class="border-4 border-indigo-500 p-1 rounded-xl  m-1" type="submit">Add Comment</button>
    </form>

</x-layout>
