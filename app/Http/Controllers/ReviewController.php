<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Requests\ReviewRequest;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
     
    public function __construct(){

        $this->middleware(('auth'))->except(['index', 'show']);;
    }  

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $reviews = Review::all();
        // Se voglio oridnarle in ordine descrescente di creazione
        $reviews = Review::orderBy('created_at', 'DESC')->get();

        return view('review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReviewRequest $request)
    {
        // dd($request->all());

        $review= Review::create([
            'title'=>$request->title,
            'author'=>$request->author,
            'description'=>$request->description,
            'img'=>$request->file('img')->store('public/img'),
            'user_id'=>Auth::user()->id
        ]);

        return redirect(route('review.index'))->with('message', 'La tua recensione é stata pubblicata');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        return view ('review.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit(Review $review)
    
    {
         return view('review.edit', compact('review'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        $review->title= $request->title;
        $review->author= $request->author;
        $review->description=$request->description;
        $review->img=$request->file('img')->store('public/store');
        // $review-> user_id=Auth::user()->name;
        $review->save();

        return redirect(route('review.show', compact('review')))->with('message', 'La tua recensione é stata modificata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        $review->delete();

        return redirect(route('review.index'))->with('message', 'La tua recensione é stata eliminata');
    }

    public function creator(){

        $reviews = Auth::user()->reviews()->get(); 
        // dd($reviews);

        return view('review.mine', compact('reviews'));
    }
}
