<div class="main py-4">
    <div class="row">
        <div class="col-12 col-xl-12">
            <div class="col-12 px-0">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div>
                            <fieldset>
                                <legend class="h6">Enable/Disable Upload Project</legend>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="project"
                                        wire:click='enableProject' id="exampleRadios1" value="1" 
                                        @if($active_project) checked @endif>
                                    <label class="form-check-label" for="exampleRadios1">
                                        Activate Upload Project
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="project"
                                        wire:click="disableProject" id="exampleRadios2" value="0"
                                        @if (!$active_project) checked @endif>
                                    <label class="form-check-label" for="exampleRadios2">
                                        Disable Upload Project
                                    </label>
                                </div>
                            </fieldset>
                            <hr>
                            <fieldset>
                                <legend class="h6">Enable/Disable Upload Idea</legend>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="idea"
                                        wire:click='enableIdea' id="exampleRadios3" value="1"
                                         @if($active_idea) checked @endif>
                                    <label class="form-check-label" for="exampleRadios3">
                                        Activate Upload Idea
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="idea"
                                        wire:click="disableIdea" id="exampleRadios4" value="0"
                                        @if (!$active_idea) checked @endif>
                                    <label class="form-check-label" for="exampleRadios4">
                                        Disable Upload Idea
                                    </label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>