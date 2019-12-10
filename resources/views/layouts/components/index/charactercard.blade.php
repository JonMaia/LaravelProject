<div class="row">
    @foreach ($characters as $character)
        <div class="col-sm">
            <div class="card text-center mt-4">
            @component('layouts.components.index.image', compact('character'))                            
            @endcomponent
            @component('layouts.components.index.cardbody', compact('character'))                        
            @endcomponent
            </div>
        </div>
    @endforeach
</div>

<style>
.card {
    width: 18rem;
}
</style>