<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{

    public function index()
    {
        $topic_details = Topic::all();
        return view('manager.topics', ['topicsDetails' => $topic_details]);
    }


    public function create()
    {
        return view('manager.addTopic');
    }

    public function store(Request $request)
    {
        $topic_object = new Topic();
        $topic_object->id = $request->topicId;
        $topic_object->title = $request->topicTitle;
        $topic_object->hint = $request->topicHint;
        $topic_object->description = $request->topicDesc;
        $topic_object->keyWords = $request->topicKeyword;

        if ($request->hasfile('topicImage')) {

            $file = $request->file('topicImage');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/topicImages', $fileName);
            $topic_object->image = $fileName;
        } else {
            return $request;
            $topic_object->image = '';
        }

        $topic_object->save();

        return redirect('manager/topics');
    }

    public function edit(Topic $topic)
    {
        return view('manager.topicEdit', ['specific_topic' => Topic::find($topic->id)]);
    }

    public function update(Request $request, Topic $topic)
    {
        $toppic_updated = Topic::find($topic->id);
        $toppic_updated->id = $request->id;
        $toppic_updated->title = $request->title;
        $toppic_updated->hint = $request->hint;
        $toppic_updated->description = $request->description;

        if ($request->hasfile('topicImage')) {

            $file = $request->file('topicImage');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $file->move('images/topicImages', $fileName);
            $toppic_updated->image = $fileName;
        }

        $toppic_updated->save();

        return redirect('/manager/topics');
    }

    public function destroy(Topic $topic)
    {
        $delete_topic = Topic::find($topic->id);
        $delete_topic->delete();
        return redirect('manager/topics');
    }
}
