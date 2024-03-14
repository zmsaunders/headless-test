<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use RickWest\WordPress\Facades\WordPress;

class PageController extends Controller
{
    public function homepage() {
        // render the homepage
        $page = WordPress::pages()->find(2);
        $content = $page['content']['rendered'];
        $title = $page['title']['rendered'];

        return view('page', [
            'title' => $title,
            'content' => $content
        ]);
    }

    public function blog() {
        $posts = WordPress::posts()->get();
        $collection = collect([]);

        foreach($posts['data'] as $post) {

            $postCollection = (object) [
                'title' => $post['title']['rendered'],
                'date' => Carbon::parse($post['date']),
                'slug' => $post['slug']
            ];

            $collection->push($postCollection);
        }

        return view('blog', [
            'posts' => $collection
        ]);
    }

    public function post($slug) {
        $results = WordPress::posts()->slug($slug)->get();

        if (! $results['data']) {
            abort(404);
        }

        $post = $results['data'][0];

        $data = (object) [
            'title' => $post['title']['rendered'],
            'content' => $post['content']['rendered']
        ];

        return view('post', [
            'post' => $data
        ]);
    }
}
