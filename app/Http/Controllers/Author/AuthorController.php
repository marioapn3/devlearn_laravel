<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Http\Resources\DashboardResource;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\UserCourse;
use App\Services\Author\AuthorService;
use Illuminate\Http\Request;


class AuthorController extends Controller
{
    private $authorService;

    function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    function dashboard()
    {
        return view('author.dashboard', [
            'menu' => parent::$menuSidebar,
            'data' => json_decode(json_encode(new DashboardResource($this->authorService->dashboard()))),
        ]);
    }

    function showProfile()
    {
        return view('author.profile.profile',  [
            'menu' => parent::$menuSidebar,

        ]);
    }

    function editProfile()
    {
        return view('author.profile.edit',  [
            'menu' => parent::$menuSidebar,
        ]);
    }

    function updateProfile()
    {
        return request()->pathinfo;
    }
}
