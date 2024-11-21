<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Activity;

class HomeController extends Controller
{
    public function index()
    {
        $activity = new Activity;
        $data = $activity->all();
        return view('home');
    }

    public function add()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'activity_name' => 'required|min:4|max:20|alpha:ascii'
        ],[
            'activity_name.required' => 'Harap isi',
            'activity_name.min' => 'activity name min 4 char',
            'activity_name.max' => 'activity name max 20 char'
        ]);

        $activity = new Activity;
        $activity->activity_name = $request->activity_name;
        $activity->save();

        return redirect('/')->with('success', 'Activity added');
    }

    public function show(string $id)
    {
        
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
        $activity = New Activity;
        $data = $activity->find($id);
        $data->delete();
        return redirect('/')->with('success', 'Activity deleted');
    }
}

?>