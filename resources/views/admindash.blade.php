<x-app-layout>

<x-slot name="slot"> 
    <div>
        <h1>Utilisateurs</h1>
    </div>
    <div>
        @include('layouts.table')
        
    </div>   
    <div class="divlink">
    <a   class="link" href="/structure"  > les structures</a>
    </div>       
    </x-slot>
    

    
</x-app-layout>


