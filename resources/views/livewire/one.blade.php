<div>
    Route HOME

    <br />
    <a href="{{ route('two') }}" wire:navigate>Go to route TWO (same layout) with wire:navigate</a>
    <br />
    <button type="button" wire:click="redirectTwo">Go to route TWO (same layout) with redirect</button>
    <br />
    <button type="button" wire:click="redirectTwoNavigate">Go to route TWO (same layout) with redirect with navigate</button>
    <br />
    <button type="button" wire:click="redirectRouteTwo">Go to route TWO (same layout) with redirectRoute</button>

    <hr />

    <br />
    <a href="{{ route('three') }}" wire:navigate>Go to route THREE (diff layout) with wire:navigate</a>
    <br />
    <button type="button" wire:click="redirectThree">Go to route THREE (diff layout) with redirect</button>
    <br />
    <button type="button" wire:click="redirectThreeNavigate">Go to route THREE (diff layout) with redirect with navigate</button>
    <br />
    <button type="button" wire:click="redirectRouteThree">Go to route THREE (diff layout) with redirectRoute</button>
</div>
