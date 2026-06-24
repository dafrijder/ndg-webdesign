<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->get();

        return view('main.blog', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function adminIndex()
    {
        $blogs = Blog::latest()->paginate(10);

        return view('admin.blog.index', compact('blogs'));
    }

    public function adminShow(Blog $blog)
    {
        return view('admin.blog.show', compact('blog'));
    }

    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $blog = Blog::create([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        // Discord notificatie
        $this->notification($blog);

        return redirect()->back()->with('success', 'Blog geplaatst!');
    }

    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $blog->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('admin.blog.index')->with('success', 'Blog succesvol bijgewerkt.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blog.index')->with('success', 'Blog verwijderd.');
    }

    private function notification(Blog $blog)
    {
        Http::post('https://discord.com/api/webhooks/1466060930298417319/dwp_dUaoBEVfGonX6C26D-r1qe27ytcUGUt5DUZWPZXBzSQ2xuZ-ydyXpZF0wmcfNMx5', [
            'content' => "@everyone New blog!",
            'embeds' => [
                [
                    'title' => $blog->title,
                    'description' => $blog->content,
                    'color' => 7506394,
                ]
            ],
        ]);
    }
}
