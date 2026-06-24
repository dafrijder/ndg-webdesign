<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Project;
use App\Models\User;
use Illuminate\View\View;

class AdminDashboardController extends Controller
{
    public function index(): View
    {
        $totalUsers = User::count();
        $totalAdmins = User::where('role', 'admin')->count();
        $totalClients = User::where('role', 'client')->count();
        $verifiedUsers = User::whereNotNull('email_verified_at')->count();

        $totalProjects = Project::count();
        $projectCompleted = Project::where('status', 'completed')->count();
        $projectInProgress = Project::where('status', 'in_progress')->count();
        $projectNotStarted = Project::where('status', 'not_started')->count();

        $totalBlogs = Blog::count();

        $recentUsers = User::latest()->take(5)->get();
        $recentProjects = Project::latest()->take(5)->get();
        $recentBlogs = Blog::latest()->take(5)->get();

        $latestProject = Project::latest()->first();
        $latestBlog = Blog::latest()->first();

        return view('admin.dashboard', compact(
            'totalUsers',
            'totalAdmins',
            'totalClients',
            'verifiedUsers',
            'totalProjects',
            'projectCompleted',
            'projectInProgress',
            'projectNotStarted',
            'totalBlogs',
            'recentUsers',
            'recentProjects',
            'recentBlogs',
            'latestProject',
            'latestBlog'
        ));
    }
}
