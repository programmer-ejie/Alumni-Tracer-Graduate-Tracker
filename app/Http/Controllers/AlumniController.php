<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlumniInfo;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\AlumniSurvey;

class AlumniController extends Controller
{
    function gotoAlumni()
    {
        return view('alumni_gmail');
    }

   function gotoDashboard()
        {
            $alumni = $this->getAuthenticatedAlumni();
            if (!$alumni) {   
                return redirect()->route('login')->with('error', 'Please log in first.');
            } 
            return view('alumni_folder.dashboard')->with('alumni', $alumni);
        }

    function gotoProfile()
    {
        $alumni = $this->getAuthenticatedAlumni();
            if (!$alumni) {   
                return redirect()->route('login')->with('error', 'Please log in first.');
            } 
            return view('alumni_folder.profile')->with('alumni', $alumni);; 
    }
    function gotoAnnouncements()
    {
         $alumni = $this->getAuthenticatedAlumni();
            if (!$alumni) {   
                return redirect()->route('login')->with('error', 'Please log in first.');
            } 
            return view('alumni_folder.announcements')->with('alumni', $alumni);
         
    }
    function gotoSurvey()
    {
       $alumni = $this->getAuthenticatedAlumni();
            if (!$alumni) {   
                return redirect()->route('login')->with('error', 'Please log in first.');
            } 
             $survey = AlumniSurvey::where('alumni_id', $alumni->id)->first();
                return view('alumni_folder.survey')->with(['alumni' => $alumni, 'survey' => $survey]);
    }
    function gotoNotifications()
    {
        return view('alumni_folder.notifications');
    }
    function gotoEvents()
    {
        return view('alumni_folder.events');
    }
    function gotoHome()
    {
        return view('index');
    }

     private function getAuthenticatedAlumni(){
        if (!session()->has('alumni_logged_in') || !session('alumni_id')) {
                return null;
        }

        return AlumniInfo::find(session('alumni_id'));
    }

     

     public function updateProfile(Request $request){
          $alumni = $this->getAuthenticatedAlumni();

           $data = $request->validate([
                    'fullname' => 'required|string|max:255',
                    'email' => 'required|email',
                    'school_graduated' => 'nullable|string|max:255',
                    'batch' => 'nullable|string|max:50',
                    'age' => 'nullable|integer|min:0',
                    'phone' => 'nullable|string',
                    'gender' => 'nullable|string',
                    'address' => 'nullable|string',
                    'github' => 'nullable|string',
                    'twitter' => 'nullable|string',
                    'instagram' => 'nullable|string',
                    'facebook' => 'nullable|string',
                    'profile_pic' => 'nullable|image|max:10240',
                ]);

            // Handle profile picture upload
            if ($request->hasFile('profile_pic')) {
                $file = $request->file('profile_pic');
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $file->move(public_path('images'), $filename);
                $data['profile_pic'] = $filename;
            }

            $alumni->update($data);

            return redirect()->back()->with('success', 'Profile updated successfully!');
        }

         public function deleteAccount(Request $request){
            $alumni = $this->getAuthenticatedAlumni();
            if ($alumni) {
                $alumni->delete();
                session()->flush();
                return redirect('/')->with('success', 'Account deleted successfully.');
            }
            return redirect()->back()->with('error', 'Account not found.');
        }

