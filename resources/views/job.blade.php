<x-layout>
<x-slot:heading>
    job
  </x-slot:heading>
<h1>{{ $job ['title']}}</h1>

<p>
    deze job betaald {{ $job['salaris'] }} per jaar.
</p>

</x-layout>


