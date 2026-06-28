<x-layout :title="$title">

    <form action="/job/create" method="GET">
        <label for="title">Job Title</label><br>
        <input class="border-2 border-indigo-500 rounded-md" type="text" id="title" name="title">
        <br>
        <p>Job Tags: </p>
        @foreach ($tags as $tag)
        <label for="{{$tag->title}}">{{$tag->title}} </label>
        <input type="checkbox" name="tags[]" id="{{$tag->title}}" value="{{$tag->id}}">
        @endforeach
        <br>
        <label for="description">Job Description</label><br>
        <textarea class="border-2 border-indigo-500" cols="40" rows="3" id="description" name="description"></textarea>
        <br>
        <label for="publisher">Job Publisher</label><br>
        <input class="border-2 border-indigo-500 rounded-md"  type="text" id="publisher" name="publisher">
        <br>
        <label for="published">Publish job </label>
        <input type="radio" name="published" id="published" value="true">
        <label for="notPublished">Don't publish job </label>
        <input type="radio" name="published" id="notPublished" value="false">
        <br>
        <button class="border-4 border-indigo-500 p-1 rounded-xl m-1" type="submit">Add Job</button>
    </form>

</x-layout>
