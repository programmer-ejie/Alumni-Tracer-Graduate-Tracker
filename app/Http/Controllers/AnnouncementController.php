<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Notification;
use App\Models\AlumniInfo;


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

            $alumniList = AlumniInfo::all();
                foreach ($alumniList as $alumni) {
                    Notification::create([
                        'user_id' => $alumni->id,
                        'user_type' => 'alumni',
                        'type' => 'new_announcement',
                        'message' => "A new announcement \"{$validated['title']}\" has been posted.",
                    ]);
                }
            
                 Notification::create([
                    'user_id' => $adminId,
                    'user_type' => 'admin',
                    'type' => 'announcement_posted',
                    'message' => "You have posted a new announcement: \"{$validated['title']}\".",
                ]);

            return redirect()->back()->with('success', 'Announcement posted!');
        }

        public function destroy(Request $request){
            $announcement = Announcement::find($request->announcement_id);
            if ($announcement) {
                $title = $announcement->title;
                $announcement->delete();

                 $alumniList = AlumniInfo::all();
                    foreach ($alumniList as $alumni) {
                        Notification::create([
                            'user_id' => $alumni->id,
                            'user_type' => 'alumni',
                            'type' => 'announcement_deleted',
                            'message' => "The announcement \"{$title}\" has been deleted.",
                        ]);
                    }

                     $adminId = session('admin_id');
                        Notification::create([
                            'user_id' => $adminId,
                            'user_type' => 'admin',
                            'type' => 'announcement_deleted',
                            'message' => "You have deleted the announcement: \"{$title}\".",
                        ]);
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

             $alumniList = AlumniInfo::all();
                foreach ($alumniList as $alumni) {
                    Notification::create([
                        'user_id' => $alumni->id,
                        'user_type' => 'alumni',
                        'type' => 'announcement_updated',
                        'message' => "The announcement \"{$validated['title']}\" has been updated.",
                    ]);
                }

             $adminId = session('admin_id');
                Notification::create([
                    'user_id' => $adminId,
                    'user_type' => 'admin',
                    'type' => 'announcement_updated',
                    'message' => "You have updated the announcement: \"{$validated['title']}\".",
                ]);

            return redirect()->back()->with('success', 'Announcement updated successfully!');
         }

    
}
