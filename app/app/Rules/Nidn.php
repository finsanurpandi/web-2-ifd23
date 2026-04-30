<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\Department;

class Nidn implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $kodeProdi = substr($value, 0, 5); // 5520123001 ==> 55201
        $department = Department::where('code', $kodeProdi)->first();

        if(!$department) {
            $fail("kode prodi tidak sesuai");
        }

        // if(!is_number($value)) {
        //     $fail(":attribute value untuk nidn harus berupa angka");
        // }
    }
}
