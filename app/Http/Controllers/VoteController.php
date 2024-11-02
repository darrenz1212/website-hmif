<?php

namespace App\Http\Controllers;


use App\Models\Candidates;
use App\Models\Vote;
use App\Models\VoteStats;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function validate()
    {
        $validate = VoteStats::first();
        $candidates = Candidates::all();
        if ($validate && $validate->status == true) {
            return view('vote',[
                'candidates' => $candidates
            ]);
        } else {
            return view('no_vote');
        }
    }

    public function voteStat()
    {
        $voteStatus = VoteStats::first();
        return view('admin.voteStat', compact('voteStatus'));
    }
    private function voteStatControl(Request $request)
    {
        $validate = VoteStats::firstOrCreate([], ['status' => false]);

        $validate->update(['status' => $request->status]);
    }


    public function updateVoteStatus(Request $request)
    {
        $this->voteStatControl($request);

        return redirect()->route('vote.stat')->with('success', 'Status voting berhasil diperbarui');
    }

    public function castVote(Request $request, $id)
    {

        Vote::create([
            'candidate_id' => $id,
        ]);

        return redirect()->back()->with('success', 'Vote berhasil dikirim!');
    }

    public function voteCount()
    {
        $candidates = Candidates::withCount('votes')->orderBy('no_urut')->get();

        return view('admin.voteCount', compact('candidates'));
    }

    public function clearVotes()
    {
        Vote::truncate();

        return redirect()->back()->with('success', 'Semua vote berhasil dihapus.');
    }

}
