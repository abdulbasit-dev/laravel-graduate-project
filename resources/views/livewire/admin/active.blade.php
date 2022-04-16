<div>
    {{ $active?"yes":"no" }}
    <fieldset>
        <legend class="h6">Radios</legend>
        <div class="form-check">
            <input class="form-check-input" type="radio" wire:model='active' id="exampleRadios1"
                value="1" checked>
            <label class="form-check-label" for="exampleRadios1">
                Activate Upload Project
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" wire:model='active' id="exampleRadios2"
                value="0">
            <label class="form-check-label" for="exampleRadios2">
                Disable Upload Project
            </label>
        </div>
        <!-- End of Radio -->
    </fieldset>
</div>