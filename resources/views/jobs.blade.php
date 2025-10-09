<x-layout>
<x-slot:heading>
    banen pagina
  </x-slot:heading>
<ul>
@foreach ($jobs as $jobs)
<li><a href="/jobs/{{ $jobs['id'] }}">
  {{$jobs ['title']}} krijgt {{ $jobs['salaris'] }} per jaar </li></a>
@endforeach
</ul>
</x-layout>