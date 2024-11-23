<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Credential;
use App\Models\Address;
use App\Models\Validation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class SignupController extends Controller
{
    public function showStep1()
    {
        return view('auth.signup.step1');
    }

    public function handleStep1(Request $request)
    {
        $validated = $request->validate([
            // Primary fields
            'firstname' => 'required|string|max:50',
            'middlename' => 'nullable|string|max:50',
            'lastname' => 'required|string|max:50',
            'extension' => 'nullable|string|max:30',
            'gender' => 'required|string|max:20',
            'birthdate' => 'required|date',
            'birthplace' => 'required|string|max:100',
            'civilstatus' => 'required|string|max:20',
            'religion' => 'nullable|string|max:50',
            'nationality' => 'required|string|max:20',
            'mobilenumber' => 'required|string|max:30',
            'landlinenumber' => 'nullable|string|max:30',

            // Address fields
            'custom-add' => 'required|string|max:100',
            'barangay' => 'required|string|max:50',
            'city' => 'required|string|max:50',
            'province' => 'required|string|max:50',

            'custom-add-current' => 'nullable|string|max:100',
            'barangay-current' => 'nullable|string|max:50',
            'city-current' => 'nullable|string|max:50',
            'province-current' => 'nullable|string|max:50',
        ]);

        // Store validated data in session
        Session::put('signup.step1', $validated);
        Session::save();
        
        return redirect()->route('signup.step2');
    }

    public function showStep2()
    {   
        if (!Session::has('signup.step1')) {
            return redirect()->route('signup')->with('error', 'Please complete step 1 first.');
        }

        $step1Data = Session::get('signup.step1');
        
        // Check if required fields are empty
        $requiredFields = [
            'firstname', 'lastname', 'gender', 'birthdate', 'birthplace', 'civilstatus', 
            'nationality', 'mobilenumber', 'custom-add', 'barangay', 'city', 'province'
        ];

        // Loop through the required fields and check if any are empty
        foreach ($requiredFields as $field) {
            if (empty($step1Data[$field])) {
                return redirect()->route('signup.step1')->with('error', 'Please fill all required fields in Step 1.');
            }
        }

        return view('auth.signup.step2');
    }

    public function handleStep2(Request $request)
    {
        $validated = $request->validate([
            'front-id' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'back-id' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
            'selfie' => 'required|image|mimes:jpeg,png,jpg|max:10240',
            'id-number' => 'required|string|max:50',
        ]);

        // Store uploaded files
        $frontidPath = $request->file('front-id')->store('uploads', 'public');
        $backidPath = $request->hasFile('back-id') 
            ? $request->file('back-id')->store('uploads', 'public') 
            : null;
        $selfiePath = $request->file('selfie')->store('uploads', 'public');

        // Retrieve Step 1 data from session
        $dataStep1 = Session::get('signup.step1');

        // Generate Username and Password
        // Generate Username (without spaces)
        $username = strtolower(str_replace(' ', '', $dataStep1['firstname'])) . '.' . strtolower(str_replace(' ', '', $dataStep1['lastname'])) . '.' . rand(100, 999);

        // Generate Password (without spaces)
        $password = strtolower(str_replace(' ', '', $dataStep1['lastname'])) . '.' . Str::random(6); // Generate 6 random characters

        Session::put('generated_password',$password);
        
        // Create User (save the email provided by the user, but use the generated username and password)
        $user = User::create([
            'email' => $request->email,  // Use the email provided by the user
            'name' => $dataStep1['firstname'] . ' ' . $dataStep1['lastname'],
            'username' => $username,     // Use the generated username
            'password' => bcrypt($password),  // Use the generated password (hashed)
        ]);

        // Create Credential
        $credential = Credential::create([
            'user_id' => $user->id,
            'firstname' => $dataStep1['firstname'],
            'middlename' => $dataStep1['middlename'],
            'lastname' => $dataStep1['lastname'],
            'extension' => $dataStep1['extension'],
            'gender' => $dataStep1['gender'],
            'birthdate' => $dataStep1['birthdate'],
            'birthplace' => $dataStep1['birthplace'],
            'civilstatus' => $dataStep1['civilstatus'],
            'religion' => $dataStep1['religion'],
            'nationality' => $dataStep1['nationality'],
            'mobilenumber' => $dataStep1['mobilenumber'],
            'landlinenumber' => $dataStep1['landlinenumber'],
        ]);

        // Create Address
        Address::create([
            'user_id' => $user->id,
            'custom-add' => $dataStep1['custom-add'],
            'barangay' => $dataStep1['barangay'],
            'city' => $dataStep1['city'],
            'province' => $dataStep1['province'],
        ]);

        // Create Validation
        Validation::create([
            'user_id' => $user->id,
            'front-id' => $frontidPath,
            'back-id' => $backidPath,
            'selfie' => $selfiePath,
            'id-number' => $validated['id-number'],
        ]);

        // Optionally, you can return the generated username and password to the user via session or email
        // Here, I will just add a success message
        return redirect()->route('signup.complete')->with('success', 'Signup successful!');
    }

    public function complete()
    {
    // Check if session data exists
    if (!Session::has('signup.step1')) {
        return redirect()->route('signup')->with('error', 'Please complete the signup process.');
    }

    // Optionally clear session data after completion
    Session::forget('signup');

    return view('auth.signup.complete');
    }

}
