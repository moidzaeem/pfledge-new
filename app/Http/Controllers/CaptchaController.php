<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;  // Add this import
use Intervention\Image\Facades\Image;
class CaptchaController extends Controller
{
    // Method to generate CAPTCHA image
    public function generateCaptcha()
    {
        // Generate a random string for the CAPTCHA
        $captchaString = strtoupper(Str::random(6));  // 6 random uppercase letters

        // Store the CAPTCHA string in the session
        Session::put('captcha', $captchaString);

        // Create an image with the CAPTCHA string
        $img = Image::canvas(150, 50, '#f5f5f5');  // Create a blank image with a light background
        $img->text($captchaString, 75, 25, function ($font) {
            $font->file(public_path('dashboard/MavenPro-Regular.ttf')); // Set the path to your font file
            $font->size(30);
            $font->color('#000000');
            $font->align('center');
            $font->valign('middle');
        });

        // Return the image as a response
        return $img->response('png');
    }


}
