<div>
    <section>
        <h2>Redirects without session regeneration</h2>
        <br />
        <button type="button" wire:click="redirectTwo">Go to route TWO with redirect</button>
        <br />
        <button type="button" wire:click="redirectTwoNavigate">Go to route TWO with redirect with navigate</button>
        <br />
        <button type="button" wire:click="redirectRouteTwo">Go to route TWO with redirectRoute</button>
    </section>

    <hr />

    <section>
        <h2>Redirects WITH session regeneration</h2>
        <br />
        <button type="button" wire:click="redirectTwoWithSession">Go to route TWO with redirect</button>
        <br />
        <button type="button" wire:click="redirectTwoNavigateWithSession">Go to route TWO with redirect with navigate</button>
        <br />
        <button type="button" wire:click="redirectRouteTwoWithSession">Go to route TWO with redirectRoute</button>
    </section>
</div>
