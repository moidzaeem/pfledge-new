<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormConfirmation;
use App\Mail\ContactFormThankYou;
use App\Models\BlogCategory;
use App\Models\Blogs;
use App\Models\Marketplace;
use App\Models\MarketplaceCategory;
use App\Models\InnovationCategory;
use App\Models\Innovationen;
use Http;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Session;

class SimpleController extends Controller
{
    public function getAchrichtenNews()
    {
        $xml = simplexml_load_file('https://www.aerztezeitung.de/medizin.rss');
        $news = [];

        if ($xml && $xml->channel && $xml->channel->item) {
            $count = 0;
            foreach ($xml->channel->item as $item) {
                if ($count >= 15) {
                    break; // Stop once we have 15 items
                }
                foreach ($item as $key => $value) {
                    $news[$count][$key] = (string) $value;
                }
                $count++;
            }
        }
        return view('news_ratgeber.arztezeitung', compact('news'));
    }


    public function getNachrichten()
    {
        $xml = simplexml_load_file('https://www.aend.de/rss/medizin');
        $news = [];

        if ($xml && $xml->channel && $xml->channel->item) {
            $count = 0;
            foreach ($xml->channel->item as $item) {
                if ($count >= 14) {
                    break; // Stop once we have 14 items
                }
                foreach ($item as $key => $value) {
                    $news[$count][$key] = (string) $value;
                }
                $count++;
            }
        }

        return view('news_ratgeber.nachrichten-aerztenachichtendienst', compact('news'));
    }


    public function nachrichtenBundesministeriumFuerGesundheit()
    {
        $xml = simplexml_load_file('https://www.bundesgesundheitsministerium.de/meldungen.xml');
        $news = [];

        if ($xml && $xml->channel && $xml->channel->item) {
            $count = 0;
            foreach ($xml->channel->item as $item) {
                if ($count >= 30) {
                    break; // Stop once we have 30 items
                }
                foreach ($item as $key => $value) {
                    $news[$count][$key] = (string) $value;
                }
                $count++;
            }
        }

        return view('news_ratgeber.nachrichten-bundesministerium-fuer-gesundheit', compact('news'));
    }

    public function getWelcomePage()
    {
        $marketplaces = Marketplace::where('home', 'ja')
            ->get()
            ->map(function ($marketplace) {
                // Get category names by ID
                $marketplace->category1_name = $marketplace->category1 ? MarketplaceCategory::find($marketplace->category1)->name : null;
                $marketplace->category2_name = $marketplace->category2 ? MarketplaceCategory::find($marketplace->category2)->name : null;
                $marketplace->category3_name = $marketplace->category3 ? MarketplaceCategory::find($marketplace->category3)->name : null;
                $marketplace->category4_name = $marketplace->category4 ? MarketplaceCategory::find($marketplace->category4)->name : null;

                return $marketplace;
            });


        $blogs = Blogs::where('home', 'ja')
            ->get()
            ->map(function ($blog) {
                // Get category names by ID
                $blog->category1_name = $blog->category1 ? BlogCategory::find($blog->category1)->name : null;
                $blog->category2_name = $blog->category2 ? blogCategory::find($blog->category2)->name : null;
                $blog->category3_name = $blog->category3 ? blogCategory::find($blog->category3)->name : null;
                $blog->category4_name = $blog->category4 ? blogCategory::find($blog->category4)->name : null;

                return $blog;
            });
            
#        $innovationen = Innovationen::where('home', 'ja')
#            ->get()
#            ->map(function ($innovation) {
#                // Get category names by ID
#                $innovation->category1_name = $innovation->category1 ? innovationCategory::find($innovation->category1)->name : null;
#                $innovation->category2_name = $innovation->category2 ? innovationCategory::find($innovation->category2)->name : null;
#                $innovation->category3_name = $innovation->category3 ? innovationCategory::find($innovation->category3)->name : null;
#                $innovation->category4_name = $innovation->category4 ? innovationCategory::find($innovation->category4)->name : null;

 #               return $innovation;
 #           });
            

        //1st News Tab

        $xml = simplexml_load_file('https://www.aerztezeitung.de/medizin.rss');
        $news = [];
        if ($xml && $xml->channel && $xml->channel->item) {
            $count = 0;
            foreach ($xml->channel->item as $item) {
                if ($count >= 3) {
                    break; // Stop once we have 15 items
                }
                foreach ($item as $key => $value) {
                    $news[$count][$key] = (string) $value;
                }
                $count++;
            }
        }
        $count = 0;

        $secondNews = [];

        try {

            $secondXml = simplexml_load_file('https://www.aend.de/rss/medizin');
            if ($secondXml && isset($secondXml->channel->item)) {
                $count = 0; // Initialize count to track the number of added items

                foreach ($secondXml->channel->item as $item) {
                    if ($count >= 3) {
                        break; // Stop once we have 3 items
                    }

                    // Extract the values from each <item>
                    $newsItem = [
                        'title' => (string) $item->title,
                        'description' => (string) $item->description,
                        'link' => (string) $item->link,
                        'pubDate' => (string) $item->pubDate
                    ];

                    // Add the item to the secondNews array
                    $secondNews[] = $newsItem;

                    // Increment the count
                    $count++;
                }

                // You can now use $secondNews as needed
                // For example, you can dump or log it to see the results:
            }

        } catch (\Exception $e) {
            // Handle network or any other exception (like timeout, DNS resolution, etc.)
            return response()->json(['error' => 'Request timed out or network error occurred.'], 500);
        }
        $count = 0;

        $thirdXml = simplexml_load_file('https://www.bundesgesundheitsministerium.de/meldungen.xml');
        $thirdNews = [];

        if ($thirdXml && $thirdXml->channel && $thirdXml->channel->item) {
            $count = 0;
            foreach ($thirdXml->channel->item as $item) {
                if ($count >= 3) {
                    break; // Stop once we have 30 items
                }
                foreach ($item as $key => $value) {
                    $thirdNews[$count][$key] = (string) $value;
                }
                $count++;
            }
        }



        return view('welcome', compact('marketplaces', 'blogs', 'news', 'secondNews', 'thirdNews'));
    }

    public function postContactForm(Request $request)
    {
        // Validate CAPTCHA first
        if ($request->captcha !== Session::get('captcha')) {
            // If CAPTCHA doesn't match, return with error message
            return redirect()->back()->withErrors(['captcha' => 'Ungültiger Code']);
        }

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',            
            'email' => 'required|email|max:255',
            'city' => 'nullable|string|max:100',
            'message' => 'required|string',
        ]);

        // Send a thank you email to the admin or your email
        Mail::to('kontakt@pflegepur.de')->send(new ContactFormThankYou($validatedData));

        // Send a confirmation email to the user
        Mail::to($validatedData['email'])->send(new ContactFormConfirmation($validatedData['name']));

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Ihre Nachricht wurde erfolgreich gesendet!');


    }

}
