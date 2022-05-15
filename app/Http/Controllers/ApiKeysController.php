<?php

namespace App\Http\Controllers;

use App\Models\ApiKey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class ApiKeysController extends Controller
{
    public static function setupRoutes()
    {
        Route::controller(self::class)->prefix('/api-keys')->group(function () {
            Route::get('/', 'getIndex')->name('api-keys.index');
            Route::any('/generate', 'anyGenerate')->name('api-keys.generate');
            Route::any('/activate/{id}', 'anyActivate')->name('api-keys.activate');
            Route::any('/deactivate/{id}', 'anyDeactivate')->name('api-keys.deactivate');
            Route::any('/delete/{id}', 'anyDelete')->name('api-keys.delete');
        });
    }

    public function getIndex()
    {
        $apiKeys = ApiKey::getByUserId(Auth::user()->id)->get();

        return view('api-keys.index', [
            'apiKeys' => $apiKeys,
        ]);
    }

    public function anyGenerate(Request $request)
    {
        $user = Auth::user();

        $finalKey = null;
        do {
            $userHash = md5($user->id . $user->first_name . $user->last_name);
            $userLeftHash = substr($userHash, 0, 16);
            $userRightHash = substr($userHash, -16);
            $middleHash = sha1(rand(0, 1000000) . $userLeftHash . time() . $userRightHash);

            $candidateKey = $userLeftHash . '-' . $middleHash . '-' . $userRightHash;
            if (ApiKey::where('key', $candidateKey)->count() === 0) {
                $finalKey = $candidateKey;
            }
        } while ($finalKey === null);

        $apiKey = new ApiKey();
        $apiKey->key = $finalKey;
        $apiKey->is_active = true;
        $apiKey->user_id = $user->id;
        $apiKey->save();

        $request->session()->flash('success', 'New API key generated!');
        return redirect()->route('api-keys.index');
    }

    public function anyActivate(Request $request, int $id)
    {
        $invalidMessage = __('API key not found!');

        $apiKey = ApiKey::find($id);
        if (is_null($apiKey)) {
            $request->session()->flash('error', $invalidMessage);
            return redirect()->route('api-keys.index');
        }

        if ($apiKey->user_id !== Auth::user()->id) {
            $request->session()->flash('error', $invalidMessage);
            return redirect()->route('api-keys.index');
        }

        $apiKey->is_active = true;
        $apiKey->save();

        $request->session()->flash('success', 'API key has been activated!');
        return redirect()->route('api-keys.index');
    }

    public function anyDeactivate(Request $request, int $id)
    {
        $invalidMessage = __('API key not found!');

        $apiKey = ApiKey::find($id);
        if (is_null($apiKey)) {
            $request->session()->flash('error', $invalidMessage);
            return redirect()->route('api-keys.index');
        }

        if ($apiKey->user_id !== Auth::user()->id) {
            $request->session()->flash('error', $invalidMessage);
            return redirect()->route('api-keys.index');
        }

        $apiKey->is_active = false;
        $apiKey->save();

        $request->session()->flash('success', 'API key has been deactivated!');
        return redirect()->route('api-keys.index');
    }

    public function anyDelete(Request $request, int $id)
    {
        $invalidMessage = __('API key not found!');

        $apiKey = ApiKey::find($id);
        if (is_null($apiKey)) {
            $request->session()->flash('error', $invalidMessage);
            return redirect()->route('api-keys.index');
        }

        if ($apiKey->user_id !== Auth::user()->id) {
            $request->session()->flash('error', $invalidMessage);
            return redirect()->route('api-keys.index');
        }

        $apiKey->delete();

        $request->session()->flash('success', 'API key has been deactivated!');
        return redirect()->route('api-keys.index');
    }
}