        public function submitSurvey(Request $request)
            {
                $alumni = $this->getAuthenticatedAlumni();
                if (!$alumni) {
                    return redirect()->route('login')->with('error', 'Please log in first.');
                }

             
                $data = [
                    'alumni_id' => $alumni->id,
                    'q1' => $request->input('employmentStatus'),
                    'q2' => $request->input('jobTitle') === 'Other' ? $request->input('jobTitleOther') : $request->input('jobTitle'),
                    'q3' => $request->input('industry') === 'Other' ? $request->input('industryOther') : $request->input('industry'),
                    'q4' => $request->input('jobDuration'),
                    'q5' => $request->input('careerChange') === 'Yes' ? $request->input('careerReason') : $request->input('careerChange'),
                    'q6' => $request->input('satisfaction'),
                    'q7' => $request->input('workforcePrep'),
                    'q8' => $request->input('beneficialSkill') === 'Other' ? $request->input('skillOtherInput') : $request->input('beneficialSkill'),
                    'q9' => $request->input('handsOnExperience') === 'Other' ? $request->input('handsOnOtherInput') : $request->input('handsOnExperience'),
                    'q10' => $request->input('facultySupport'),
                    'q11' => $request->input('preparedness') === 'No' ? $request->input('improvementArea') : $request->input('preparedness'),
                    'q12' => $request->input('resourceRating'),
                    'q13' => $request->input('jobSearchDuration'),
                    'q14' => $request->input('jobChallenges'),
                    'q15' => $request->input('relatedPosition') === 'No' ? $request->input('differentFieldReason') : $request->input('relatedPosition'),
                    'q16' => $request->input('jobConfidence'),
                    'q17' => $request->input('degreeAdvantage') === 'Other' ? $request->input('otherDegreeAdvantage') : $request->input('degreeAdvantage'),
                   'q18' => $request->input('extracurricularGrowth') === 'Other' ? $request->input('extracurricularGrowthOther') : $request->input('extracurricularGrowth'),
                    'q19' => $request->input('jobMarketOpinion'),
                    'q20' => $request->input('careerSupport'),
                    'q21' => $request->input('careerAdvancementSupport'),
                    'q22' => $request->input('professionalDevelopmentFrequency'),
                    'q23' => $request->input('careerChangeEvolution'),
                    'q24' => $request->input('startingSalary'),
                    'q25' => $request->input('salarySatisfaction') === 'No' ? $request->input('salaryChanges') : $request->input('salarySatisfaction'),
                    'q26' => $request->input('degreeEarningPotential'),
                    'q27' => $request->input('alumniInvolvement') === 'Yes' ? $request->input('alumniValue') : $request->input('alumniInvolvement'),
                    'q28' => $request->input('willingToMentor'),
                    'q29' => $request->input('alumniEngagement') === 'Other' ? $request->input('otherAlumniEngagementInput') : $request->input('alumniEngagement'),
                    'q30' => $request->input('alumniSupport') === 'Other' ? $request->input('otherAlumniSupport') : $request->input('alumniSupport'),
                    'q31' => $request->input('alumniCommunity') === 'Other' ? $request->input('otherAlumniCommunity') : $request->input('alumniCommunity'),
                    'q32' => $request->input('contributeSupport'),
                    'q33' => $request->input('futureParticipation'),
                    'q34' => $request->input('alumniEvents') === 'Other' ? $request->input('otherEventText') : $request->input('alumniEvents'),
                    'q35' => $request->input('alumniTies') === 'Other' ? $request->input('otherTiesText') : $request->input('alumniTies'),
                    'q36' => $request->input('bsitImprovements') === 'Other' ? $request->input('bsitImprovementsOther') : $request->input('bsitImprovements'),
                    'q37' => $request->input('bsitAdvice') === 'Other' ? $request->input('bsitAdviceOther') : $request->input('bsitAdvice'),
                    'q38' => $request->input('preparationWish') === 'Other' ? $request->input('preparationWishOther') : $request->input('preparationWish'),
                    'q39' => $request->input('alumniProgramImprovement') === 'Other' ? $request->input('alumniProgramOther') : $request->input('alumniProgramImprovement'),
                    'q40' => $request->input('feedbackImprovement') === 'Other' ? $request->input('feedbackOther') : $request->input('feedbackImprovement'),
                ];

                AlumniSurvey::updateOrCreate(
                    ['alumni_id' => $alumni->id],
                    $data
                );

                return redirect()->back()->with('success', 'Survey submitted successfully!');
            }

    

}
