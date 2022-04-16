<?php

namespace App\Http\Livewire\Admin;

use App\Models\Setting;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class UploadSettings extends Component
{
    public $active_project;
    public $active_idea;

    public function render()
    {
        $this->active_project = Setting::where('name', 'project_upload')->first()->value;
        $this->active_idea = Setting::where('name', 'idea_upload')->first()->value;
        Log::info($this->active_idea);
        return view('livewire.admin.upload-settings');
    }

    public function disableProject()
    {
        Setting::where('name', 'project_upload')->update(["value" => 0]);
    }

    public function enableProject()
    {
        Setting::where('name', 'project_upload')->update(["value" => 1]);
    }

    public function disableIdea()
    {
        Setting::where('name', 'idea_upload')->update(["value" => 0]);
    }

    public function enableIdea()
    {
        Setting::where('name', 'idea_upload')->update(["value" => 1]);
    }
}
