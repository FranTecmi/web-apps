<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    /**
     * GET /api/users
     * Lista los usuarios (paginados de 15 en 15).
     */
    public function index()
    {
        return User::select('id', 'name', 'email', 'created_at')
            ->orderBy('id')
            ->paginate(15);
    }

    /**
     * POST /api/users
     * Crea un usuario nuevo. Responde 201.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $validated['password'] = Hash::make($validated['password']);

        $user = User::create($validated);

        return response()->json($user, 201);
    }

    /**
     * GET /api/users/{id}
     * Regresa un usuario. Si no existe responde 404.
     */
    public function show(string $id)
    {
        return response()->json(User::findOrFail($id));
    }

    /**
     * PUT/PATCH /api/users/{id}
     * Actualiza un usuario. Con PATCH puedes mandar solo los campos que cambian.
     */
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);

        $validated = $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => [
                'sometimes', 'required', 'string', 'email', 'max:255',
                Rule::unique('users', 'email')->ignore($user->id),
            ],
            'password' => 'sometimes|required|string|min:8|confirmed',
        ]);

        if (isset($validated['password'])) {
            $validated['password'] = Hash::make($validated['password']);
        }

        $user->update($validated);

        return response()->json($user);
    }

    /**
     * DELETE /api/users/{id}
     * Elimina un usuario. Responde 204 (sin contenido).
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        // La tabla orders tiene una llave foránea a users: si el usuario
        // tiene órdenes, borrarlo provocaría un error 500 de la base de datos.
        if ($user->orders()->exists()) {
            return response()->json([
                'message' => 'The user cannot be deleted because it has orders.',
            ], 409);
        }

        $user->delete();

        return response()->json(null, 204);
    }
}
