<?php

namespace App\Http\Controllers;

use App\Models\Beverage;
use App\Models\User;

class UserController extends Controller
{
    public function drink(User $user, Beverage $beverage)
    {
        try {
            $user->beverages()->attach($beverage->id);
            return response()->json(['status' => 'success', 'message' => 'User drank their beverage!']);
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()]);
        }
    }

    public function consumedBeverages(User $user)
    {
        return [
            'beverages' => $user->beverages,
            'caffeine_level' => $user->beverages()->sum('caffeine_level')
        ];
    }

    public function reset(User $user)
    {
        $user->reset();
    }
}
