<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\PostCollection;
use App\Http\Resources\PostResource;
use App\Models\Job;
use App\Models\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index(Request $request)
    {
        $query = Post::limit(2);

        $p['page'] = $request->page;
        $p['per'] = $request->per;
        $p['offset'] = ($request->page - 1) * $request->per;
        if ($p['per'] && $p['page'])
            $query = $query->offset($p['offset'])
                ->limit($p['per']);


        return PostCollection::collection($query->get());
    }


    public function show(Post $post)
    {
        return new PostResource($post);
    }


    public function destroy($id)
    {
        return Post::where('id', $id)->delete();
    }

}
