<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     *
     * @param  \Illuminate\Foundation\Auth\EmailVerificationRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function verify(EmailVerificationRequest $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(config('fortify.home'));
        }

        $request->fulfill();

        return redirect()->intended(config('fortify.home'))->with('verified', true);
    }

    /**
     * Display the email verification notice.
     *
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('auth.verify.notice');
    }

    /**
     * Resend the email verification notification.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resend(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('resent', true);
    }
}