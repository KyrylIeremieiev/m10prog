<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectHandlerController extends Controller
{
    public function handleFormSubmission(Request $request)
    {
        $operation = $request->input('operation');
        $title = $request->input('title');
        $disc = $request->input('disc');
        $image = $request->input('image');

        switch ($operation) {
            case 'create':
                // Process create logic
                // Redirect to the corresponding route for creation
                return redirect()->route('create.route', ['num' => $num, 'title' => $title, 'disc' => $disc, 'image' => $image]);

            case 'read':
                // Process read logic
                // Redirect to the corresponding route for reading
                return redirect()->route('read.route', ['title' => $title]);

            case 'update':
                // Process update logic
                // Redirect to the corresponding route for updating
                return redirect()->route('update.route', ['num' => $num, 'title' => $title, 'disc' => $disc, 'image' => $image]);

            case 'delete':
                // Process delete logic
                // Redirect to the corresponding route for deletion
                return redirect()->route('delete.route', ['title' => $title]);

            default:
                // Handle invalid operation (optional)
                return redirect()->back()->with('error', 'Invalid operation');
        }
    }

}
