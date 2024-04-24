<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventUser;
use App\Models\Event; // Import model Event

class EventRegistrationController extends Controller
{
    public function register(Request $request, $eventId)
    {
        $userId = auth()->user()->id;

        // Cek apakah user sudah terdaftar pada event ini sebelumnya
        $existingRegistration = EventUser::where('event_id', $eventId)
            ->where('user_id', $userId)
            ->exists();

        // Jika user sudah terdaftar pada event ini, kembalikan dengan pesan error
        if ($existingRegistration) {
            return redirect()->route('event.detail', $eventId)->with('error', 'Anda sudah terdaftar pada event ini.');
        }

        // Jika tidak, buat entri baru di tabel EventUser
        $eventUser = new EventUser();
        $eventUser->event_id = $eventId;
        $eventUser->user_id = $userId;
        $eventUser->is_paid = false;
        $eventUser->save();

        // Redirect ke halaman detail event dengan menyertakan ID acara sebagai parameter
        return redirect()->route('event.detail', $eventId)->with('success', 'Anda berhasil mendaftar pada event. Silahkan lakukan pembayaran sesuai harga yang tertera pada informasi event. ke nomor Rekening BCA 1234567890. Lakukan konfirmasi pembayaran melalui pesan whatsapp ke nomor 081234567890. Terimakasih.');
    }
}
