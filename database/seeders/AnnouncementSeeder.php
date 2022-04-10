<?php

namespace Database\Seeders;

use App\Models\Announcement;
use Illuminate\Database\Seeder;

class AnnouncementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Announcement::truncate();
        foreach (range(1, 8) as $item) {
            if ($item == 1) {
                Announcement::create([
                    "title" => "دووهەمین کۆنفڕانسی بەخشینی گرانت بۆ باشترین پڕۆژەی دەرچوون و ئایدیا",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ",
                    'attachment' => "uploads/announcements/docker.pdf",
                    'image' => "uploads/announcements/confrance.jpg",
                ]);
            } else {
                Announcement::create([
                    "title" => $item . " Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
                    "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum tellus
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis finibus metus, vel rutrum telluss ",
                    'attachment' => "uploads/announcements/docker.pdf"
                ]);
            }
        }
    }
}
