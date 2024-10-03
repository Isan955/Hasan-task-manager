<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Task; // Pastikan untuk mengimpor model Task
use Illuminate\Support\Facades\Auth;

class CheckTaskOwnership
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $taskId = $request->route('task'); // Mengambil ID Task dari route

        // Ambil Task berdasarkan ID dan periksa kepemilikan
        $task = Task::findOrFail($taskId);

        // Periksa apakah pengguna saat ini adalah pemilik Task
        if ($task->user_id !== Auth::id()) {
            // Jika tidak, tampilkan halaman 403 Forbidden
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
