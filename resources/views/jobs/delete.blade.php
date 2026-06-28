<x-layout :title="$title">



    <h1>{{$job->title}}</h1>
    <h3>{{$job->description}}</h3>
    <h5>{{$job->publisher}}</h5>
<form action="/delete/{{$job->id}}" method="GET">
    <br>
<button class="border-4 border-red-500 p-2 rounded-xl  m-1" type="submit">Delete Job</button>
</form>


</x-layout>
