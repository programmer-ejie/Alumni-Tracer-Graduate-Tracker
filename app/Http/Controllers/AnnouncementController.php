<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Announcement;


class AnnouncementController extends Controller
{
        public function store(Request $request){
            $adminId = session('admin_id');
            $validated = $request->validate([
                'title' => 'required|string|max:255',
                'announcement_message' => 'required|string',
                'mention_id' => 'required|integer',
            ]);

            Announcement::create([
                'admin_id' => $adminId,
                'title' => $validated['title'],
                'announcement_message' => $validated['announcement_message'],
                'mention_id' => $validated['mention_id'],
            ]);

            return redirect()->back()->with('success', 'Announcement posted!');
        }

        public function destroy(Request $request){
            $announcement = Announcement::find($request->announcement_id);
            if ($announcement) {
                $announcement->delete();
                return redirect()->back()->with('success', 'Announcement deleted!');
            }
            return redirect()->back()->with('error', 'Announcement not found.');
        }

        public function update(Request $request){
        $validated = $request->validate([
            'announcement_id' => 'required|integer|exists:announcements,id',
            'title' => 'required|string|max:255',
            'announcement_message' => 'required|string',
            'mention_id' => 'required|integer',
        ]);

        $announcement = Announcement::find($validated['announcement_id']);
        $announcement->title = $validated['title'];
        $announcement->announcement_message = $validated['announcement_message'];
        $announcement->mention_id = $validated['mention_id'];
        $announcement->save();

        return redirect()->back()->with('success', 'Announcement updated successfully!');
    }

    
}
