<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{

    public function departments()
    {
        return view('threads.departments');
    }

    public function department($department)
    {
        $collegelogo = '';
        $courses = [];
        $quote = '';

        switch ($department) {
            case 'ccs':
                $courses = ['BSIT', 'BSCS'];
                $collegelogo = 'ccslogo.png';
                $quote = '"In the realm of circuits and code, the CCS department cultivates
                the architects of tomorrow\'s digital world, where innovation
                thrives and technology transforms lives."';
                break;
            case 'coc':
                $courses = ['BSCRIM'];
                $collegelogo = 'coclogo.png';
                $quote = '"In the pursuit of justice, the COC Criminology department
                illuminates the shadows of society, training vigilant minds to
                decipher the enigmas of crime, and safeguard the pillars of peace
                and equity."';
                break;
            case 'coe':
                $courses = ['BSCE', 'BSEE', 'BSME', 'BSELE', 'BSCME'];
                $collegelogo = 'coelogo.png';
                $quote = '"In the forge of innovation, the College of Engineering hammers
                dreams into reality, where creativity meets precision, and
                intellect fuels progress. Here, we sculpt the future, one
                blueprint at a time, building bridges to tomorrow\'s
                possibilities."';
                break;
            case 'cas':
                $courses = ['BAEL', 'BAPS', 'BAF'];
                $collegelogo = 'caslogo.png';
                $quote = '"In the canvas of exploration, the College of Arts and Sciences
                paints the panorama of knowledge, blending hues of inquiry and
                shades of discovery, crafting visionaries who shape the world with
                creativity and intellect."';
                break;
            case 'ced':
                $courses = ['BEED'];
                $collegelogo = 'coedlogo.png';
                $quote = '"In the heart of learning\'s crucible, the College of Education
                kindles the flames of enlightenment, nurturing minds that will
                sculpt the future of generations, where each lesson is a beacon,
                illuminating pathways to knowledge and empowerment."';
                break;
            case 'cba':
                $courses = ['BSBA'];
                $collegelogo = 'cbalogo.png';
                $quote = '"Money is power - Muhammed gandhi Bonaparte"';
                break;
            default:
                break;
        }

        $threads = Thread::whereHas('user', function ($query) use ($courses) {
            $query->whereIn('course', $courses);
        })->orderBy('created_at', 'DESC')->paginate(2);

        return view('threads.department', [
            'threads' => $threads,
            'department' => $department,
            'collegelogo' => $collegelogo,
            'quote' => $quote,
        ]);
    }


    public function search(Request $request)
    {
        $course = $request->query('course');


        if ($course) {

            $threadsQuery = Thread::whereHas('user', function ($query) use ($course) {
                $query->where('course', $course);
            })->orderBy('created_at', 'DESC');
        } else {

            $threadsQuery = Thread::orderBy('created_at', 'DESC');
        }

        $threads = $threadsQuery->paginate(6);

        return view('threads.advanced', compact('threads'));
    }

    public function show(Thread $thread)
    {

        $college = '';
        $collegelogo = '';

        switch ($thread->user->course) {
            case 'BSCS':
            case 'BSIT':
                $college = 'College of Computer Studies';
                $collegelogo = 'ccslogo.png';
                break;
            case 'BSCRIM':
                $college = 'College of Criminology';
                $collegelogo = 'coclogo.png';
                break;
            case 'BSCE':
            case 'BSEE':
            case 'BSME':
            case 'BSELE':
            case 'BSCME':
                $college = 'College of Engineering';
                $collegelogo = 'coelogo.png';
                break;
            case 'BAEL':
            case 'BAPS':
            case 'BAF':
                $college = 'College of Arts and Sciences';
                $collegelogo = 'caslogo.png';
                break;
            case 'BSBA':
                $college = 'College of Business Administration';
                $collegelogo = 'cbalogo.png';
                break;
            case 'BEED':
                $college = 'College of Education';
                $collegelogo = 'coed.png';
                break;
            default:
                break;
        }


        return view('threads.show', [
            'thread' => $thread,
            'college' => $college,
            'collegelogo' => $collegelogo,
        ]);
    }

    public function create()
    {
        return view('threads.create');
    }

    public function store()
    {

        $validated = request()->validate([
            'title' => 'required|min:5|max:30',
            'content' => 'required|min:5|max:240',
        ]);

        $validated['user_id'] = auth()->user()->id;

        Thread::create($validated);

        return redirect()->route('dashboard')->with('success', 'Created post successfully');
    }

    public function edit(Thread $thread)
    {
        if (auth()->user()->id !== $thread->user_id) {
            abort(404);
        }
        return view('threads.edit', [
            'thread' => $thread
        ]);
    }

    public function update(Thread $thread)
    {
        if (auth()->user()->id !== $thread->user_id) {
            abort(404);
        }
        $validated = request()->validate([
            'title' => 'required|min:5|max:30',
            'content' => 'required|min:5|max:240',
        ]);

        $thread->update($validated);

        return redirect()->route('threads.show', $thread->id)->with('success', "Thread updated successfully");
    }


    public function destroy(Thread $thread)
    {
        if (auth()->user()->id !== $thread->user_id) {
            abort(404);
        }
        $thread->delete(); // dapat parehas dadto sa route nimo Route::get('/threads/{thread}' kanang sulod sa {}
        return redirect()->route('dashboard')->with('success', 'Deleted post successfully');
    }
}
