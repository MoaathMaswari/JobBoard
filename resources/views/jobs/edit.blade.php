<x-layout :title="$title">



    <form action="/edit/{{$job->id}}" method="GET">
        <label for="title">Job Title</label><br>
        <input type="text" id="title" name="title" value="{{$job->title}}">
        <br><br>
        @foreach ($tags as $tag)
        <label for="{{$tag->title}}">{{$tag->title}} </label>
        <input type="checkbox" name="tags[]" id="{{$tag->title}}" value="{{$tag->id}}" {{in_array($tag->id, $jobTags) ? "checked" : ""}}>
        @endforeach
        <label for="publisher">Job Publisher</label><br>
        <input type="text" id="publisher" name="publisher" value="{{$job->publisher}}">
        <br><br>
        <label for="description">Job Description</label><br>
        <input type="text" id="description" name="description" value="{{$job->description}}">
        <br>
        <label for="published">Publish job </label>
        @if ($job->published == 'true')
            <input  type="radio" name="published" id="published" value="true" checked>
            <label for="notPublished">Don't publish job </label>
            <input type="radio" name="published" id="notPublished" value="false">
            <br>
        @endif
        @if ($job->published == 'false')
            <input  type="radio" name="published" id="published" value="true" >
            <label for="notPublished">Don't publish job </label>
            <input type="radio" name="published" id="notPublished" value="false" checked>
            <br>
        @endif
        <br>
        <button class="border-4 border-indigo-500 p-2 rounded-xl  m-1" type="submit">Edit Job</button>
    </form>

</x-layout>
