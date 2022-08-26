<?php

namespace App\Http\Controllers\Web\Profile\Links\Template;

use App\Http\Controllers\Controller;
use App\Models\ProjectCategory;
use App\Models\Template;
use Illuminate\Contracts\Auth\Authenticatable;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function try($id)
    {
        $template = Template::findOrFail($id);
        // $categories = ProjectCategory::where('profile_id', $id);

        return view("template.{$template->blade}", [
            'template' => $template,
            'profile' => auth()->user()->profile
        ]);
    }

    public function add()
    {
        return view('profile.add_template');
    }

    public function portfolio(Authenticatable $user) {
        $template = Template::findOrFail($user->profile->template_id);

        return view("template.{$template->blade}", [
            'template' => $template,
            'profile' => auth()->user()->profile
        ]);
    }
}
