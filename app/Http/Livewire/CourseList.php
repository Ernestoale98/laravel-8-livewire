<?php

namespace App\Http\Livewire;

use App\Models\Course;
use Livewire\Component;

class CourseList extends Component
{
    public function render()
    {
        $data = [
            'courses' => Course::latest()->with('user')->take(10)->get(),
            'auth_user_name' => auth()->user()->name,
            'auth_courses' => Course::where('user_id', auth()->id())->get()
        ];
        return view('livewire.course-list', $data);
    }
}
