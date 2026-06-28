<x-layout title="{{ $title }}">
    <button>
        <a class="border-3 border-indigo-500 p-2 m-1 rounded-xl" href="/jobs/create">Add a Job</a>
    </button>
    <br><br>
    @foreach ($jobs as $job)
        @if ($job->published  )
            <p>{{ $job->title }}</p>
            @foreach ($job->tags as $tag)
                <span class="border  border-indigo-500 p-1 mr-1 rounded-xl mt-2 mb-2">{{ $tag->title }} </span>
            @endforeach
            <br>
            <h5>{{ $job->description }}</h5>
            {{-- <h4>{{$job->published}}</h4> --}}
            <p>By: {{ $job->publisher }}</p>
            <br>
            <a class="border-3 border-green-500 p-2 m-1 rounded-xl" href="/jobs/comments/{{ $job->id }}">Read
                Comments</a>
            <a class="border-3 border-yellow-500 p-2 m-1 rounded-xl" href="/comment/{{ $job->id }}">Comment</a>
            <a class="border-3 border-indigo-500 p-2 m-1 rounded-xl" href="/job/edit/{{ $job->id }}">Edit Job</a>
            <a class="border-3 border-red-500 p-2 m-1 rounded-xl" href="/job/delete/{{ $job->id }}">Delete Job</a>
        @endif
        <br><br>
    @endforeach

    {{$jobs->links()}}

</x-layout>
