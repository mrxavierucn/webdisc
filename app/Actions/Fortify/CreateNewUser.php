<?php

namespace App\Actions\Fortify;

use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use App\Mail\Bienvenido;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'rut' => ['required', 'string', 'max:255'],
            'rol' => ['required', 'string', 'max:255'],
            'email' => ['required','string','email','max:255',Rule::unique(User::class),],
            'password' => $this->passwordRules(),
        ])->validate();

        $userreg = User::create([
            'name' => $input['name'],
            'rut' => $input['rut'],
            'rol' => $input['rol'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        $email = $input['email'];

        $data = ([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => $input['password'],
        ]);

        Mail::to($email)->send(new Bienvenido($data));

        $userreg->save();

        return $userreg;
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
    // protected function createTeam(User $user)
    // {
    //     $user->ownedTeams()->save(Team::forceCreate([
    //         'user_id' => $user->id,
    //         'name' => explode(' ', $user->name, 2)[0]."'s Team",
    //         'personal_team' => true,
    //     ]));
    // }
    /**
    * Get the error messages for the defined validation rules.
    *
    * @return array
    */
    public function messages()
    {
        return [
            'name.required' => 'Ingrese el nombre',
            'rut.required' => 'Ingrese el rut',
            'rol.required' => 'Elija el rol',
            'email.required' => 'Ingrese el email',
            'email.unique' => 'Este email ya existe',

        ];
    }
}
