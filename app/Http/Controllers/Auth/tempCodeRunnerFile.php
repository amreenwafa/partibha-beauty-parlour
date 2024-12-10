<?php
if($request->user()->usertype === 'admin')
        {
            return redirect('admin/dashboard');
        }
        return redirect()->intended(route('dashboard'));