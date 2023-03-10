<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Http\Resources\BlogResource;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $blogs = Blog::query()->with('tags')->when(request()->get('tag'), function ($query) {
            $query->whereRelation('tags', 'slug', request()->get('tag'));
        });
        if (request()->get('tag') != null) {
            return BlogResource::collection($blogs->paginate(6));
        } else {
            return BlogResource::collection($blogs->paginate(9));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreBlogRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Blog $blog
     * @return BlogResource
     */
    public function show(string $blog)
    {
        $blogg=Blog::query()->where('slug->'.app()->getLocale(),$blog)->first();
        if(is_null($blogg))
        {
            return response()->json(['message' => 'Not Found!'], 404);
        }
        else{
            return new BlogResource($blogg->load(['tags', 'seo']));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateBlogRequest $request
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Blog $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
