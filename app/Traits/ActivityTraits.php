<?php

namespace App\Traits;

use App\Activity;
use carbon\carbon;
use Illuminate\Support\Facades\Auth;

trait ActivityTraits
{
    public function logCreatedActivity($logModel, $changes, $request, $model)
    {
        $user = Auth::user();
        $changes = 'El usuario ' . $user->name . ' registro ' . $model;
        $activity = activity()
            ->causedBy(Auth::user())
            ->performedOn($logModel)
            ->withProperties(['attributes' => $request])
            ->log($changes);
        $lastActivity = Activity::all()->last();

        return true;
    }




    public function logUpdatedActivity($list, $before, $list_changes)
    {
        unset($list_changes['updated_at']);
        $old_keys = [];
        $old_value_array = [];
        if (empty($list_changes)) {
            $changes = 'No attribute changed';
        } else {

            if (count($before) > 0) {

                foreach ($before as $key => $original) {
                    if (array_key_exists($key, $list_changes)) {

                        $old_keys[$key] = $original;
                    }
                }
            }
            $old_value_array = $old_keys;
            $changes = 'Updated with attributes ' . implode(', ', array_keys($old_keys)) . ' with ' . implode(', ', array_values($old_keys)) . ' to ' . implode(', ', array_values($list_changes));
        }

        $properties = [
            'attributes' => $list_changes,
            'old' => $old_value_array
        ];

        $activity = activity()
            ->causedBy(Auth::user())
            ->performedOn($list)
            ->withProperties($properties)
            ->log($changes . ' made by ' . Auth::user()->name);

        return true;
    }

    public function logDeletedActivity($list, $changeLogs)
    {
        $attributes = $this->unsetAttributes($list);

        $properties = [
            'attributes' => $attributes->toArray()
        ];

        $activity = activity()
            ->causedBy(Auth::user())
            ->performedOn($list)
            ->withProperties($properties)
            ->log($changeLogs);

        return true;
    }

    public function logLoginDetails($user)
    {
        $updated_at = Carbon::now()->format('d/m/Y H:i:s');
        $properties = [
            'attributes' => ['name' => $user->name, 'description' => 'Inicio sesión a las ' . $updated_at]
        ];

        $changes = 'El usuario ' . $user->name . ' inicio sesión en el sistema';

        $activity = activity()
            ->causedBy(Auth::user())
            ->performedOn($user)
            ->withProperties($properties)
            ->log($changes);

        return true;
    }

    public function logRegisterDetail($user)
    {
        $updated_at = Carbon::now()->format('d/m/Y H:i:s');
        $properties = [
            'attributes' => ['name' => $user->name, 'description' => 'Creo su cuenta a las ' . $updated_at .
                ', con el email ' . $user->email]
        ];

        $changes = 'El usuario ' . $user->name . ' creo una cuenta en el sistema, con el email ' . $user->email;

        $activity = activity()
            ->causedBy($user)
            ->performedOn($user)
            ->withProperties($properties)
            ->log($changes);

        return true;
    }
    public function logDisableUser($logModel, $changes, $request, $model)
    {
        $user = Auth::user();
        $changes = 'El usuario ' . $user->name . ' dio de baja al usuario ' . $model;
        $activity = activity()
            ->causedBy(Auth::user())
            ->performedOn($logModel)
            ->withProperties(['attributes' => $request])
            ->log($changes);
        $lastActivity = Activity::all()->last();

        return true;
    }

    public function logEnableUser($logModel, $changes, $request, $model)
    {
        $user = Auth::user();
        $changes = 'El usuario ' . $user->name . ' habilito al usuario ' . $model;
        $activity = activity()
            ->causedBy(Auth::user())
            ->performedOn($logModel)
            ->withProperties(['attributes' => $request])
            ->log($changes);
        $lastActivity = Activity::all()->last();

        return true;
    }

    public function logBackUp()
    {
        $user = Auth::user();
        $changes = 'El usuario ' . $user->name . ' creo una Copia de Seguridad';
        $activity = activity()
            ->causedBy(Auth::user())
            ->log($changes);
        $lastActivity = Activity::all()->last();

        return true;
    }




    public function unsetAttributes($model)
    {
        unset($model->created_at);
        unset($model->updated_at);
        return $model;
    }
}
