<?php

namespace App\Http\Controllers\Api;

use App\Repositories\CommentsRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\Comment as CommentResource;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $commentsRep;

    public function __construct(CommentsRepository $commentsRep)
    {
        $this->commentsRep = $commentsRep;
    }

    public function index()
    {
        $result = false;
        $comments = $this->commentsRep->get();

        if($comments) {
            $result = CommentResource::collection($comments);
        }

        return ($result)? response()->json($result, 200) : response()->json(['success' => 'No data'], 204);

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $result = false;
        if($request->isMethod('post')) {


                /*$data = $request->input();
                $comment = $this->commentsRep;
                $result = $comment->save($data);*/
                return  $request->parent_id;


        }

    }

    /*
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = false;
        $comment = $this->commentsRep->getOne($id);
        if($comment) {
            $result = new CommentResource($comment);
        }

        return ($result)? response()->json($result, 200):response()->json(['error' => 'No this comment'], 400);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = false;
        $comment = $this->commentsRep->getOne($id);
        if($comment) {
            $result = $comment->delete();
        }

        return ($result)? response()->json($result, 200):response()->json(['error' => 'System error'], 400);
    }
}
